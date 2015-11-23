<?php
$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
	mysql_select_db('project', $con) or die(mysql_error($con));
	session_start();
$query = 'select username from login';	
	$result = mysql_query($query, $con) or die(mysql_error($con));
	$count=mysql_num_rows($result);
	echo '<center><b>SELECT FACULTY</b></br>';
	?>
	<form action="Admin_Edit_Next.php" method="POST">
	<?php
		echo '<select name="optionsubmit">';
			while($row = mysql_fetch_array($result)){
				echo '<option>'.$row['username'].'</option>';
			}
		echo '</select>';
		
		echo '<input type="submit" name="submit" value="EDIT"></br>';
		echo '<input type="submit" name="submit" value="GOBACK">
		</br></form>
		<form action="logout.php" method="POST">
		<input type="submit" name="submit" value="Signout">
		</form></center>';
		
	?>
	