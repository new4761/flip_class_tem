<?php
session_start();
include('../config/serverconfig-f.php');
if (isset($_SESSION['m_id'])) {
    $query_loginmember = "SELECT * FROM member WHERE m_id = '" . $_SESSION['m_id'] . "'";
    $loginmember = mysqli_query($con, $query_loginmember);
    $row_loginmember = mysqli_fetch_assoc($loginmember);
} else if (isset($_SESSION['admin_id'])) {
    $query_loginadmin = "SELECT * FROM admin WHERE admin_id = '" . $_SESSION['admin_id'] . "'";
    $loginadmin = mysqli_query($con, $query_loginadmin);
    $row_loginadmin = mysqli_fetch_assoc($loginadmin);
    $status_admin = '1';
} else {
    array_push($errors, "-Please Login first");
    include('errors.php');
    exit();
}




if (isset($_GET['l_id'])) {
    $lesson_id = $_GET['l_id'];
} else {
    $statuserrorspage = 100;
    include('../errorpage/errorpage.php');
    exit();
}

$sql_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $lesson_id . "' ";
$query_lesson = mysqli_query($con, $sql_lesson);
$row_lesson = mysqli_num_rows($query_lesson);
$data_lesson = mysqli_fetch_assoc($query_lesson);
if ($data_lesson['lesson_level'] > $row_loginmember['m_level']) {
    $statuserrorspage = 300;
    include('../errorpage/errorpage.php');
    exit();
}
if($data_lesson['exam_status']=='noactive'){
    $statuserrorspage = 200;
    include('errorpage/errorpage.php');
    exit();
}


$sql = "SELECT * FROM choicetest WHERE lesson_id = '" . $lesson_id . "'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);
$perpage = 1;
$total_page = ceil($row / $perpage);

if ($total_page == 0) {
    $statuserrorspage = 200;
    include('../errorpage/errorpage.php');
    exit();
}
if (isset($_GET['type'])) {
    $typeexam  = $_GET['type'];
} else {
    $statuserrorspage = 500;
    include('../errorpage/errorpage.php');
    exit();
}

$sqlhistory = "SELECT * FROM history WHERE m_id = '" . $row_loginmember['m_id'] . "' AND type ='" . $typeexam . "' AND lesson_id = '" . $lesson_id . "' ";
$queryhistory = mysqli_query($con, $sqlhistory);
$status = mysqli_fetch_assoc($queryhistory);
if ($typeexam == 'pre') {
    $nametype = "แบบทดสอบก่อนเเรียน";
} else if ($typeexam == 'post') {
    $nametype = "แบบทดสอบหลังเเรียน";
    if ($status['type'] != 'post') {
        $statuserrorspage = 100;
        include('../errorpage/errorpage.php');
        exit();
    }
} else {
    $statuserrorspage = 200;
    include('../errorpage/errorpage.php');
    exit();
}


?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $nametype; ?></title>
    <?php include '../include/header.php'; ?>
</head>

<body>
    <!-- Choice TEST start -->

    <?php
    if ($status['status'] == yes) { ?>
        <h1> Result </h1>
        <p> Your Score : <?php echo $status['score']; ?> / <?php echo $status['total']; ?></p>
        <p> Wrong : <?php echo $status['wrong']; ?> / <?php echo $status['total']; ?></p>
        <a href="../lesson.php?l_id=<?php echo $lesson_id; ?>">เข้าสู่บทเรียน</a>

        <?php
        exit();
    } else if ($status['status'] == no) {
        $_SESSION['page'] = $status['present'];
    } else {
        $page = 1;
        $_SESSION['page'] = $page;
    }
    if (isset($_SESSION['page'])) {
        $page = $_SESSION['page'];
    } else {
        $page = 1;
        $_SESSION['page'] = $page;
    }
    if ($page > $total_page) {
        $_SESSION['page'] = null;
        echo $_SESSION['page'];
        exit();
    }
    ?>
    <h1>แบบทดสอบ <?php echo $data_lesson['lesson_name']; ?> </h1>
    <form method="POST" enctype="multipart/form-data" name="add_name" id="add_name">
        <?php
        $start_from = ($page - 1);
        $sql_choice = "SELECT * FROM choicetest ORDER BY choice_id ASC LIMIT $start_from, " . $perpage;
        $query_choice = mysqli_query($con, $sql_choice);
        $row_choice = mysqli_num_rows($query_choice);

        if ($row_choice > 0) {

            while ($data_choice = mysqli_fetch_array($query_choice)) {
                echo $_SESSION['page'];
                ?>

                <h3> ข้อที่ <?php echo $page; ?> <?php echo $data_choice['choice_head']; ?> </h3>
                <input type="hidden" value="<?php echo $data_choice['choice_id']; ?>" name="idchoice" />
                <input type="hidden" value="<?php echo $data_choice['lesson_id']; ?>" name="lessonid" />
                <input type="radio" name="answer" value="<?php echo $data_choice['choice_A']; ?>" id="answer"> <?php echo $data_choice['choice_A']; ?><br>
                <input type="radio" name="answer" value="<?php echo $data_choice['choice_B']; ?>" id="answer"> <?php echo $data_choice['choice_B']; ?><br>
                <input type="radio" name="answer" value="<?php echo $data_choice['choice_C']; ?>" id="answer"> <?php echo $data_choice['choice_C']; ?><br>
                <input type="radio" name="answer" value="<?php echo $data_choice['choice_D']; ?>" id="answer"> <?php echo $data_choice['choice_D']; ?><br>
                <?php if ($data_choice['choice_E'] != null) { ?>
                    <input type="radio" name="answer" id="answer" value=" <?php echo $data_choice['choice_E']; ?>"> <?php echo $data_choice['choice_E']; ?><br>
                <?php        } ?>
                <button name="submit" id="submit" type="submit" value="submit_comfirm">ยืนยันคำตอบ </button>
            <?php
            }

            $pageu = $page + 1;
            // $url = "choicetest.php?page=" . $pageu . " ";
        }
        ?>

    </form>

    <script>
        $(document).ready(function() {
            $('button[name="submit"]').click(function() {
                var vale = $("input[name='answer']:checked").val();
                var choiceid = $("input[name='idchoice']").val();
                var member_id = '<?php echo $row_loginmember['
                m_id '] ?>';
                var lesson_id = $("input[name='lessonid']").val();
                var page = '<?php echo $pageu; ?>';
                var total = '<?php echo $total_page; ?>';
                var typeexam = '<?php echo $typeexam; ?>'
                if (vale) {
                    $.ajax({
                        url: "update.php",
                        method: "POST",
                        data: {
                            answer: vale,
                            id: choiceid,
                            memberid: member_id,
                            lessonid: lesson_id,
                            pageu: page,
                            totaltest: total,
                            type: typeexam
                        },
                        success: function(data) {

                            location.reload();
                            alert(data);
                        }
                    });
                } else alert("Plase make a choice");

            });


        });
    </script>
    <!--choicetest  end-->
</body>

</html>