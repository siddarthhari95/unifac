<?php
session_start();
$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
mysql_select_db('project', $con) or die(mysql_error($con));
echo $_SESSION['uname'];
if($_POST['submit'] == "Save"){
	$query = 'create table if not exists '.$_SESSION['uname'].'_table
				(
				day				int	 not null auto_increment,
				first_hour		varchar(255),
				second_hour 	varchar(255),
				third_hour		varchar(255),
				fourth_hour		varchar(255),
				fifth_hour		varchar(255),
				sixth_hour		varchar(255),
				seventh_hour	varchar(255),
					primary key(day)
				)';
	mysql_query($query, $con) or die(mysql_error($con));
	
	$query = 'create table if not exists '.$_SESSION['uname'].'_swap_table
				(
				id 				int   not null auto_increment,
				username 			varchar(255),
				check1			int,
					primary key(id)
				)';
	mysql_query($query, $con) or die(mysql_error($con));
	
	
	for($i=1;$i<7;$i++)
	{
		$c1 = substr($_POST['course'.$i.'1'], 0, 6);
		$c2 = substr($_POST['course'.$i.'2'], 0, 6);
		$c3 = substr($_POST['course'.$i.'3'], 0, 6);
		$c4 = substr($_POST['course'.$i.'4'], 0, 6);
		$c5 = substr($_POST['course'.$i.'5'], 0, 6);
		$c6 = substr($_POST['course'.$i.'6'], 0, 6);
		$c7 = substr($_POST['course'.$i.'7'], 0, 6);
		$query = 'insert into '.$_SESSION['uname'].'_table (first_hour, second_hour, third_hour, fourth_hour, fifth_hour, sixth_hour, seventh_hour) values
					("'.$c1.'", "'.$c2.'", "'.$c3.'", "'.$c4.'", "'.$c5.'", "'.$c6.'", "'.$c7.'")';
		mysql_query($query, $con) or die(mysql_error($con));
	}				
	echo 'Successfully saved!!';
	header("location:dashboard.php");
}

?>
