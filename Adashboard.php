
<?php
session_start();
if(isset($_SESSION['uname'])){
?><html><h3><center>WELCOME ADMIN</center></h3></html>
<form action="Adashboard_next.php" method="POST"><center>
<input type="submit" name="submit" value="Edit_Table"></br></br>
<input type="submit" name="submit" value="ADD_faculty"></br></br>
<input type="submit" name="submit" value="View_faculty"></br></br>
<input type="submit" name="submit" value="ADD_Course"></br></br>
<input type="submit" name="submit" value="ADD_DEPARTMENT"></br></br>
</form></center>
<br><center><form action="Alogout.php" method="POST">
		<input type="submit" name="submit" value="Signout"></center>
<?php
	}else{
		header('location:admin.php');
	}?>