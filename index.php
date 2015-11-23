<html>
<body style="background:#ccc;"><!--background="slide-image-1.jpg" style="background-size: 100% 100%;">-->
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
<div style="position:relative;left:-100px;top:30px;font-size:25;">
<center>
<h1 style="font-family: Courier New;color:#345678">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uni-Fac<br><!--<small style="color:blue">UNIversity FACulty app</small>--></h1><br><br></center>
</div>
<div style="position:relative;">
	<a href="#" style="background-color:cyan;text-decoration:none;color:black;">What is Unifac?</a><br><br>
	<a href="#" style="background-color:cyan;text-decoration:none;color:black;">Developers</a>
</div>
<div style="background:#80BFFF; position:absolute;left:550px;top:120px;right:0px;left:130px;bottom:0px;">

	<div style="left:400px;position:relative;top:100px;"><form action="choice.php" method="post">
		<table>
			<tr>
				<td style="font-family:Lucida Console;font-size:23"><b>UserName</b></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" placeholder="Username" style="padding: 5px; border:2px solid #ccc; -webkit-border-radius: 5px; border-radius: 7px;"></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td style="font-family:Lucida Console;font-size:23"><b>Password</b></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" placeholder="Password" style="padding: 5px; border:2px solid #ccc; -webkit-border-radius: 5px; border-radius: 7px;"></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
			
				<td><input type="submit" name="submit" value="Log In" style="padding:5px 15px; background:#ccc; border:0 none; cursor:pointer; -webkit-border-radius: 5px; border-radius: 5px;"></td>
				<td><input type="submit" name="submit" value="Sign Up" style="padding:5px 15px; background:#ccc; border:0 none; cursor:pointer; -webkit-border-radius: 5px; border-radius: 5px;">&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="Admin" style="padding:5px 15px; background:#ccc; border:0 none; cursor:pointer; -webkit-border-radius: 5px; border-radius: 5px;"></td>
			</tr>
		</table>
	</form>
	</div>
	<div style="position:relative;top:350px;left:500px;">
		<small>&copy;Amrita University</small>
	</div>
</div>
<?php
}
?>
</body>