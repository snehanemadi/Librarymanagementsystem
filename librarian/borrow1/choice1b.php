<?php 
session_start();
//to redirect the user to login once he has registered
$con = mysqli_connect('localhost','root','123');
mysqli_select_db($con, 'llibraryy');
$who1= $_POST['who1'];



if($who1 == "student"){

	header('location:choice2student.php');
}else if($who1 == "staff"){
	
	header('location:choice2staff.php');
	
}