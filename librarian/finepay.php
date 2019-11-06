<html>
	<head>
	<script>
	function func2(){
window.alert("Payment made");
}
	</script>
	<style>
input[type=text], select, textarea {
  width: 60%;
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
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
  /*width: 60%;*/
  background-color: hsla(0, 0%, 90%, 0.7);
}
button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
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
.leftcolumn {   
    float: left;
    width: 55%;
	background-color: hsla(0, 0%, 90%, 0.7);
}

/* Right column */
.rightcolumn {
    float: left;
    width: 40%;
	background-color: #ddd;
	background-color: hsla(0, 0%, 90%, 0.7);
    padding-left: 20px;
}
	</style>
	</head>
	<body class = "body">
	<a href="logout.php"><i class="fa fa-arrow-left"></i> logout</a>
	<div class="leftcolumn">
	<div class="container">
	<br><br>
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Enter Details </h2>
			<form action="finepayb.php" method="post">
				<div class="form-group">
				<label> USN</label>
				<input type="text" name="usn" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Amount</label>
				<input type="text" name="amount" class="form-control" required>
				</div>
				
				<button type="submit" onclick="func2()"class="btn btn-primary"> Pay Fine </button>
			</form>
		</div>

		<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>
		</div>
		
	</div>
	</div>
	</div>
		
	</body>
</html>