<?php
session_start();
$db = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $db) or die(mysql_error($db));
	
	
	function timetable(){
		$subs = array();
		$desc = array();
		$result = mysql_query('select course_id, course_name from CSE_courses') or die(mysql_error($db));
		$count = 0;
		while($row = mysql_fetch_array($result)){
			//echo '<option>'.$row['course_name'].' - '.$row['course_id'].'</option>';
			array_push($subs, $row['course_id']);
			array_push($desc, $row['course_name']);
			$count++;
		}
		$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
		$hours = array('First hour', 'Second hour', 'Third hour', 'Fourth hour', 'Fifth hour', 'Sixth hour', 'Seventh hour');
		echo '
		<center><table border="1px">';
			echo '<form action="register_portal_2.php" method="post">';
			echo '<tr><td></td	>';
			for($x=0;$x<7;$x++){
				echo '<td>'.$hours[$x].'</td>';
			}
			echo '</tr>';
			for($j=1;$j<7;$j++)
			{
		
			echo '<tr><td><b>'.$days[$j-1].'</b></td>';
			
			for($i=1;$i<8;$i++)
			{
				echo '<td><select name="course'.$j.$i.'"> <option selected="selected">free</option>';
				
				for($k=0; $k<$count; $k++){
					echo '<option>'.$subs[$k].'</option>';
				}
					
				echo '</select></td>';
			}
			
			echo '</tr>';
			}echo '</table>';
			
			for($i=0;$i<$count;$i++){
				echo $subs[$i] . ' - ' . $desc[$i] . '<br/>';
			}
			
			echo '<input type="submit" name="submit" value="Save"></form>';
	}
echo '</center>';

if($_POST['submit'] == 'Back to Login'){header('Location:index.php');}
	
if($_POST['submit'] == 'Register'){
	//echo 'asdasdasd';
		$username = $_POST['uname'];
		$_SESSION['uname'] = $username;
		$password = $_POST['pass'];
		$_SESSION['pass'] = $password;
		$repass = $_POST['repass'];
		
		if($username==""||$password==""||$repass==""){?><script type="text/javascript">confirm("All fields are mandatory!");</script>
		<?php header("location:register.php");}else{
		if($password == $repass){
			$result = mysql_query('select username from login where username="'.$username.'"');
			if(mysql_num_rows($result))
			{session_destroy();echo '<script>alert("Username already exists!!");</script>';header('location:register.php');}
			else{
				$query = 'insert into login (username, password) values ("'.$username.'","'.$password.'")';
				mysql_query($query, $db) or die(mysql_error($db));
				timetable();
				die();
			}		
		}
		}
}
?>