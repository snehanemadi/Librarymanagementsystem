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


$isbn= $_POST['isbn'];
$bname=$_POST['bname'];
$subject=$_POST['subject'];
$publisher=$_POST['publisher'];
$edition=$_POST['edition'];



$reg = " insert into books(ISBN, BName, Subject, BPublisher, Edition) values ('$isbn', '$bname', '$subject', '$publisher', '$edition')";
	mysqli_query($con, $reg);

echo "<br/><input class='button button3'onclick='history.go(-1)' type='button' value='Go Back'/>";

?>
</body>
</html>