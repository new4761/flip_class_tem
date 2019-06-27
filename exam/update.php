<?php
session_start();
include('../config/serverconfig-f.php');
$anws = $_POST['answer'];
$choiceid = $_POST['id'];
$page = $_POST['pageu'];
//$memberid = $_POST['memberid'];
$memberid = '1';
$lessonid = $_POST['lessonid'];
//echo "pass " . $anws . " " . $choiceid . " " . $memberid . " " . $lessonid . "";
$_SESSION['page'] = $page;
$sql = "SELECT choice_correct FROM choicetest WHERE choice_id = '" . $choiceid . "' ";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($query);

$historysql = "SELECT lesson_id FROM history WHERE m_id = '" . $memberid . "' ";
$historyquery = mysqli_query($con, $historysql);
$row_history = mysqli_num_rows($historyquery);
if (!($row_history)) {
    $sqlhis = "INSERT INTO history (m_id,lesson_id,score,wrong,noans,type) VALUES ('$memberid','$lesson_id','0','0','0','pre');";
    $querysql = mysqli_query($con, $sqlhis);
    if ($querysql) {
        echo "pass";
    } else {
        echo "failed";
    }
}
echo $_SESSION['page'];
?>
