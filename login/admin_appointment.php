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
$id = $_SESSION["ID"];

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
	Check Appointments
		<br>
        <?php
        $sql = "SELECT * FROM appointment WHERE Approve_auid ='$id';" 
        or die("Error: ". mysql_error(). " with query ");
        $options = '';
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);

        if($num > 0 ){
            while($row = mysqli_fetch_array($result)) {
                echo "Appointment Date: ",$row['Apdate']," Time: ",$row['Aptime'], " created by ",$row['Make_suid'];
                echo "<br>";
            }
        }
        // $menu="<form id='admin_name' name='admin_name' method='post' action=''>
        // <p><label>Select administrator you wish to see</label></p>
        //   <select name='admin_name' id='admin_name'>
        //   " . $options . "
        //   </select>";
        //   echo $menu;
        ?>
<!--         <div class="form-group">
        <label>Comment</label>
        <input type="text" name="comment" class="form-control" >
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div> -->

<nav>
  <ul>
    <!-- <li><a href="home.php">Go Back to home page</a></li> -->
    <li><a href="adminhome.php">Back to home page</a></li>
  </ul>
</nav>
</body>
</html>