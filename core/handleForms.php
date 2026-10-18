<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewApplicantBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$contactNum = trim($_POST['contactNum']);
	$gender = trim($_POST['gender']);
	$specialization = trim($_POST['specialization']);
	$githubLink = trim($_POST['githubLink']);

	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($contactNum) && !empty($gender) && !empty($specialization)  && !empty($githubLink)) {
			$query = insertIntoApplicantRecords($pdo, $firstName, $lastName, 
			$email, $contactNum, $gender, $specialization, $githubLink);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editStudentBtn'])) {
	$id = trim($_POST['id']);
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$contactNum = trim($_POST['contactNum']);
	$gender = trim($_POST['gender']);
	$specialization = trim($_POST['specialization']);
	$githubLink = trim($_POST['githubLink']);

	if (!empty($id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($contactNum) && !empty($gender) && !empty($specialization)  && !empty($githubLink)) {

		$query = updateApplicant($pdo, $id, $firstName, $lastName, 
			$email, $contactNum, $gender, $specialization, $githubLink);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteApplicantBtn'])) {

	$query = deleteApplicant($pdo, $_GET['id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>




