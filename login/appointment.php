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
<body>
	Create An Appointment

  <div class="container">
  <div class="row">
  <div class="col-md-4">
    <form action="submit.php" method="POST">
      <div class="form-group">
        <label>Type of Appointment</label>
          <select name="type" required>
          <option value="Work_Study">Work Study</option>
          <option value="Advising">Advising</option>
          <option value="Research">Research</option>
          </select>
        </div>
      <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Time</label>
        <input type="Time" name="time" class="form-control" required>
      </div>
      <div class = "form-group">
      <label>Location</label>
          <select name="location" required>
          <option value="E302">E302</option>
          <option value="E303">E303</option>
          <option value="E304">E304</option>
          </select>
        </div>

        <?php
        $sql = "SELECT Ufirstname,Ulastname FROM user WHERE Uid IN (SELECT Uid FROM administrator)"
        or die("Error: ". mysql_error(). " with query ");
        $options = '';
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);

        if($num > 0 ){
            while($row = mysqli_fetch_array($result)) {
                $options .="<option>" . $row['Ufirstname']." " .$row['Ulastname']. "</option>";
            }
        }
        $menu="<form id='admin_name' name='admin_name' method='post' action=''>
        <p><label>Select administrator you wish to see</label></p>
          <select name='admin_name' id='admin_name'>
          " . $options . "
          </select>";
          echo $menu;
        ?>
        <div class="form-group">
        <label>Comment</label>
        <input type="text" name="comment" class="form-control" >
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>

<nav>
  <ul>
    <li><a href="home.php">Go Back to home page</a></li>
  </ul>
</nav>
</body>
</html>