<?php 
session_start();

$con = mysqli_connect('localhost','root','sneha123');
mysqli_select_db($con, 'libraryy');

$who1= $_POST['who1'];
$who2= $_POST['who2'];


if($who1 == "books" && $who2 == "student"){
	
	header('location:booksborrowstb.php');
	
}
else if($who1 == "journals" && $who2 == "student"){
	
	header('location:journalborrowstub.php');
	
}
else if($who1 == "project report" && $who2 == "student"){
	
	header('location:projectreportborrowstub.php');
	
	
}
else if($who1 == "books" && $who2 == "staff"){
	header('location:booksborrowstab.php');
	
}
else if($who1 == "journals" && $who2 == "staff"){
	
	header('location:journalborrowstab.php');
	
}
else if($who1 == "project report" && $who2 == "staff"){
	
	header('location:projectreportborrowstab.php');
	
}

?>
