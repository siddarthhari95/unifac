<?php
	include "proj/config.php";
	session_start();
	//echo $_SESSION['date'];
	if($_POST['submit'] == "Swap Request"){
		//echo 'indians';
		$swap_faculty = $_POST['user']; 
		foreach($swap_faculty as $value){
			echo $value."<br>";
			
			$query = 'select username, course_id, hour, date, check1 from '.$_SESSION['uname'].'_swap_table where username="'.$value.'" and check1=1';
			$query1 = 'select username, course_id, hour, date, check1 from '.$_SESSION['uname'].'_swap_table where username="'.$value.'" and check1=0';
			$result1 = mysql_query($query1, $con) or die(mysql_error($con));
			
			if(mysql_num_rows($result1)){
				echo '<script type="text/javascript">var t = null;t=confirm("You have already Sent requests to these faculties");if(t==true || t==false){';
					header("location:dashboard.php");
		echo ';}</script>';
			}else{
			
			$result = mysql_query($query, $con) or die(mysql_error($con));
			if(!(mysql_num_rows($result))){
			$query = 'insert into '.$value.'_swap_table 
						(username, course_id, hour, date, check1)
					values
						("'.$_SESSION['uname'].'", "'.$_SESSION['course_id'].'", "'.$_SESSION['hour'].'", "'.$_SESSION['date'].'" ,1)';//received = 1
			mysql_query($query, $con) or die(mysql_error($con));
			}else{echo '<script type="text/javascript">var t = null;t=confirm("Sent requests to these faculties");if(t==true || t==false){';
					header("location:dashboard.php");
		echo ';}</script>';}
			$query = 'insert into '.$_SESSION['uname'].'_swap_table
						(username, course_id, hour, date, check1)
					values	
						("'.$value.'", "'.$_SESSION['course_id'].'", "'.$_SESSION['hour'].'", "'.$_SESSION['date'].'", 0)';// sent = 0
			mysql_query($query, $con) or die(mysql_error($con));
		}
		echo '<script type="text/javascript">var t = null;t=confirm("Sent requests to these faculties");if(t==true || t==false){';
					header("location:dashboard.php");
		echo ';}</script>';
		}
	}
	
?>