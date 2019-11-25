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
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
	<title>Generate Report</title>
</head>
<body>
	Generate report!
<nav>
  <ul>
    <!-- <li><a href="appointment.php">Create Appointment</a></li>
    <li><a href="application.php">Create Application</a></li>-->
    <li><a href="adminhome.php">Go back to home page</a></li>
  </ul>
</nav>
</body>
</html>