<?php 
session_start();
$host ="ilinkserver.cs.utep.edu";
$db = 'f19_team9';
$DBusername = 'raguilarsa';
$DBpassword = '*utep2020!';

$username = $_SESSION['user'];
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];
$Mauid = $username;
$Auid = $_POST['admin_name']; // who was sent the submission
$comment = $_POST['comment'];



$conn = new mysqli($host,$DBusername,$DBpassword,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";

$reg = "INSERT INTO appointment(Aptime,Apdate,Aplocation,Make_suid,Approve_auid,Appcomment) 
		VALUES('$time','$date','$location','$Mauid',NULL,'$comment')";
	mysqli_query($conn,$reg);

	echo $time,"	|",$date,"	|",$location,"	|",$Mauid,"	 |",$Auid, "	|",$comment;
 ?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
	<title>HomePage</title>
</head>
<body>
	<!-- You have sucessfully submitted an Appointment, please wait for the Administrator to approve the appointment -->


<nav>
  <ul>
    <li><a href="home.php">Go back to home page</a></li>
    <li><a href="status.php">Check status</a></li>
  </ul>
</nav>
</body>
</html>