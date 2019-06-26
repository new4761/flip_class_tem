<?php
include('config/serverconfig-f.php');

$number = count($_POST["name"]);
if ($number > 1) {
	$header = mysqli_real_escape_string($con, $_POST['headtopic']);
	$lessonid = mysqli_real_escape_string($con, $_POST['id']);
	$sub_choiceA = mysqli_real_escape_string($con, $_POST["name"][0]);
	$sub_choiceB = mysqli_real_escape_string($con, $_POST["name"][1]);
	$sub_choiceC = mysqli_real_escape_string($con, $_POST["name"][2]);
	$sub_choiceD = mysqli_real_escape_string($con, $_POST["name"][3]);
	$sub_choiceE = mysqli_real_escape_string($con, $_POST["name"][4]);
	$sub_correctchoice = mysqli_real_escape_string($con, $_POST["correct"]);
	$sql = "INSERT INTO choicetest(choice_head,lesson_id,sub_choiceA,sub_choiceB,sub_choiceC,sub_choiceD,sub_choiceE,sub_correctchoice) VALUES('$header','$lessonid'
					,'$sub_choiceA',
					'$sub_choiceB',
					'$sub_choiceC',
					'$sub_choiceD',
					'$sub_choiceE',
					'$sub_correctchoice')";
		if(mysqli_query($con, $sql)){
			echo "Data Inserted";
		}
		else {
			echo "sql error";
		}
} else {
	echo "Please Enter Name";
}
?>
