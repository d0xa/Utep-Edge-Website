<!-- Application form -->
<?php 
session_start();
$host ="ilinkserver.cs.utep.edu";
$db = 'f19_team9';
$DBusername = 'raguilarsa';
$DBpassword = '*utep2020!';

$username = $_SESSION['username'];
$id = $_SESSION['ID'];
$type = $_POST['type'];
$formNumber = $_POST['form'];
$appStatus = "Pending"; //will be default until admin accepts/rejects application
#$studentID = $_SESSION['ID'];
$Auid = $_POST['admin_name'];
$_SESSION['status'] = $appStatus;
$_SESSION['form'] = $formNumber;


$conn = new mysqli($host,$DBusername,$DBpassword,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";

$reg = "INSERT INTO application(Appform_number,Appstatus,Apptype,Manage_auid,Fill_suid) VALUES('$formNumber','$appStatus','$type','$Auid','$id')";
	mysqli_query($conn,$reg);
	#echo $reg;
	echo $formNumber,'   ',$appStatus,'   ',$type,'   ',$Auid,'   ',$id;
 ?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
	<title>HomePage</title>
</head>
<body>
	<!-- You have sucessfully submitted an Application, please wait for the Administrator to approve the application -->

<nav>
  <ul>
    <li><a href="home.php">Go back to home page</a></li>
    <li><a href="status.php">Check status</a></li>
  </ul>
</nav>
</body>
</html>