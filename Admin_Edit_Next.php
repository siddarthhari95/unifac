<?php
include 'proj/config.php';
session_start();
if($_POST['submit']=="EDIT"){
	$faculty=$_POST['optionsubmit'];
	$_SESSION['faculty']=$faculty;
	//this page for admin to edit any faculty timetable
	//unset($_SESSION['faculty']);
	$query = 'select * from '.$faculty.'_table';	
	$result = mysql_query($query, $con) or die(mysql_error($con));
	
	echo '<center>MAKING PERMANENT CHANGES FOR FACULTY.. '.$faculty.'';
	//$subs = array("OS", "OS-Lab", "DBMS-Lab", "DBMS", "NCP-Lab", "NCP");
	$result1 = mysql_query('select course_id, course_name from CSE_courses') or die(mysql_error($db));
	$subs = array();
	$desc = array();
	$count = 0;
	while($row = mysql_fetch_array($result1)){
			//echo '<option>'.$row['course_name'].' - '.$row['course_id'].'</option>';
			array_push($subs, $row['course_id']);
			array_push($desc, $row['course_name']);
			$count++;
		}
	echo '<table border="1px">';
	$j=1;
	echo '<form action="Asave.php" method="POST">';
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
			for($k=0;$k<$count;$k++)
			{	
				
				echo '<option>'.$subs[$k].'</option>';
			}
			echo '</select></td>';
		}
		echo '</tr>';
		$j++;
	}
	echo '</table><br><br>';
	for($i=0;$i<$count;$i++){
		echo $subs[$i] . ' - ' . $desc[$i] . '<br/>';
	}
	echo '<br><br><tr><td><input type="submit" name="submit" value="Commit Changes" /></td></tr>';
	echo '</form>';
	echo '<form action="Alogout.php" method="POST"><input type="submit" name="submit" value="Signout"></form></center>';

}
if($_POST['submit']=="GOBACK"){header('location:Adashboard.php');
}
echo '<center><form action="Admin_Edit.php"><input type="submit" name="submit" value="GOBACK"></form></center>';	
?>