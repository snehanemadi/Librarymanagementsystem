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

$sq2="SELECT USN, Sname, Semester, Name_of_Book, RAuthor, RPublisher, REdition, Cost 
FROM student JOIN requests ON USN=RSUSN
WHERE EXISTS (SELECT * 
                           FROM requests 
                          WHERE USN=RSUSN);

";
$result1=mysqli_query($con,$sq2);
//echo mysqli_num_rows($result1);

echo "<center><table>
		<tr>
		<th>USN</th>
		<th>Name<br/><br/></th>
		<th>Semester<br/><br/></th>
		<th>Name of Book<br/><br/></th>
		<th>Author<br/><br/></th>
		<th>Publisher<br/><br/></th>
		<th>Edition<br/><br/></th>
		<th>Cost<br/><br/></th>
		</tr></center>";
		
while($row= mysqli_fetch_assoc($result1))
	{
		echo "<tr>
			<td><br/>".$row["USN"]."</td>
			<td>".$row["Sname"]."</td>
			<td><br/>".$row["Semester"]."</td>
			<td>".$row["Name_of_Book"]."</td>
			<td><br/>".$row["RAuthor"]."</td>
			<td>".$row["RPublisher"]."</td>
			<td><br/>".$row["REdition"]."</td>
			<td>".$row["Cost"]."</td>
			</tr>";
	}
	
echo "<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>";

?>
</body>
</html>
	
