<?php
session_start();
include('config/serverconfig-f.php');
if (isset($_SESSION['m_id'])) {
    header('location: index.php');
    exit();
}
else if(isset($_SESSION['admin_id'])){
    header('location: index.php');
    exit();
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if (preg_match('/^admin@krudee/',$username)) { 
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'";
            $results = mysqli_query($con, $query);
            $objResults = mysqli_fetch_array($results);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['admin_id'] = $objResults['admin_id'];
                $_SESSION['success'] = "You are now logged in";
                header("location: index.php");
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    } else {
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM member WHERE m_username='$username' AND m_password='$password'";
            $results = mysqli_query($con, $query);
            $objResults = mysqli_fetch_array($results);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['m_id'] = $objResults['m_id'];
                $_SESSION['success'] = "You are now logged in";
                header("location: index.php");
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
}



?>

<!DOCTYPE html>
<html>

<head>
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php" class="content">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register2.php">Sign up</a>
        </p>
    </form>
</body>

</html>