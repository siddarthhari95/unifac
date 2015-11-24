<br><br><center>
<h1 style="font-family:Tahoma;"><i>Swapping Functionality Part-I</i></h1>
<br><br>
<table>
<form action="swap_1.php" method="POST">
	<tr><td>Date: </td><td><input type="date" name="date"/></td></tr>
	<tr><td>Hour: </td><td><select name="hour">
		<option>first_hour</option><option>second_hour</option><option>third_hour</option>
		<option>fourth_hour</option><option>fifth_hour</option><option>sixth_hour</option><option>seventh_hour</option>
	</select></td></tr>
	<tr><td></td><td><input type="submit" name="submit" value="SWAP" /></td></tr>
</form>
</center>
<?php
	include 'config.php';
?>