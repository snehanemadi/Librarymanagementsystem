<?php
	
	session_start();

	$con = mysqli_connect('localhost','root','123');
	mysqli_select_db($con, 'llibraryy');
	
	$lsusn = $_POST['lsusn'];
	$isbn = $_POST['isbn'];
	/*
	$sq = "SELECT SUSN FROM transac where SUSN=$lsusn";
	$result=mysqli_query($con,$sq);
	$row = mysqli_fetch_assoc($result);
	*/
	
		$start = date("Y/m/d");
		
		$end1 = date_create_from_format('Y/m/d', $start);
        $end1->getTimestamp();
		
		$end2 = date_add($end1,date_interval_create_from_date_string("15 days"));
		
		$end3 = date_format($end2,"Y/m/d");
		
		
		$reg1 = "UPDATE transac SET start_date = '$start' and end_date = '$end3' WHERE T_ISBN='$isbn'";
		mysqli_query($con, $reg1);
			
		header('location:rsb.php');
	
	/*	
		
echo "<center><table>
		<tr>
		<th>TID<br/><br/></th>
		<th>Start_date<br/><br/></th>
		<th>End_date<br/><br/></th>
		<th>T_JNO<br/><br/></th>
		<th>T_PNO<br/><br/></th>
		<th>T_ISBN<br/><br/></th>
		</tr></center>";
while($row= mysqli_fetch_assoc($result))
	{
		
		echo "<tr>
			<td><br/>".$row["TID"]."</td>
			<td>".$row["start_date"]."</td>
			<td>".$row["end_date"]."</td>
			<td>".$row["T_JNO"]."</td>
			<td>".$row["T_PNO"]."</td>
			<td>".$row["T_ISBN"]."</td>
			</tr>";
	}
	*/
?>
	