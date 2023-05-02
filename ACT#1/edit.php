<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_num = $_POST['id_num'];

	$name = $_POST['name'];
	$address = $_POST['address'];
	$age = $_POST['age'];
	$program = $_POST['program'];
	$email = $_POST['email'];
	$year = $_POST['year'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET id_num='$id_num',name='$name',address='$address',age='$age',program='$program',email='$email',year='$year' WHERE id_num=$id_num");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_num = $_GET['id_num'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$id_num = $user_data['id_num'];
	$name = $user_data['name'];
	$address = $user_data['address'];
	$age = $user_data['age'];
	$program = $user_data['program'];
	$email = $user_data['email'];
	$year = $user_data['year'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>ID_num</td>
				<td><input type="text" name="id_num" value=<?php echo $id_num;?>></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address" value=<?php echo $address;?>></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value=<?php echo $age;?>></td>
			</tr>
			<tr> 
				<td>Program</td>
				<td><input type="text" name="program" value=<?php echo $program;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="text" name="year" value=<?php echo $year;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_num" value=<?php echo $_GET['id_num'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

