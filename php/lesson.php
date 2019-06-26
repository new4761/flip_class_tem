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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard - Ace Admin</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


    <!-- make html components @new4761 edit -->
    <link rel="import" href="/components/navbar.html">
    <link rel="import" href="/components/sidebar.html">
    <link rel="import" href="/components/footer.html">
    <link rel="import" href="/components/lessonContent/lessonContent.html">

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="no-skin" style="font-family: 'Mitr', sans-serif !important;">
    <div id="navbar" class="navbar navbar-default ace-save-state" style="font-family: 'Mitr', sans-serif !important;">
        <!-- forom navbar.html -->
        <navbar-element></navbar-element>
    </div>
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>

        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {}
            </script>
            <!-- forom sidebar.html -->
            <sidebar-item-element></sidebar-item-element>

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>

        <div class="main-content">


            <div class="main-content-inner">

                <!-- from lessonContent.html-->
                <lessonContent-element>
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
                </lessonContent-element>
            </div>


            <!-- from footer.html-->
            <footer-element></footer-element>

        </div><!-- /.main-content -->



        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
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
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
    <script src="assets/js/jquery-ui.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.sparkline.index.min.js"></script>
    <script src="assets/js/jquery.flot.min.js"></script>
    <script src="assets/js/jquery.flot.pie.min.js"></script>
    <script src="assets/js/jquery.flot.resize.min.js"></script>

    <!-- ace scripts -->
    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script src="main.js"></script>
    <script src="assets/js/ace-extra.min.js"></script>
</body>

</html>