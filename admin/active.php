<?php
include '../include/session.php';
<<<<<<< HEAD

$ID = $_POST["getid"];

if(isset($ID)){
    $query_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $ID . "'";
=======
if(isset($_POST['id'])){
    $query_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $_POST['id']  . "'";
>>>>>>> 1cb27bf6f525e22c3f35d0cbefe921f7b7a4e3e5
    $lesson = mysqli_query($con, $query_lesson);
    $lesson_data = mysqli_fetch_assoc($lesson);
    $status;
    
    
    if ($lesson_data['lesson_status'] == 'active') {
        $status = 'noactive';
    } else {
        $status = 'active';
    }
<<<<<<< HEAD
    $sql = "UPDATE lesson SET lesson_status = '" . $status . "' WHERE lesson_id = '" . $ID . "'";
    if (mysqli_query($con, $sql)) {
        echo $status;
        echo $ID;
=======
    $sql = "UPDATE lesson SET lesson_status = '" . $status . "' WHERE lesson_id = '" . $_POST['id']  . "'";
    if (mysqli_query($con, $sql)) {
        echo $status;
>>>>>>> 1cb27bf6f525e22c3f35d0cbefe921f7b7a4e3e5
    }
    
}
else {
<<<<<<< HEAD
    echo "เกิดข้อผิดพลาด";
=======
    echo $_POST['id'];
>>>>>>> 1cb27bf6f525e22c3f35d0cbefe921f7b7a4e3e5
}
?>