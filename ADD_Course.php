<?php
//Adding of new courses to the database by admin.
	$con = mysql_connect('localhost', 'project', 'project') or die('Unable to Connect');
	mysql_select_db('project', $con) or die(mysql_error($con));

	session_start();
	
	?>
	<center>
<h1 style="font-family: Tahoma; color:grey;">REGISTER COURSE</h1><br><br><br>
<form action="ADD_Course_next.php" method="post">
<table>
	<tr>
		<td>COURSE ID: </td>
		<td><input type="text" name="cid" placeholder="COURSE ID"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>COURSE NAME: </td>
		<td><input type="text" name="cname" placeholder="Course name"></td>
	</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>DEPARTMENT NAME: </td>
		<td>
			<?php $query = 'select dept from department';
				$result=mysql_query($query, $con) or die(mysql_error($con));
				
			echo '<select name="dept">';
			while($row = mysql_fetch_array($result)){
			 	echo '<option>'.$row['dept'].'</option>';
			} 
		echo '</select>';?></td>
	</tr>	
	<tr>
		<td></td>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<td></td><td><input type="submit" name="submit" value="ADD" /></td>
		
	</tr>
</table>
</form>
</center>
<?php 

?>