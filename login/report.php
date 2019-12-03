<!DOCTYPE html>
<html>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<head>
    <link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
	<title>Reports</title>
</head>
<body>
    <?php
        session_start();
        $host ="ilinkserver.cs.utep.edu";
        $db = 'f19_team9';
        $DBusername = 'aortiz34';
        $DBpassword = '1Hatemyspace';

        $conn = new mysqli($host,$DBusername,$DBpassword,$db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>

    <h1>Generate Report</h1>
    <label>Select Report Type</label>
    <ul>
        <li><a href= "ApplicationCountByStatus.php"> Application Status Count</a></li>
        <li><a href= "StudentCountReport.php"> Number of Students in System</a></li>
        <li><a href ="ApplicationsbyMonthReport.php"> Applications by Month</a></li>
        <li><a href ="ApplicationStatusReport.php"> Applications by Status</a></li>
        <li><a href= "ApplicationDepartmentReport.php">Applications by Department</a></li>
    </ul>
    <br></br>

    <ul>
    <li><a href="adminhome.php">Go Back to home page</a></li>
    </ul>
</body>
</html>
