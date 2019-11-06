<!--
	<?
	session_start();

$con = mysqli_connect('localhost','root','123');
mysqli_select_db($con, 'llibraryy');
$lsusn=$_COOKIE['usn'];
$sq2="SELECT Sname FROM student where RSUSN='$lsusn'";
$result1=mysqli_query($con,$sq2);
echo" <h3> Welcome{ $result1}!</h3>"

	?>
	-->