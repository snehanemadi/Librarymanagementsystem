<?php
	
	session_start();

	$con = mysqli_connect('localhost','root','123');
	mysqli_select_db($con, 'llibraryy');
	
	$lsusn = $_POST['lsusn'];
	$pno = $_POST['pno'];
	
		$sq = "SELECT * FROM transac";
	$result=mysqli_query($con,$sq);
	$num1 = mysqli_num_rows($result);
	$num1=$num1+1;
	
		
		$reg = "UPDATE project_report SET PStatus='Not available' WHERE Pno='$pno'";
		mysqli_query($con, $reg);
		$reg1 = "UPDATE student SET No_of_Books = No_of_Books+1 WHERE USN='$lsusn'";
		mysqli_query($con, $reg1);
		
		$start = date("Y/m/d");
		
		$end1 = date_create_from_format('Y/m/d', $start);
        $end1->getTimestamp();
		
		$end2 = date_add($end1,date_interval_create_from_date_string("15 days"));
		
		$end3 = date_format($end2,"Y/m/d");
		
		$tid = $num1;
		$reg3 = " insert into transac(TID, start_date,end_date,T_JNO,T_PNO,T_ISBN) values ('$tid', '$start', '$end3', ' ', '$pno', ' ')";
		$res = mysqli_query($con, $reg3);
		
		$reg4 = "insert into student_does(TIDD, DSUSN) values ('$tid','$lsusn')";
		$res1 = mysqli_query($con, $reg4);
		
		header('location:sp.php');
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
while($row= mysqli_fetch_assoc($res))
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