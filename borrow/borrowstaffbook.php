<?php
	
	session_start();

	$con = mysqli_connect('localhost','root','sneha123');
	mysqli_select_db($con, 'libraryy');
	
	$lsid = $_POST['lsid'];
	$isbn = $_POST['isbn'];
	
	/*$sq = "SELECT SUSN FROM transac where SUSN=$lsusn";
	$result=mysqli_query($con,$sq2);
	$row = mysqli_fetch_assoc($result);*/
	
		
		$reg = "UPDATE books SET status='available' WHERE ISBN='$isbn'";
		mysqli_query($con, $reg);
		$reg1 = "UPDATE staff SET no_of_books = no_of_books+1 WHERE SID='$lsid'";
		mysqli_query($con, $reg1);
		
		$start = .date();
		$end = date_add($start,date_interval_create_from_date_string("15 days"));
		$tid = .rand ();
		$reg3 = " insert into transac(TID, start_date,end_date,T_JNO,T_PNO,T_ISBN) values ('$tid', '$start', '$end', ' ', ' ', '$isbn')";
		$res = mysqli_query($con, $reg3);
		
		
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
	
?>