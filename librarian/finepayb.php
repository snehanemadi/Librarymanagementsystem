<html>
<head>
<style>
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
</head>
<body>

<?php 
session_start();

$con = mysqli_connect('localhost','root','123');
mysqli_select_db($con, 'llibraryy');


$usn= $_POST['usn'];
$amount=$_POST['amount'];




$reg = " update fine set status='paid' where SUSN='$usn' AND total_payment='$amount'";
	mysqli_query($con, $reg);

header('location:finepay.php');

?>
</body>
</html>