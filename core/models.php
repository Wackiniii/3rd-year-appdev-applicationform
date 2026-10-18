<?php 

require_once 'dbConfig.php';

function insertIntoApplicantRecords($pdo, $firstName, $lastName, $email, $contactNum, $gender, $specialization, $githubLink) {

	$sql = "INSERT INTO software_developer_application_form (first_name, last_name, email, contact_number, gender, specialization, github_link) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $email, $contactNum, $gender, $specialization, $githubLink]);

	if ($executeQuery) {
		return true;	
	}
}

// 
function seeAllApplicantRecords($pdo) {
	$sql = "SELECT * FROM software_developer_application_form";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getApplicantByID($pdo, $id) {
	$sql = "SELECT * FROM software_developer_application_form WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$id])) {
		return $stmt->fetch();
	}
}

function updateApplicant($pdo, $id, $firstName, $lastName, $email, $contactNum, $gender, $specialization, $githubLink) {

	$sql = "UPDATE software_developer_application_form
				SET first_name = ?, 
					last_name = ?, 
					email = ?, 
					contact_number = ?, 
					gender = ?, 
					specialization = ?, 
					github_link = ? 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstName, $lastName, $email, $contactNum, 
				$gender, $specialization, $githubLink, $id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteApplicant($pdo, $id) {

	$sql = "DELETE FROM software_developer_application_form WHERE id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}

}




?>
