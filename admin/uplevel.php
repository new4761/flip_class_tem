<?php
include('../config/serverconfig-f.php');

$id = $_POST['getid'];
$level = $_POST['getlevel'];
if(isset($id)){
    $sql = "UPDATE member SET m_level = m_level +1 WHERE m_id = '".$id."' ";
    $query = mysqli_query($con,$sql);
    if($query){
        echo "pass";
    }
    else {
        echo "failed";
    }
}
else {
    echo "เกิดข้อผิดพลาด";
}

?>
