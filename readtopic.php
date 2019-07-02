<?php
include('config/serverconfig-f.php');
if(isset($_GET['a_id'])){
    $col_a = $_GET['a_id'];
}
else {
    $statuserrorspage = 200;
    include('../errorpage/errorpage.php');
    exit();
}

$sql = "SELECT * FROM announcement WHERE a_id = '".$col_a."' ";
$query = mysqli_query($con,$sql);
$row = mysqli_num_rows($query);
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $data['a_head']; ?></title>
</head>
<body>
    <h3><?php echo $data['a_head']; ?> </h3>
    <p> <?php echo $data['a_content']; ?> </p>
    <hr>
    <p>Postby :<?php echo $data['a_postby']; ?> Date : <?php echo $data['time']; ?>  </p>
</body>
</html>