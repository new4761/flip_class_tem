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

/*if (isset($_GET['l_id'])) {
    
}*/
$sql_lesson = "SELECT lesson_name FROM lesson WHERE lesson_id = '1'";
$query_lesson = mysqli_query($con, $sql_lesson);
$data_lesson = mysqli_fetch_assoc($query_lesson);


$lessonid = '1';
$sql = "SELECT choice_id FROM choicetest WHERE lesson_id = '1'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);
$perpage = 1;
$total_page = ceil($row / $perpage);



?>
<!DOCTYPE html>
<html>

<head>
    <title>test</title>
    <?php include '../include/header.php'; ?>
</head>

<body>
    <!-- Choice TEST start -->
    <?php
    
    if (isset($_SESSION['page']) ) {
        $page = $_SESSION['page'];
       
    } else {
        $page = 1;
        $_SESSION['page'] = $page;
    }
    if($page > $total_page){
        $page = 1;
        $_SESSION['page'] = $page;
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
                var member_id = '<?php echo $row_loginmember['m_id'] ?>';
                var lesson_id = $("input[name='lessonid']").val();
                var page = '<?php echo $pageu; ?>';
                if (vale) {
                    $.ajax({
                        url: "update.php",
                        method: "POST",
                        data: {
                            answer: vale,
                            id: choiceid,
                            memberid: member_id,
                            lessonid: lesson_id,
                            pageu : page
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