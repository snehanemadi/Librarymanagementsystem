<html>
<head>
<style>
body{
	background-image: url("img1.jpg");
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


$susn= $_POST['susn'];
$studentname=$_POST['studentname'];
$title=$_POST['title'];
$year=$_POST['year'];
$type=$_POST['type'];


$reg = " insert into contributions(CUSN,CName,Title_of_the_Book,Contribution_Year,Type) values ('$susn', '$studentname', '$title', '$year', '$type')";
	mysqli_query($con, $reg);

	
$sq2="SELECT * FROM contributions where CUSN='$susn'";
$result1=mysqli_query($con,$sq2);

echo "<center><table>
		<tr>
		<th>USN<br/><br/></th>
		<th>Name<br/><br/></th>
		<th>Title of the book<br/><br/></th>
		<th>ContributionYear<br/><br/></th>
		<th>Type<br/><br/></th>
		</tr></center>";
while($row= mysqli_fetch_assoc($result1))
	{
		
		echo "<tr>
			<td><br/>".$row["CUSN"]."</td>
			<td>".$row["CName"]."</td>
			<td>".$row["Title_of_the_Book"]."</td>
			<td>".$row["Contribution_Year"]."</td>
			<td>".$row["Type"]."</td>
			</tr>";
	}
	echo "<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>";
	?>
</body>
</html>
