 <!--https://www.youtube.com/watch?v=NXAHkqiIepc-->
<html>
	<head>
		<title> Select the categories </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<style>
		.body {
    font-family: Arial;
    padding: 10px;
    background-image: url("Images/studentimage.jpg");
	//background: white;
	background-repeat: repeat;
    font-family: Arial;
    padding: 5px;
}
		</style>
	</head>
	<body class="body">
	
	<div class="container">
	<br><br>
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Select the Catagory here </h2>
			<br/>
			<form action="borrowselb.php" method="post">
				<div class="form-group">
				<label>Books</label>
				<input type="checkbox" name="who1" value="books" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Journals</label>
				<input type="checkbox" name="who1" value="journals" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Project Report</label>
				<input type="checkbox" name="who1" value="projectreport" class="form-control" required>
				</div>
				
				<h2> Select Who</h2>
				<div style="padding-right:100px">
				<div>
				<label>Student</label>
				<input type="checkbox" name="who2" value="Student" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Staff</label>
				<input type="checkbox" name="who2" value="Staff" class="form-control" required>
				</div>
				</div>
				<button type="submit" class="btn btn-primary"> Next </button>
			</form>
		</div>

		
		</div>
		
	</div>
	</div>
	
	</body>
</html>