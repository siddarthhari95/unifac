<?php
	include "config.php";
	
	if($_POST['submit'] == "Swap Request"){
		//echo 'indians';
		$swap_faculty = $_POST['user'];
		foreach($swap_faculty as $value){
			echo $value."<br>";
		}
		echo '<br>Sent requests to these faculties<br>';
	}
	
?>