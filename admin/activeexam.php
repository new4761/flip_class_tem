<?php
include '../include/session.php';
<<<<<<< HEAD

$ID = $_POST["getid"];

if(isset($ID)){
    $query_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $ID . "'";
    $lesson = mysqli_query($con, $query_lesson);
    $lesson_data = mysqli_fetch_assoc($lesson);
    $status;
    
    
    if ($lesson_data['exam_status'] == 'active') {
        $status = 'noactive';
    } else {
        $status = 'active';
    }
    $sql = "UPDATE lesson SET exam_status = '" . $status . "' WHERE lesson_id = '" . $ID . "'";
    if (mysqli_query($con, $sql)) {
        echo $status;
        echo $ID;
    }
    
}
else {
    echo "เกิดข้อผิดพลาด";
}
?>
=======
$query_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $_GET['l_id']  . "'";
$lesson = mysqli_query($con, $query_lesson);
$lesson_data = mysqli_fetch_assoc($lesson);
$status;


if ($lesson_data['exam_status'] == 'active') {
    $status = 'noactive';
} else {
    $status = 'active';
}
$sql = "UPDATE lesson SET exam_status = '" . $status . "' WHERE lesson_id = '" . $_GET['l_id']  . "'";
if (mysqli_query($con, $sql)) {
    echo $status;
    header('Location: ' . $_SERVER["HTTP_REFERER"]);
}
>>>>>>> 1cb27bf6f525e22c3f35d0cbefe921f7b7a4e3e5
