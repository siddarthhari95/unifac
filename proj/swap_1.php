<?php
	include 'config.php';
	
	if($_POST['submit'] == 'SWAP'){
		$date = $_POST['date'];
		$day = date('l', strtotime($date));
		//echo $day;
		
		if($day == 'Monday') $i =1;
		if($day == 'Tuesday') $i =2;
		if($day == 'Wednesday') $i =3;
		if($day == 'Thursday') $i =4;
		if($day == 'Friday') $i =5;
		if($day == 'Saturday') $i =6;
		echo '<br>';
		$users = array();$count = 0;
		$result = mysql_query('select username from users where username<>"sid"') or die(mysql_error($con));
		while($row = mysql_fetch_array($result)){
			array_push($users, $row['username']);
			//echo $users[$count].'<br>';
			$count++;
		}
		
		echo '<table>';
		echo '<form action="swap_2.php" method="POST">';
		for($p=0; $p<$count; $p++){
			//echo $users[$p]."<br>";
			$query = 'select '.$_POST['hour'].' from '.$users[$p].'_table where day='.$i.' and '.$_POST['hour'].'="free"';
			$result = mysql_query($query, $con) or die(mysql_error($con));
			while($row = mysql_fetch_array($result)){
				echo '<tr><td><input type="checkbox" name="users[]" value="'.$users[$p].'">'.$users[$p].' '.$_POST['hour'].' '.$row[''.$_POST['hour']].'</td><tr>';
			}echo '<br>';
		}
		echo '<tr><td><input type="submit" name="submit" value="Send Requests"></td></tr></table></form>';
	}

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
