<?php
session_start();
$host ="ilinkserver.cs.utep.edu";
$db = 'f19_team9';
$DBusername = 'raguilarsa';
$DBpassword = '*utep2020!';

$conn = new mysqli($host,$DBusername,$DBpassword,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION["user"];
$ID = $_SESSION["ID"];

$isAdmin="SELECT Uid FROM administrator WHERE Uid = '$username'";

echo "this is the test: ",$ID ,"|";

$result = mysqli_query($conn,$isAdmin);
$num = mysqli_num_rows($result);
if($num == 1){
header('location:adminhome.php');	
}
#echo $username;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
	<title>HomePage</title>
</head>
<body>
	Student Home Page
<nav>
  <ul>
    <li><a href="appointment.php">Create Appointment</a></li>
    <li><a href="application.php">Create Application</a></li>
    <li><a href="status.php">Check Application status</a></li>
  </ul>
</nav>
</body>
</html>