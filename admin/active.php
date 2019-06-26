<?php
include '../include/session.php';
if(isset($_POST['id'])){
    $query_lesson = "SELECT * FROM lesson WHERE lesson_id = '" . $_POST['id']  . "'";
    $lesson = mysqli_query($con, $query_lesson);
    $lesson_data = mysqli_fetch_assoc($lesson);
    $status;
    
    
    if ($lesson_data['lesson_status'] == 'active') {
        $status = 'noactive';
    } else {
        $status = 'active';
    }
    $sql = "UPDATE lesson SET lesson_status = '" . $status . "' WHERE lesson_id = '" . $_POST['id']  . "'";
    if (mysqli_query($con, $sql)) {
        echo $status;
    }
    
}
else {
    echo $_POST['id'];
}
?>