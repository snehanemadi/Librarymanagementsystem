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

$sq2="SELECT ISBN, Bname, Subject, BPublisher, Edition, CUSN, CName, Contribution_Year 
FROM `books`JOIN `contributions`  ON Bname=Title_of_the_Book
WHERE EXISTS (SELECT *
                           FROM `contributions` 
                          WHERE Bname=Title_of_the_Book);


";
$result1=mysqli_query($con,$sq2);
//echo mysqli_num_rows($result1);

echo "<center><table>
		<tr>
		<th>ISBN</th>
		<th>Book Name<br/><br/></th>
		<th>Subject<br/><br/></th>
		<th>Publisher<br/><br/></th>
		<th>Edition<br/><br/></th>
		<th>CSUSN<br/><br/></th>
		<th>Student Name<br/><br/></th>
		<th>Contribution Year<br/><br/></th>
		</tr></center>";
		
while($row= mysqli_fetch_assoc($result1))
	{
		echo "<tr>
			<td><br/>".$row["ISBN"]."</td>
			<td>".$row["Bname"]."</td>
			<td><br/>".$row["Subject"]."</td>
			<td>".$row["BPublisher"]."</td>
			<td><br/>".$row["Edition"]."</td>
			<td>".$row["CUSN"]."</td>
			<td><br/>".$row["CName"]."</td>
			<td><br/>".$row["Contribution_Year"]."</td>
			
			</tr>";
	}
	
echo "<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>";

?>
</body>
</html>
	
