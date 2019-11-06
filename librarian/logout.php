<?php 
 session_start();
 session_destroy();
 #checking for connection
$servername="localhost";
$username="root";
$password="123";
$dbname="llibraryy";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
header('location:../homepagelib.html');

 ?>
 