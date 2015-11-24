<?php
	include "config.php";
	
	if($_POST['submit'] == "Send Requests"){
		$swap_faculty = $_POST['users'];
		foreach($swap_faculty as $value){
			$result = mysql_query('select received_from from sid_swap_table where username='.$value.' and received_from=1') or die(mysql_error($con));
			if(mysql_num_rows($result)){
				echo '<script>
						var conf = confirm("You cant send a SWAP request to this person");
						if(conf){$_POST["submit"]="SWAP";header("location:swap_1.php");}
						else{$_POST["submit"]="SWAP";header("location:swap_1.php");}
					</script>';
			}else{
				mysql_query('insert into '.$value.'_swap_table 
							(username, subject, on_date, hour, received_from, send_to)
							values
							("'.$value.'", "subject", date, hour, 1)');
			}
		}
	}
	
?>