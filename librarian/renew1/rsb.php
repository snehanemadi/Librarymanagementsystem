<html>
<head>
<script>
function func2(){
window.alert("transaction done");
}

</script>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 12px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  //box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: hsla(0, 0%, 90%, 0.5);
  color: white;
  padding: 12px 12px;
  margin: 2px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
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
body{
				
				background: linear-gradient(rgba(0, 0, 50, 0.1), rgba(0, 0, 50, 0.1)), url(images/lib4.jpg);
				background-size: cover;
				background-position: center;
				color: black;
				
				}

</style>
</head>
<body>

	<form method="post" action="rsbback.php">
	USN: <input type="text" name="lsusn">
	
	
	ISBN: <input type="text" name="isbn">
	<button type="submit" onclick="func2()" class="btn btn-primary"> Renew</button>
	</form>
	<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>
</body>
</html>
 