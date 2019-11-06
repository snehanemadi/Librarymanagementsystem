<?php 
session_start();

$con = mysqli_connect('localhost','root','123');
mysqli_select_db($con, 'llibraryy');
$name= $_POST['user'];
$pass=$_POST['password'];
$lusn=$_POST['lusn'];
$lsid=$_POST['lsid'];
$cookie_name = "usn";
$cookie_value = $lusn;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$cookie_name1 = "sid";
$cookie_value1= $lsid;
setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

$s1 = "select * from student where SUsername = '$name' && SPassword = '$pass'";
$result1 = mysqli_query($con, $s1);
$num1 = mysqli_num_rows($result1);

$s2 = "select * from staff where StUsername = '$name' && StPassword = '$pass'";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);

$s3 = "select * from staff where StUsername = '$name' && Stpassword = '$pass' && Designation='Admin' ";
$result3 = mysqli_query($con, $s3);
$num3 = mysqli_num_rows($result3);

$s4 = "select * from staff where StUsername = '$name' && Stpassword = '$pass' && Designation='Librarian' ";
$result4 = mysqli_query($con, $s4);
$num4 = mysqli_num_rows($result4);

if($num1 == 1){
	$_SESSION['username'] = $name;
	header('location:../student/student1.php');
}else if($num4 == 1){
	$_SESSION['username'] = $name;
	header('location:../librarian/librarian.php');
}else if($num3 == 1){
	$_SESSION['username'] = $name;
	header('location:../admin/admin.php');
}else if($num2 == 1){
	$_SESSION['username'] = $name;
	header('location:../staff/staff.php');
}else{
	header('location:registrationfirst.php');
	
}
	?>