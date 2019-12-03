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

#echo $username;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
	<title>HomePage</title>
</head>
<?php echo " Home Page";  ?>
<body>
	<br>
	
<nav>
  <ul>
    <li><a href="admin_appointment.php">View Appointments</a></li>
    <li><a href="admin_application.php">Check Applications</a></li>
    <li><a href="report.php">Generate Report</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>
</body>
</html>