<?php
session_start();
$con = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
mysql_select_db('project', $con) or die(mysql_error($con));

if($_POST['submit'] == "Log In"){
	
	$uname = $_POST['uname'];
	//$_SESSION['uname'] = $uname;
	$pass = $_POST['pass'];
	
	if($uname=="" || $pass==""){session_destroy();header('location:index.php');die();}
	$result = mysql_query('select username from login where username="'.$uname.'" and password="'.$pass.'"') or die(mysql_error($con));
	if(!mysql_num_rows($result)){
		session_destroy();
		header('location:index.php');
	}
	else{
		$_SESSION['uname'] = $uname;
		header('location:dashboard.php');
	}
	
}

if($_POST['submit'] == "Sign Up"){
	
	$uname = $_POST[''];
	header('location:register.php');
}

?>