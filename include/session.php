<?php
session_start();
include('../config/serverconfig-f.php');
if (isset($_SESSION['admin_id'])) {
	$query_loginadmin = "SELECT * FROM admin WHERE admin_id = '" . $_SESSION['admin_id'] . "'";
	$loginadmin = mysqli_query($con, $query_loginadmin);
	$row_loginadmin = mysqli_fetch_assoc($loginadmin);
} else {
	array_push($errors, "-Please Login first");
	include('../errors.php');
	exit();
}

