<?php
	include '/proj/config.php';
	session_start();
	
	echo '<center><b>'.$_SESSION['uname'].'</b>';
	
	if($_POST['submit'] == 'SWAP'){
		$date = $_POST['date'];
		$day = date('l', strtotime($date));
		echo "<br><br><br>";
		
		if($day == 'Monday') $i =1;
		if($day == 'Tuesday') $i =2;
		if($day == 'Wednesday') $i =3;
		if($day == 'Thursday') $i =4;
		if($day == 'Friday') $i =5;
		if($day == 'Saturday') $i =6;
		echo '<br>';
		$users = array();$count = 0;
		$result = mysql_query('select '.$_POST["hour"].' from '.$_SESSION["uname"].'_table where day='.$i)or die(mysql_error($con));
		
		echo '<form action="swap_2.php" method="post">';
		
		while($row = mysql_fetch_array($result)){
			$faculty_list = array();
			$course = $row[''.$_POST['hour']];
			$result3 = mysql_query('select course_name from cse_courses where course_id="'.$course.'"') or die(mysql_error($con));
			$row = mysql_fetch_array($result3);
			echo '<b>'.$course.' - '.$row['course_name'].'</b><br>';
			if($course != "free"){
				$result1 = mysql_query('select username from '.$course) or die(mysql_error($db));
				while($row1 = mysql_fetch_array($result1)){
					$result2 = mysql_query('select '.$_POST['hour'].' from '.$row1["username"].'_table where day='.$i);
					while($row2 = mysql_fetch_array($result2)){
						if($row2[''.$_POST['hour']] == "free"){
							echo '<input type="checkbox" name="user[]" value="'.$row1["username"].'">'.$row1["username"].'<br>';
						}
					}
					
					// to be modified
				}
		echo '<input type="submit" name="submit" value="Swap Request">';
		echo '</form>';		
			}else{
				echo '<script>alert("Already Free. Need not swap");</script>';
				header("location:dashboard.php");
			}
		}
	}echo '</center>';

/*
//	$timestamp = strtotime('2009-10-22');

//$day = date('l', $timestamp);
//var_dump($day);

$tempDate = '2012-07-10';
echo date('l', strtotime( $tempDate));
*/
?>

</body>
</html>
