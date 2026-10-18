<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1em;
			height: 25px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getApplicantById = getApplicantById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getApplicantById['first_name']; ?></p>
			<p>Last Name: <?php echo $getApplicantById['last_name']; ?></p>
			<p>Email Address: <?php echo $getApplicantById['email']; ?></p>
			<p>Contact Number: <?php echo $getApplicantById['contact_number']; ?></p>
            <p>Gender: <?php echo $getApplicantById['gender']; ?></p>
			<p>Specialization: <?php echo $getApplicantById['specialization']; ?></p>
			<p>Github Profile: <?php echo $getApplicantById['github_link']; ?></p>
			<input type="button" value="Go Back" onclick="history.back()">
			<input type="submit" name="deleteApplicantBtn" value="Delete">
		</div>
	</form>
</body>
</html>
