<!--https://www.youtube.com/watch?v=NXAHkqiIepc-->
<html>
	<head>
		<title> User Login and Registration </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<style>
		
		body{
				background: linear-gradient(rgba(0, 0, 50, 0.1), rgba(0, 0, 50, 0.1)), url(studentimage.jpg);
				background-size: cover;
				background-position: center;
				color: black;
				}
				
		</style>
	</head>
	<body>
	<div class="container">
	<br><br>
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Login Here </h2>
			<form action="loginfirstb.php" method="post">
				<div class="form-group">
				<label> Student</label>
				<input type="radio" name="who1" value="student" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Staff</label>
				<input type="radio" name="who1" value="staff" class="form-control" required>
				</div>
				
				
				<button type="submit" class="btn btn-primary"> Next </button>
			</form>
		</div>

		
		</div>
		
	</div>
	</div>
	
	</body>
</html>