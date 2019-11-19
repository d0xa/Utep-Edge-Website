<?php
session_start();
?>
<html>
<head>
	<title>User Login And Registration </title>
	 <link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
<body>
<div class="container">
	<div class="row">
	<div class="col-md-4">
		<h2> Utep Edge Login</h2>
		<form action="verify.php" method="POST">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
		</div>

	<div class="col-md-4">
		<h2> Utep Edge Register</h2>
		<form action="registration.php" method="POST">
			<div class="form-group">
				<label>ID</label>
				<input type="text" name="id" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username2" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="fname" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Middle Initial</label>
				<input type="text" name="middle" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lname" class="form-control" required>
				</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
		</div>
		</div>				
</body>
</html>