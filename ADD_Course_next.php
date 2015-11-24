<?php
//Adding of new courses to the database by admin.
	$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));

	session_start();
	$cid=$_POST['cid'];
$cname=$_POST['cname'];
$dept=$_POST['dept'];
	if($cname==""||$cid==""||$dept==""){?><script type="text/javascript">confirm("All fields are mandatory!");</script>
		<?php header("location:ADD_Course.php");}else{

		
		$result = mysql_query('select course_code from course where course_code="'.$cid.'"');
			if(mysql_num_rows($result))
			{echo '<script>alert("course already exists!!");</script>';header('location:ADD_Course.php');}
			
			
			else{
				$query = 'insert into course (dept,course_code,course_name) values 
				("'.$dept.'", "'.$cid.'", "'.$cname.'")';
			
			
				mysql_query($query, $db) or die(mysql_error($db));
				header('location:Adashboard.php');
				die();
			}	
		
		}
	
	?>
