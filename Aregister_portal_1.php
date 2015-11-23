<?php
session_start();
$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));
	
if($_POST['submit'] == 'Back to Login'){header('Location:admin.php');}
	
if($_POST['submit'] == 'Register'){
		$username = $_POST['uname'];
		$_SESSION['uname'] = $username;
		$password = $_POST['pass'];
		$_SESSION['pass'] = $password;
		$repass = $_POST['repass'];
		
		if($username==""||$password==""||$repass==""){?><script type="text/javascript">confirm("All fields are mandatory!");</script>
		<?php header("location:Aregister.php");}else{
		if($password == $repass){
			$result = mysql_query('select username from alogin where username="'.$username.'"');
			if(mysql_num_rows($result))
			{session_destroy();echo '<script>alert("Username already exists!!");</script>';header('location:Aregister.php');}
			else{
				$query = 'insert into alogin (username, password) values ("'.$username.'","'.$password.'")';
				mysql_query($query, $db) or die(mysql_error($db));
				//timetable();
				header('location:admin.php');
				die();
			}		
		}
		
		else{session_destroy();header('location:Aregister.php');}
		}
}
?>