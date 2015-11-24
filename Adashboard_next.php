<?php
session_start();
if(!isset($_SESSION['uname'])){
		header('location:Adashboard.php');
	}
else{
echo 'DASHBOARD ';
if($_POST[submit]=="Edit_Table"){header('location:Admin_Edit.php');}
if($_POST[submit]=="ADD_faculty"){header('location:Admin_Add.php');}
if($_POST[submit]=="View_faculty"){header('location:Admin_faculty.php');}
if($_POST[submit]=="ADD_Course"){header('location:ADD_Course.php');}
}
?>