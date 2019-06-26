<?php
session_start();
include('config/serverconfig-f.php');
if (isset($_SESSION['m_id'])) {
    $query_loginmember = "SELECT * FROM member WHERE m_id = '" . $_SESSION['m_id'] . "'";
    $loginmember = mysqli_query($con, $query_loginmember);
    $row_loginmember = mysqli_fetch_assoc($loginmember);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>เข้าสู่ระบบ</title>
    <?php include 'includes/header.php'; ?>
</head>

<body>

    <?php if (isset($_SESSION['m_id'])) { ?>
        <a href="logout.php"> logout </a>
         <a href =" exam.php"> เริ่มทำแบบทดสอบ </a>
    <?php } else if (isset($_SESSION['admin_id'])) { ?>
        <h3>HELLO ADMIN </h3>
        <a href="logout.php"> logout </a> <br>
        <a href="admin"> adminpage </a>
    <?php } else { ?>
        <p><a href="register.php"> register </a></p>
        <p><a href="login.php"> login </a></p>
    <?php } ?>
</body>

</html>