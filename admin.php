<?php
echo "<center><h3>  WELCOME ADMIN<br> SIGN IN </h3><center>";
session_start();
//session_destroy(); 
//session_start();

if(isset($_SESSION['uname'])){
		header('location:Adashboard.php');
	}

$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));
	//check for session logged in or not
	if (isset($_SESSION['uname'])){
    // ...
		header('location:Adashboard.php');
	}else{
		?>
		<form action="Achoice.php" method="post">
		<input type="text" name="uname" placeholder="Username" style="padding: 5px; border:2px solid #ccc;
			-webkit-border-radius: 5px; border-radius: 7px;"></br></br>
		<input type="password" name="pass" placeholder="Password" style="padding: 5px; border:2px solid #ccc;
			-webkit-border-radius: 5px; border-radius: 7px;"></br></br>
		<input type="submit" name="submit" value="signin" style="padding:5px 15px; background:#ccc;
			border:0 none; cursor:pointer; -webkit-border-radius: 5px; border-radius: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="submit" value="signup" style="padding:5px 15px; background:#ccc;
			border:0 none; cursor:pointer; -webkit-border-radius: 5px; border-radius: 5px;">
		
		</form>
<?php
	} 
?>