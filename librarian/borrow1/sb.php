<html>
<head>
<script>
function func2(){
window.alert("transaction done");
}
</script>
<style>
.button3 {border-radius: 8px;}
h1{
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.body{
				
				background: linear-gradient(rgba(0, 0, 50, 0.1), rgba(0, 0, 50, 0.1)), url(lib4.jpg);
				background-size: cover;
				background-position: center;
				color: white;
				
				}
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
</style>
</head>
<body>

	<form method="post" action="sbback.php">
	USN: <input type="text" name="lsusn">
	
	
	ISBN: <input type="text" name="isbn">
	<button type="submit" onclick="func2()" class="btn btn-primary"> Borrow </button>
	</form>
	<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>
</body>
</html>
 