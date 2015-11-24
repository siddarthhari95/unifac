<?php
$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
	mysql_select_db('project', $con) or die(mysql_error($con));
	session_start();

	if(!isset($_SESSION['uname'])){
		header('location:Adashboard.php');
	}
	else{
			
				$query = 'select username from login';
				$result=mysql_query($query, $con) or die(mysql_error($con));
				//echo '<select name="optionsubmit">';
			while($row = mysql_fetch_array($result)){
			 	//echo '<option>'.$row['username'].'</option>';
				echo ''.$row['username'].'';echo '</br>';
			}
		//echo '</select>';
?>
<?php 
	echo '<form action="logout.php">
	
	</br></br>
	<input type="submit" value="LOGOUT"></form>
	<form action="Adashboard.php" ><input type="submit" value="GO BACK"></form>
	';
	}?>