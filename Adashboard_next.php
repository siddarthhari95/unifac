<?php
session_start();
echo 'DASHBOARD ';
if($_POST[submit]=="Edit_Table"){header('location:Admin_Edit.php');}
if($_POST[submit]=="ADD_faculty"){header('location:Admin_Add.php');}
?>