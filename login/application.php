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
        <label>Type of Application</label>
          <select name="type" id="type" required>
          <option value="Work_Study">Work Study</option>
          <option value="Advising">Advising</option>
          <option value="Research">Research</option>
          </select>
        </div>
        <div>
        <div class="form-group">
        <label>Form Number</label>
        <input type="text" name="form" id="form" class="form-control" >
        </div>
        <?php
        $sql = "SELECT Ufirstname,Ulastname,Uid FROM user WHERE Uid IN (SELECT Uid FROM administrator)"
        or die("Error: ". mysql_error(). " with query ");
        $options = '';
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num > 0 ){
            while($row = mysqli_fetch_array($result)) {
                $options .="<option>" .$row['Uid']. "</option>";
            }
        }
        $menu="<form id='admin_name' name='admin_name' method='post' action=''>
        <p><label>Select administrator you wish to submit an application to </label></p>
          <select name='admin_name' id='admin_name'>
          " . $options . "
          </select>";
          echo $menu;
        ?>
    </div>
         <div class="form-group">
        <label>Confirm ID number</label>
        <input type="text" name="studentID" id="" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit application</button>
		</form>
		</div>
	</div>
</div>
<nav>
  <ul>
    <li><a href="home.php">Go Back to home page</a></li>
    <li><a href="status.php">Check status</a></li>
  </ul>
</nav>
</body>
</html>