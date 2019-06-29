<?php
session_start();
include('../config/serverconfig-f.php');
$anws = $_POST['answer'];
$choiceid = $_POST['id'];
$page = $_POST['pageu'];
//$memberid = $_POST['memberid'];
$memberid = $_SESSION['m_id'];
$lessonid = $_POST['lessonid'];
$total = $_POST['totaltest'];
$_SESSION['page'] = $page;
$typeexam = $_POST['type']; 
$sql = "SELECT choice_correct FROM choicetest WHERE choice_id = '" . $choiceid . "' ";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($query);

(int)$score = 0;
(int)$wrong = 0;
if($anws == $data['choice_correct']){
    $score++;
}
else {
    $wrong++;
}

$historysql = "SELECT lesson_id FROM history WHERE m_id = '" . $memberid . "' and type = '".$typeexam."' ";
$historyquery = mysqli_query($con, $historysql);
$row_history = mysqli_num_rows($historyquery);
if (!($row_history)) {
    $sqlhis = "INSERT INTO history (m_id,lesson_id,score,wrong,total,type) VALUES ('$memberid','$lessonid','0','0','$total','$typeexam');";
    $querysql = mysqli_query($con, $sqlhis);
    if ($querysql) {
        echo "pass";
    } else {
        echo "failed";
    }
    $sqlhist = "UPDATE history SET score = score +'".$score."' , wrong = wrong + '".$wrong."' WHERE m_id = '$memberid' ";
    $querysqlhis = mysqli_query($con, $sqlhist);
}
else {
    $sqlhist = "UPDATE history SET score = score +'".$score."' , wrong = wrong + '".$wrong."' WHERE m_id = '$memberid' ";
    $querysqlhis = mysqli_query($con, $sqlhist);
    if ($querysqlhis) {
        echo "pass";
    } else {
        echo "failed";
    }
}
if($_SESSION['page']>$total){
    $sqlhist = "UPDATE history SET status = 'yes' WHERE m_id = '$memberid' ";
    $querysqlhis = mysqli_query($con, $sqlhist);
}
echo "pass " . $score . " " . $wrong . " " . $_SESSION['page'] ." ";
?>
