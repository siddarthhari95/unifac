<?php
$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
	mysql_select_db('project', $con) or die(mysql_error($con));
	session_start();
	?>
	<center><h3>FACULTY ADDED.</h3></br><h4>Confirmation mail has be sent.</h4>
	<form action="Adashboard.php"><input type="submit" name="submit" value="back"></form>
	<form action="Alogout.php"><input type="submit" name="submit" value="logout"></form>
	</center>
	<?php
	?>