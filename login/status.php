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
$status = $_SESSION['status'];
$form = $_SESSION['form'];

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
	Application Status
	<br/s>
	<?php
	echo $username,"'s form '",$form,"'' is ",$status;
	?>
<nav>
  <ul>
    <li><a href="home.php">Go Back to home page</a></li>
  </ul>
</nav>
</body>
</html>