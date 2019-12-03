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
#$ID = $_SESSION["ID"];
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
	Create Application

  <div class="container">
  <div class="row">
  <div class="col-md-4">
    <form action="submit2.php" method="POST">
      <div class="form-group">
        </div>
        <div>
        <div class="form-group">
        <label>Form Number</label>
        <input type="text" name="number" id="form" class="form-control" >
        </div><?php
        $sql = "SELECT ftype FROM forms"
        or die("Error: ". mysql_error(). " with query ");
        $options = '';
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);

        if($num > 0 ){
            while($row = mysqli_fetch_array($result)) {
                $options .="<option>" . $row['ftype']. "</option>";
            } 
        }
        $menu="<form id='form' name='form' method='post' action=''>
        <p><label>Select Form</label></p>
          <select name='form' id='form'>
          " . $options . "
          </select>";
          echo $menu;
        ?>
        <!-- DIFFERENT TABLES -->
        <?php
        $sql2 = "SELECT Ufirstname,Ulastname,Uid FROM user WHERE Uid IN (SELECT Uid FROM administrator)"
        or die("Error: ". mysql_error(). " with query ");
        $options2 = '';
        $result2 = mysqli_query($conn,$sql2);
        $num2 = mysqli_num_rows($result2);

        if($num2 > 0 ){
            while($row2 = mysqli_fetch_array($result2)) {
                $options2 .="<option>" . $row2['Ufirstname']." " .$row2['Ulastname']. "</option>";
            } 
        }
        $menu2="<form id='admin_name' name='admin_name' method='post' action=''>
        <p><label>Select administrator you wish to see</label></p>
          <select name='admin_name' id='admin_name'>
          " . $options2 . "
          </select>";
          echo $menu2;
        ?>
    </div>
     <!-- <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" class="form-control" required>
      </div> -->
      
      <!-- <div class="form-group">
        <label>Comment</label>
        <input type="text" name="comment" class="form-control" >
        </div> -->
        <button type="submit" class="btn btn-primary">Submit application</button>
		</form>
		</div>
	</div>
</div>
<nav>
  <ul>
    <li><a href="home.php">Go back to home page</a></li>
    <li><a href="status.php">Check application's atatus</a></li>
  </ul>
</nav>
</body>
</html>