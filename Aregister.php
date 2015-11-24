<?php
	session_start();
	$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));
	
	if(isset($_SESSION['uname'])){
		header('location:Adashboard.php');
	}
	else{
?>

<center>
<h1 style="font-family: Tahoma; color:grey;">Register</h1><br><br><br>
<form action="Aregister_portal_1.php" method="post">
<table>
		<td>UserName: </td>
		<td><input type="text" name="uname" placeholder="Username"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>Password: </td>
		<td><input type="password" name="pass" placeholder="Password"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>Re-Enter Password: </td>
		<td><input type="password" name="repass" placeholder="Password"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Register"></td>
		<td><input type="submit" name="submit" value="Back to Login"/></td>
	</tr>
</table>
</form>
</center>
	<?php
	}
	?>