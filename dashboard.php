<?php
	session_start();
	//echo $_SESSION['date'];
	$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));
?>
<script type="text/javascript">
	function swap_process(a){
		console.log(a+"");
		if(received_reqs.a.value == "Accept"){console.log(a+"");alert("You have accepted the request");}
		else if(form.received_reqs.a.value == "Reject"){alert("You have rejected the request");}
	}
</script>
<?php	

		 
		$query = 'select * from '.$_SESSION['uname'].'_table';	
		$result = mysql_query($query, $db) or die(mysql_error($db));
		echo '<center><table border="1px">';
		echo '<tr><th>Day</th><th>First Hour</th><th>Second Hour</th><th>Third Hour</th><th>Fourth Hour</th><th>Fifth Hour</th><th>Sixth Hour</th>
				<th>Seventh Hour</th>';
		while($row = mysql_fetch_assoc($result)){
			$day = $row['day'];
			$hour = array($row['first_hour'],$row['second_hour'],$row['third_hour'],$row['fourth_hour'],$row['fifth_hour'],$row['sixth_hour'],$row['seventh_hour']);
		
			echo '<tr>';
			if($day == 1) echo '<td>Monday</td>';	
			if($day == 2) echo '<td>Tuesday</td>';
			if($day == 3) echo '<td>Wednesday</td>';
			if($day == 4) echo '<td>Thursday</td>';
			if($day == 5) echo '<td>Friday</td>';
			if($day == 6) echo '<td>Saturday</td>';
			for($i=0;$i<7;$i++){
				echo '<td>'.$hour[$i].'</td>';
			}
			echo '</tr>';	
		}
	echo '</table>';
	echo '<a href="update.php">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<br><br><form action="swap_0.php" method="POST">';
	echo '<input type="submit" name="submit" value="Swap">';
	echo '</form>';
	
	$result = mysql_query('select username,date,hour from '.$_SESSION['uname'].'_swap_table where check1=1') or die(mysql_error($db));
	if(mysql_num_rows($result)){
		
	echo '<h3>Received Requests</h3>';
	echo '<form name="received_reqs">';
	while($row = mysql_fetch_array($result)){
		$date = $row['date'];
		$day = date('l', strtotime($date));
		if($row['hour'] == 'first_hour')$i=1;
		if($row['hour'] == 'second_hour')$i=2;
		if($row['hour'] == 'third_hour')$i=3;
		if($row['hour'] == 'fourth_hour')$i=4;
		if($row['hour'] == 'fifth_hour')$i=5;
		if($row['hour'] == 'sixth_hour')$i=6;
		if($row['hour'] == 'seventh_hour')$i=7;
		echo '<i><input style="border:0px;text-align:left;width:220px;text-decoration:none;background:none;" type="text" 
		name="user" value="'.$row['username'].' - '.$row['date'].' - '.$day.' - hour-'.$i.'" disabled></i> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="'.$row['username'].'" value="Accept" 
		onclick="swap_process(\''.$row['username'].'\')">';
		
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="'.$row['username'].'" value="Reject" onclick="swap_process(\''.$row['username'].'\')"><br/><br/>';
	}echo '</form>';
	}
	
	$result = mysql_query('select username from '.$_SESSION['uname'].'_swap_table where check1=0') or die(mysql_error($db));
	if(mysql_num_rows($result)){
	echo '<h3>Sent Requests</h3>';
	
	while($row = mysql_fetch_array($result)){
			echo '<i>'.$row['username'].'</i><br>';	
	}
	}
	echo '<br><form action="logout.php" method="POST">
		<input type="submit" name="submit" value="Signout"></center>';
	?>