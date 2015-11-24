<?php
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
?>
<?php
$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
	mysql_select_db('project', $con) or die(mysql_error($con));
	session_start();
if($_POST['submit']=="ADD"){	
		$fid = $_POST['fid'];
		//$_SESSION['fid'] = $fid;
		
		$uname = $_POST['uname'];
		//$_SESSION['uname'] = $uname;
		//echo $_POST['emailid'];
		$emailid = $_POST['emailid'];
		echo $emailid;
		//$_SESSION['emailid'] = $emailid;
		
		$phonenumber = $_POST['phonenumber'];
		//$_SESSION['phonenumber'] = $phonenumber;
		
		if($uname==""||$fid==""||$phonenumber==""||$emailid==""){?><script type="text/javascript">confirm("All fields are mandatory!");</script>
		<?php header("location:Admin_Add.php");}else{
		
			$result = mysql_query('select username from login where username="'.$uname.'"');
			if(mysql_num_rows($result))
			{echo '<script>alert("Username already exists!!");</script>';header('location:Admin_Add.php');}
			
			$result = mysql_query('select emailid from Adminlogin where emailid="'.$emailid.'"');
			if(mysql_num_rows($result)){echo '<script>alert("emailid already exists!!");</script>';header('location:Admin_Add.php');}
			else{
				 $password = random_password(8);
				 //echo $emailid;
				$query = 'insert into Adminlogin (facultyid, username, emailid, phonenumber, password) values 
				("'.$fid.'", "'.$uname.'", "'.$emailid.'", "'.$phonenumber.'", "'.$password.'")';
				mysql_query($query, $con) or die(mysql_error($con));
				header('location:Admin_Add_Faculty_next.php');
				die();
			}		
		
		}
}
if($_POST['submit']="Back to Login"){
	header('location:Adashboard.php');
}
	
	?>