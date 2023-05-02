<?php


// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID_num</th> <th>Name</th> <th>Address</th> <th>Age</th> <th>Program</th> <th>Email</th> <th>Year</th> <th>Update</th> <th>Delete</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_num']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['address']."</td>";
        echo "<td>".$user_data['age']."</td>";
        echo "<td>".$user_data['program']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['year']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
