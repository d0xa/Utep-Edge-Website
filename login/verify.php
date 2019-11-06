<?php 
session_start();

$host ="ilinkserver.cs.utep.edu";
$db = 'f19_team9';
$DBusername = 'raguilarsa';
$DBpassword = '*utep2020!';

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli($host,$DBusername,$DBpassword,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";

$sql="SELECT Uusername,Upassword FROM user WHERE Uusername = '$username' && Upassword = '$password'";

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result); //if there is a match this should = 1

if($num ==1){
	header('location:home.php');
}
else{
	header('location:login.php');
}
 ?>