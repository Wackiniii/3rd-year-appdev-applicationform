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
	<h3>Welcome to the Software Developer Job Application!</h3>
    <p>Input the following details below:</p>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="email">Email Address</label> <input type="email" name="email"></p>
		<p><label for="contactNum">Contact Number</label> <input type="text" name="contactNum"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="specialization">Specialization</label> <input type="text" name="specialization"></p>
		<p><label for="githubLink">Github Link</label> <input type="url" name="githubLink"> </p>
		<p><input type="submit" name="insertNewApplicantBtn"></p>

	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Applicant ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email Address</th>
	    <th>Contact Number</th>
	    <th>Gender</th>
	    <th>Specialization</th>
	    <th>Github Profile</th>
        <th>Action</th>
	  </tr>

	  <?php $seeAllApplicantRecords = seeAllApplicantRecords($pdo); ?>
	  <?php foreach ($seeAllApplicantRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['contact_number']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['specialization']; ?></td>
	  	<td><a href="<?php echo htmlspecialchars($row['github_link']); ?>" target="_blank"><?php echo $row['github_link']; ?></a></td>
	  	<td>
	  		<a href="editApplicant.php?id=<?php echo $row['id'];?>">Edit</a>
	  		<a href="deleteApplicant.php?id=<?php echo $row['id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
    <br>
    <a href="testGetVariable.php?applicantName=JoaquinPadilla&specialization=BackendDeveloper">Test Get Superglobal</a>



</body>
</html>
