<?php
	include "proj/config.php";
	session_start();
	if($_POST['submit'] == "Swap Request"){
		//echo 'indians';
		$swap_faculty = $_POST['user']; 
		foreach($swap_faculty as $value){
			echo $value."<br>";
			$query = 'insert into '.$value.'_swap_table 
						(username, check1)
					values
						("'.$_SESSION['uname'].'", 1)';//received = 1
			mysql_query($query, $con) or die(mysql_error($con));
			$query = 'insert into '.$_SESSION['uname'].'_swap_table
						(username, check1)
					values	
						("'.$value.'", 0)';// sent = 0
			mysql_query($query, $con) or die(mysql_error($con));
		}
		echo '<br>Sent requests to these faculties<br>';
	}
	
?>