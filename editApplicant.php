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
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getApplicantById = getApplicantById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getApplicantById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getApplicantById['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email Address</label>
			<input type="email" name="email" value="<?php echo $getApplicantById['email']; ?>">
		</p>
		<p>
			<label for="contactNum">Contact Number</label>
			<input type="text" name="contactNum" value="<?php echo $getApplicantById['contact_number']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getApplicantById['gender']; ?>"></p>
        <p>
			<label for="specialization">Specialization</label>
			<input type="text" name="specialization" value="<?php echo $getApplicantById['specialization']; ?>">
		</p>
		<p>
			<label for="githubLink">Github Profile</label>
			<input type="url" name="githubLink" value="<?php echo $getApplicantById['github_link']; ?>">
            <input type="submit" name="editStudentBtn">
		</p>
		<p>
			<label for="id">Applicant ID</label>
			<input type="text" name="id" value="<?php echo $getApplicantById['id']; ?>">
		</p>
	</form>
</body>
</html>
