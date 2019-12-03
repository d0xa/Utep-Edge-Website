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
//$status = $_SESSION['status'];
//$form = $_SESSION['form'];
$id = $_SESSION['ID'];
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
	
	$sql="SELECT Fill_suid FROM application WHERE Fill_suid = '$id'";
	
	$result = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($result); //if there is a match this should = 1
	echo $username," ";
	$row;
	$sql2="SELECT Appform_number,Appstatus,Manage_auid,Appdate,Appcomments FROM application WHERE Fill_suid = '$id'";
	$result2 = mysqli_query($conn,$sql2);
	#$row = $result2->fetch_array(MYSQLI_ASSOC);
	echo $num,"<br>";
if($num >0){
	 while($row = mysqli_fetch_array($result2)) {
	echo "Form: ", $row['Appform_number'],"s current status is ",$row['Appstatus'],", the form is being managed by ", $row['Manage_auid'],". Submitted on: ",$row['Appdate'],". Reason: ",$row['Appcomments'];
	echo "<br>";
	#echo $row;
}
}
	?>
<nav>
  <ul>
    <li><a href="home.php">Go Back to home page</a></li>
  </ul>
</nav>
</body>
</html>