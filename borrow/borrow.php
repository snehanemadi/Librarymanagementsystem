<?php
	
	session_start();

	$con = mysqli_connect('localhost','root','sneha123');
	mysqli_select_db($con, 'libraryy');
	
	$lsusn = $_POST['lsusn'];
	$isbn = $_POST['isbn'];
	
	$sq = "SELECT SUSN FROM transac where SUSN=$lsusn";
	$result=mysqli_query($con,$sq2);
	$row = mysqli_fetch_assoc($result);
	
	if($row ==1 ){
		
		$reg = "UPDATE books SET status='available' WHERE SUSN='$lsusn'";
		mysqli_query($con, $reg);
		$reg1 = "UPDATE student SET no_of_books = no_of_books-1 WHERE SUSN='$lsusn'";
		mysqli_query($con, $reg1);
	}
	else{
		
		header(.php);
		
	}
?>