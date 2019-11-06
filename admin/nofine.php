<html>
<head>
<style>
body{
	background-image: url("studentimage.jpg");
}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
table {
    border-collapse: collapse;
    width: 60%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #00ff00;
    color: white;
}

.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button3 {border-radius: 8px;}
h1{
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>
<body>

<?php
session_start();

$con = mysqli_connect('localhost','root','123');
mysqli_select_db($con, 'llibraryy');

//$lsusn=$_COOKIE['usn'];

$sq2="SELECT  USN, Sname, Semester, No_of_Books, cause, no_of_days, total_payment, status
 
FROM student JOIN  fine ON USN=SUSN
 
WHERE EXISTS (SELECT * 

  FROM fine

  WHERE status='not paid' AND  USN=SUSN);
";
$result1=mysqli_query($con,$sq2);
//echo mysqli_num_rows($result1);

echo "<center><table>
		<tr>
		<th>USN</th>
		<th>Name<br/><br/></th>
		<th>Semester<br/><br/></th>
		<th>No of Books<br/><br/></th>
		<th>Cause<br/><br/></th>
		<th>No of days<br/><br/></th>
		<th>Total Payment<br/><br/></th>
		<th>Status<br/><br/></th>
		</tr></center>";
		
while($row= mysqli_fetch_assoc($result1))
	{
		echo "<tr>
			<td><br/>".$row["USN"]."</td>
			<td>".$row["Sname"]."</td>
			<td><br/>".$row["Semester"]."</td>
			<td>".$row["No_of_Books"]."</td>
			<td><br/>".$row["cause"]."</td>
			<td>".$row["no_of_days"]."</td>
			<td><br/>".$row["total_payment"]."</td>
			<td>".$row["status"]."</td>
			</tr>";
	}
	
echo "<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>";

?>
</body>
</html>
	
