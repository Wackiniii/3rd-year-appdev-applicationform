<?php  

if (isset($_GET['applicantName'])) {
	echo "<h2>Applicant Name: " . $_GET['applicantName']. "</h2>";
}

if (isset($_GET['specialization'])) {
	echo "<h2>Specialization: " . $_GET['specialization'] . "</h2>";
}
?>
