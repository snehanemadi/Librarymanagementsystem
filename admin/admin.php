<html>
	<head>
	<script>
	function func2(){
window.alert("New book has been added!");
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
			<h2> Add New Books </h2>
			<form action="addbooks.php" method="post">
				<div class="form-group">
				<label> ISBN</label>
				<input type="text" name="isbn" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Name of Book</label>
				<input type="text" name="bname" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Subject</label>
				<input type="text" name="subject" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Publisher</label>
				<input type="text" name="publisher" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Edition</label>
				<input type="text" name="edition" class="form-control" required>
				</div>
				
				<button type="submit" onclick="func2()"class="btn btn-primary"> Add </button>
			</form>
		</div>

		
		</div>
		
	</div>
	</div>
	</div>
	
	<div class="rightcolumn">
	<form action="admincontribution.php" method="post">
				<h4>Number of 
				contributions made each year<button type="submit" class="btn btn-primary" style="button">>>></button></h4>
				
			</form>
			
			<form action="contributiondetails.php" method="post">
			<h4>Details of 
				contributions made<button type="submit" class="btn btn-primary" style="button">>>></button></h4>
				
			</form>
			
			<form action="nobooks.php" method="post">
			<h4>Number of books 
				available in each subject<button type="submit" class="btn btn-primary" style="button">>>></button></h4>
				
			</form>
			
				
			<form action="nostudent.php" method="post">
			<h4>Number of students in 
				each sem who haven't borrowed books<button type="submit" class="btn btn-primary" style="button"> >>></button></h4>
				
			</form>
			
			
			<form action="nojournals.php" method="post">
			<h4>Number of journals available by each publisher<button type="submit" class="btn btn-primary" style="button"> >>></button></h4>
				
			</form>
			
			<form action="nofine.php" method="post">
			<h4>Details of students who have not paid fine<button type="submit" class="btn btn-primary" style="button"> >>></button></h4>
				
			</form>
			
			<form action="studentreservations.php" method="post">
			<h4>Reservations made by students<button type="submit" class="btn btn-primary" style="button"> >>></button></h4>
				
			</form>
			
			<form action="studentrequests.php" method="post">
			<h4>Details of requests made</h4>
				<button type="submit" class="btn btn-primary" style="button"> By students >>></button>
			</form>
			
			<form action="staffrequests.php" method="post">
				<button type="submit" class="btn btn-primary" style="button"> By staff >>></button>
			</form>
			
			
			
			
			
	</div>
		
	
	</body>
</html>