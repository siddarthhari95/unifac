<?php
session_start();
$con = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
mysql_select_db('project', $con) or die(mysql_error($con));

if($_POST['submit']=="signin"){
	
	$uname = $_POST['uname'];
	$_SESSION['uname'] = $uname;
	$pass = $_POST['pass'];
	if($uname=="" || $pass==""){session_destroy();header('location:admin.php');die();}//checks for empty input
	$result = mysql_query('select username from alogin where username="'.$uname.'" and password="'.$pass.'"') or die(mysql_error($con));
	if(!mysql_num_rows($result)){
		session_destroy();
		header('location:admin.php');
	}
	else{
		$_SESSION['uname'] = $uname;
		header('location:Adashboard.php');
	}
}
if($_POST['submit']=="signup"){
	
	$uname = $_POST[''];
	header('location:Aregister.php');
}
echo 'Choice Page';
?>