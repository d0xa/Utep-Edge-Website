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
$ID = $_SESSION["ID"];
echo $username;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
	<title>HomePage</title>
</head>
<body>
	View Applications
	<br>
        <?php
        $sql = "SELECT * FROM application WHERE Manage_auid ='$ID';"
        or die("Error: ". mysql_error(). " with query ");
        #$options = '';
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);

        if($num > 0 ){
            while($row = mysqli_fetch_array($result)) {
                echo $row['Appform_number']," ",$row['Apptype']," application"," current status: ",$row['Appstatus'], " submitted by ",$row['Fill_suid'];
                echo"<br>";
                echo '<form action="edit.php" method="post">
                  <input type="hidden" name="form_number" value="' . $row['Appform_number'] . '" />
                  <input type="submit" value="Edit Application status" />
                  </form>';

            }
        }	
        ?>
    </div>
        <!-- <button type="submit" class="btn btn-primary">Submit application</button> -->
		</form>
		</div>
	</div>
</div>
<nav>
  <ul>
    <li><a href="adminhome.php">Go Back to home page</a></li>
    <!-- <li><a href="status.php">Check status</a></li> -->
  </ul>
</nav>
</body>
</html>