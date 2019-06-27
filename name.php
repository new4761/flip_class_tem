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
	$sub_correctchoice = mysqli_real_escape_string($con, $_POST["selectcc"]);

	if (empty($header)) {
		array_push($errors, "-Username is required");
	}
	if (empty($sub_choiceA)) {
		array_push($errors, "-choiceA is required");
	}
	if (empty($sub_choiceB)) {
		array_push($errors, "-choiceB is required");
	}
	if (empty($sub_choiceC)) {
		array_push($errors, "-choiceC is required");
	}
	if (empty($sub_choiceD)) {
		array_push($errors, "-choiceD is required");
	}
	if ($sub_correctchoice == 0) {
		array_push($errors, "-correctchoice is required");
	}
	if (count($errors) == 0) {
		$correctchoice;
		switch ($sub_correctchoice) {
			case 1:
				$correctchoice = $sub_choiceA;
				break;
			case 2:
				$correctchoice = $sub_choiceB;
				break;
			case 3:
				$correctchoice = $sub_choiceC;
				break;
			case 4:
				$correctchoice = $sub_choiceD;
				break;
			case 5:
				$correctchoice = $sub_choiceE;
				break;
		}
		$sql = "INSERT INTO choicetest(choice_head,lesson_id,choice_A,choice_B,choice_C,choice_D,choice_E,choice_correct) VALUES('$header',
					'$lessonid',
					'$sub_choiceA',
					'$sub_choiceB',
					'$sub_choiceC',
					'$sub_choiceD',
					'$sub_choiceE',
					'$correctchoice')";
		if (mysqli_query($con, $sql)) {
			echo "Data Inserted";
			
		} else {
			//echo "sql error";
			printf("Errormessage: %s\n", mysqli_error($con));
		}
	} else {
		include('errors.php');
	}
} else {
	echo "Please fill the blank";
}
