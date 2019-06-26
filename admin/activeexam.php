<?php
include '../include/session.php';
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
