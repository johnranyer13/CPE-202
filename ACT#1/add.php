<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID_num</td>
				<td><input type="text" name="id_num"></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Program</td>
				<td><input type="text" name="program"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="text" name="Year"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_num = $_POST['id_num'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$program = $_POST['program'];
		$email = $_POST['email'];
		$year = $_POST['year'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(id_num,name,address,age,program,email,year) 
		VALUES('$id_num','$name','$address','$age','$program','$email','$year')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
