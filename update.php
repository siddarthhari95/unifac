<?php
	$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
	mysql_select_db('project', $con) or die(mysql_error($con));

	session_start();
	
	$query = 'select * from '.$_SESSION['uname'].'_table';	
	$result = mysql_query($query, $con) or die(mysql_error($con));
	
	$subs = array("OS", "OS-Lab", "DBMS-Lab", "DBMS", "NCP-Lab", "NCP");
	
	echo '<table>';
	$j=1;
	echo '<form action="save.php" method="POST">';
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
			
			echo '<td><select name="course'.$j.($i+1).'">';
			echo '<option selected="selected">'.$hour[$i].'</option>';
			for($k=0;$k<6;$k++)
			{	
				
				echo '<option>'.$subs[$k].'</option>';
			}
			echo '</select></td>';
		}
		echo '</tr>';
		$j++;
	}
	echo '<tr><td><input type="submit" name="submit" value="Commit Changes" /></td></tr>';
	echo '</form>';
	echo '</table>';
	echo '<form action="logout.php" method="POST"><input type="submit" name="submit" value="Signout"></form>';
?>
