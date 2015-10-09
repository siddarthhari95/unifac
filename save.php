<?php

	$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));

	session_start();
	
	if($_POST['submit'] == 'Commit Changes'){
		
	for($i=1;$i<7;$i++)
	{
		$c1 = $_POST['course'.$i.'1'];
		$c2 = $_POST['course'.$i.'2'];
		$c3 = $_POST['course'.$i.'3'];
		$c4 = $_POST['course'.$i.'4'];
		$c5 = $_POST['course'.$i.'5'];
		$c6 = $_POST['course'.$i.'6'];
		$c7 = $_POST['course'.$i.'7'];
		$query = 'update '.$_SESSION['uname'].'_table set first_hour="'.$c1.'", second_hour="'.$c2.'", third_hour="'.$c3.'", fourth_hour="'.$c4.'", fifth_hour="'.$c5.'",
							sixth_hour="'.$c6.'", seventh_hour="'.$c7.'" where '.$_SESSION['uname'].'_table.day='.$i;
		mysql_query($query, $db) or die(mysql_error($db));
	}				
	header('location:dashboard.php');
	}
?>