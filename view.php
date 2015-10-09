<?php
	$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
	mysql_select_db('project', $con) or die(mysql_error($con));

	session_start();
	
	$query = 'select * from '.$_SESSION['uname'].'_table';	
	$result = mysql_query($query, $con) or die(mysql_error($con));
	
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
	echo '</table><a href="dashboard.php">Dashboard</a></center>';