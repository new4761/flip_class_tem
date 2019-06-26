<?php
session_start();
include('config/serverconfig-f.php');
if (isset($_SESSION['m_id'])) {
    header('location: index.php');
    exit();
} else if (isset($_SESSION['admin_id'])) {
    header('location: index.php');
    exit();
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if (preg_match('/^admin@krudee/', $username)) {
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center" style="font-family: 'Mitr', sans-serif !important;">
                            <h1>

                                <span class="red">login</span>
                                <span class="white" id="id-text2">system</span>
                            </h1>
                            <!-- <h4 class="blue" id="id-company-text">&copy;Navamindarajudis Krungthepmahanakhon</h4> -->
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa  fa-book green"></i>
                                            ดำเนินการเข้าสู่ระบบ
                                        </h4>

                                        <div class="space-6"></div>

                                        <form method="post" action="login.php" class="content">
                                            <fieldset>
                                                <?php include('errors.php'); ?>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="form-control" placeholder="Username" name="username" />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Password" name="password" />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl">จดจำฉันไว้</span>
                                                    </label>

                                                    <button type="submit" class="width-35 pull-right btn btn-sm btn-primary" name="login_user">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">เข้าสู่ระบบ</span>
                                                    </button>
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>






                                    </div><!-- /.widget-main -->

                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                ลืมรหัสผ่าน
                                            </a>
                                        </div>

                                        <div>
                                            <a href="#" data-target="#signup-box" class="user-signup-link">
                                                สมัครสมาชิกใหม่
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                            <div id="forgot-box" class="forgot-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header red lighter bigger">
                                            <i class="ace-icon fa fa-key"></i>
                                            Retrieve Password
                                        </h4>

                                        <div class="space-6"></div>
                                        <p>
                                            Enter your email and to receive instructions
                                        </p>

                                        <form>
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" class="form-control" placeholder="Email" />
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                                </label>

                                                <div class="clearfix">
                                                    <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                        <i class="ace-icon fa fa-lightbulb-o"></i>
                                                        <span class="bigger-110">Send Me!</span>
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div><!-- /.widget-main -->

                                    <div class="toolbar center">
                                        <a href="#" data-target="#login-box" class="back-to-login-link">
                                            Back to login
                                            <i class="ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.forgot-box -->

                            <div id="signup-box" class="signup-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                            <i class="ace-icon fa fa-users blue"></i>
                                            สมัครสมาชิกใหม่
                                        </h4>

                                        <div class="space-6"></div>
                                        <p> กรุณาระบุบรายละเอียดให้ครบถ้วน: </p>

                                        <form method="POST" enctype="multipart/form-data" name="form" id="form">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" class="form-control" placeholder="Email" name="email" />
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                                </label>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input maxlength="5" type="text" name="studentid" id="onlyNumbers" onkeypress="allowNumbersOnly(event)" class="form-control" placeholder="studentID" />
                                                        <i class="ace-icon fa fa-s"></i>
                                                    </span>
                                                </label>
                                                <label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" placeholder="firstname" name="firstname" />
														<i class="ace-icon fa fa-user"></i>
													</span>
                                                </label>
                                                <label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" placeholder="lastname" name="lastname" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
                                                <label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" placeholder="ระดับชั้น" name="year" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" class="form-control" placeholder="Username" name="username" />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Password" name="password" />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" placeholder="Repeat password" name="password2"/>
                                                        <i class="ace-icon fa fa-retweet"></i>
                                                    </span>
                                                </label>

                                                <label class="block">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl">
                                                        ฉันยอมรับ
                                                        <a href="#">ข้อตกลงทั้งหมด</a>
                                                    </span>
                                                </label>

                                                <div class="space-24"></div>

                                                <div class="clearfix">
                                                    <button type="reset" class="width-30 pull-left btn btn-sm">
                                                        <i class="ace-icon fa fa-refresh"></i>
                                                        <span class="bigger-110">รีเซ็ต</span>
                                                    </button>

                                                    <button type="submit" class="width-65 pull-right btn btn-sm btn-success" name="reg_user">
                                                        <span class="bigger-110">ลงทะเบียน</span>

                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="toolbar center">
                                        <a href="#" data-target="#login-box" class="back-to-login-link">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            Back to login
                                        </a>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.signup-box -->
                        </div><!-- /.position-relative -->


                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible'); //hide others
                $(target).addClass('visible'); //show target
            });
        });

        // input only number
        function allowNumbersOnly(e) {
            var code = (e.which) ? e.which : e.keyCode;
            if (code > 31 && (code < 48 || code > 57)) {
                e.preventDefault();
            }
        }
    </script>
</body>

</html>