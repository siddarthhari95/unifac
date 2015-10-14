<html>
<body background="slide-image-1.jpg" style="background-size: 100% 100%;">
</html>

<?php
	
	session_start();
	//session_destroy();
	$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));

	if (isset($_SESSION['uname'])){
    // ...
		header('location:dashboard.php');
	}else{
?>
<br><br><br><br>
<center><h1 style="font-family: Tahoma;color:#345678">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unifac</h1><br><br><br>

	<form action="choice.php" method="post">
		<table>
			<tr>
				<td><b>UserName</b></td>
				<td><input type="text" name="uname" placeholder="Username"></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input type="password" name="pass" placeholder="Password"></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td><input type="submit" name="submit" value="Log In"></td>
				<td><input type="submit" name="submit" value="Sign Up"></td>
			</tr>
	</form>
			
		</table>
	</form>
	
</center>
<?php
}
?>
</body>