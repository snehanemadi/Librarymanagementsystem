<!--https://www.youtube.com/watch?v=NXAHkqiIepc-->
<html>
	<head>
		<title> User Login and Registration </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<style>
		body{
				
				background: linear-gradient(rgba(0, 0, 50, 0.1), rgba(0, 0, 50, 0.1)), url(lib4.jpg);
				background-size: cover;
				background-position: center;
				color: white;
				
				}
				
		</style>
	</head>
	<body>
	<div class="container">
	<br><br>
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Choose here </h2>
			<form action="choice2studentb.php" method="post">
				<div class="form-group">
				<label> BOOK</label>
				<input type="radio" name="who1" value="book" class="form-control" required>
				</div>
				<div class="form-group">
				<label> JOURNAL</label>
				<input type="radio" name="who1" value="journal" class="form-control" required>
				</div>
				<label> PROJECT REPORT</label>
				<input type="radio" name="who1" value="projectrep" class="form-control" required>
				</div>
				
				
				<button type="submit" class="btn btn-primary"> Next </button>
			</form>
		</div>

		
		</div>
		
	</div>
	</div>
	<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>
	</body>
</html>