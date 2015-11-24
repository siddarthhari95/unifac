<?php
  //admin adds or register's a new faculty to database and provides him a username
	?>
	
<center>
<h1 style="font-family: Tahoma; color:grey;">REGISTER FACULTY</h1><br><br><br>
<form action="Admin_Add_Faculty.php" method="post">
<table>
	<tr>
		<td>FACULTY ID: </td>
		<td><input type="text" name="fid" placeholder="Faculty ID"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>USER NAME: </td>
		<td><input type="text" name="uname" placeholder="Username"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>Email id: </td>
		<td><input type="email" name="emailid" placeholder="Xyz@amrita.edu"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>phone Number: </td>
		<td><input type="number" name="phonenumber" placeholder="+91 98765 43210"></td>
	</tr>
	
	<tr>
		<td></td>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<td><input type="submit" name="submit" value="ADD" /></td>
		<td><input type="submit" name="submit" value="Back to Login" /></td>
	</tr>
</table>
</form>
</center>
	<?php
	
	?>