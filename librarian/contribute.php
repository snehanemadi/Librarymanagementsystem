<html>
<head>
<title>Donate</title>
<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
	input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: hsla(0, 0%, 90%, 0.7);
  //#45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.body {
    font-family: Arial;
    padding: 10px;
    background-image: url("img1.jpg");
	//background: white;
	background-repeat: repeat;
    font-family: Arial;
    padding: 5px;
}
</style>
</head>
<body class ="body">
<div class="container">
	<br><br>
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left">
			<h2>Enter the details</h2>
			<form action="contributeb.php" method="post">
				<div class="form-group">
				<label>USN</label>
				<input type="number_format" name="susn" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Student Name</label>
				<input type="text" name="studentname" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Title of book</label>
				<input type="text" name="title" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Contribution Year</label>
				<input type="text" name="year" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Type</label>
				<input type="text" name="type" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
		</div>
		<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>
	</div>
	</div>

</body>
</html>