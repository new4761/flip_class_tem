<?php
include('config/serverconfig-f.php');
$currentPage = $_SERVER["PHP_SELF"];
$previousPage = $_SERVER["HTTP_REFERER"];
echo $currentPage;
echo $previousPage;

if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    $fname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $studentid = mysqli_real_escape_string($con, $_POST['studentid']);

    if (empty($username)) {
        array_push($errors, "-Username is required");
    }
    if (empty($email)) {
        array_push($errors, "-Email is required");
    }
    if (empty($password)) {
        array_push($errors, "-Password is required");
    }
    if ($password != $password2) {
        array_push($errors, "-The two passwords do not match");
    }
    if (empty($fname)) {
        array_push($errors, "-Fisrt Name is required");
    }
    if (empty($lname)) {
        array_push($errors, "-Last Name is required");
    }
    if (empty($year)) {
        array_push($errors, "-ระดับชั้น is required");
    }
    if (empty($studentid)) {
        array_push($errors, "-Studentid is required");
    }


    $user_check_query = "SELECT * FROM member WHERE m_username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['m_username'] === $username) {
            array_push($errors, "-Username already exists");
        }

        if ($user['m_mail'] === $email) {
            array_push($errors, "-Email already exists");
        }
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password_c = md5($password); //encrypt the password before saving in the database

        $query = "INSERT INTO member (m_username, m_password,m_firstname,m_lastname,m_email,
        m_year,m_studentid) 
  			  VALUES('$username', '$password_c','$fname','$lname','$email','$year','$studentid')";
        $objquery = mysqli_query($con, $query);
        $id = mysqli_insert_id($con);
        if ($objquery) {
            $_SESSION['username'] = $username;
            $_SESSION['m_id'] = $id; 
            header('Location: ' . $_SERVER["HTTP_REFERER"]);
        } else {
            printf("Errormessage: %s\n", mysqli_error($con));
        }
    }
}

?>

<html>
<head>
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8">
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="POST" enctype="multipart/form-data" name="form" id="form">
        <?php include('errors.php'); ?>
        <div>
            <label>Username</label>
            <input type="text" name="username" id="name">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label>Confirm Password</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label>Firstname</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label>Lastname</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div>
            <label>E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label>ระชั้น (Ex. 5/2 )</label>
            <input type="text" name="year" id="year">
        </div>
        <div>
            <label>รหัสนักเรียน</label>
            <input type="text" name="studentid" id="studentid">
        </div>
        <div>
            <button type="submit" name="reg_user">Register</button>
        </div>
    </form>


</body>

</html>