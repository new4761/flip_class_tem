<?php
include '../include/session.php';

$ID = $_POST["getid"];

if(isset($ID)){
    $query_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $ID . "'";
    $lesson = mysqli_query($con, $query_lesson);
    $lesson_data = mysqli_fetch_assoc($lesson);
    $status;
    
    
    if ($lesson_data['lesson_status'] == 'active') {
        $status = 'noactive';
    } else {
        $status = 'active';
    }
    $sql = "UPDATE lesson SET lesson_status = '" . $status . "' WHERE lesson_id = '" . $ID . "'";
    if (mysqli_query($con, $sql)) {
        echo $status;
        echo $ID;
    }
    
}
else {
    echo "เกิดข้อผิดพลาด";
}
?>