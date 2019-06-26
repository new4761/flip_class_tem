<?php
session_start();
include('config/serverconfig-f.php');

if (isset($_SESSION['m_id'])) {
    $query_loginmember = "SELECT * FROM member WHERE m_id = '" . $_SESSION['m_id'] . "'";
    $loginmember = mysqli_query($con, $query_loginmember);
    $row_loginmember = mysqli_fetch_assoc($loginmember);
} else if (isset($_SESSION['admin_id'])) {
    $query_loginadmin = "SELECT * FROM admin WHERE admin_id = '" . $_SESSION['admin_id'] . "'";
    $loginadmin = mysqli_query($con, $query_loginadmin);
    $row_loginadmin = mysqli_fetch_assoc($loginadmin);
} else {
    array_push($errors, "-Please Login first");
    include('errors.php');
    exit();
}
if (isset($_GET['l_id'])) {
    $colname_lesson = $_GET['l_id'];
} else {
    header('location: index.php');
}

$query_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $colname_lesson . "' ";
$lesson = mysqli_query($con, $query_lesson);
$row_lesson = mysqli_num_rows($lesson);
$data_lesson = mysqli_fetch_assoc($lesson)
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $data_lesson['lesson_name']; ?></title>
    <?php include '../include/header.php'; ?>
</head>

<body>
    <?php
    if ($row_lesson > 0) { ?>
        <p>บทเรียนทั้งหมด<p>
                <p>ชื่อบทเรียน : <?php echo $data_lesson['lesson_name']; ?></p>
                <p>เนื่อหาและบทเรียน : <?php echo $data_lesson['lesson_content']; ?> </p>
                <p>ADMINZONE : เพิ่มแบบทดสอบ <a href="addchoice.php?l_id=<?php echo $data_lesson['lesson_id']; ?>">choice</a></p>

                <p>แบบทดสอบ</p>
                <a href="choicetest.php?l_id=<?php echo $data_lesson['lesson_id'] ?>"> Choice Test</a><br>
                <a href="writetest.php?l_id=<?php echo $data_lesson['lesson_id'] ?>"> Writing Test</a>
            <?php
        } else { ?>
                <h1>ไม่มีบทเรียน</h1>
            <?php     }
        ?>
</body>

</html>