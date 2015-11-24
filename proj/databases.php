<?php
	include 'config.php';
	/*$query = 'insert into nadeem_table 
				(first_hour, second_hour, third_hour, fourth_hour, fifth_hour, sixth_hour, seventh_hour)
			values
				("DBMS", "free", "OS", "free", "free", "OS-Lab", "OS-Lab"),
				("free", "free", "free", "free", "free", "free", "free"),
				("free", "free", "free", "DBMS", "free", "free", "free"),
				("free", "OS", "free", "free", "free", "DBMS", "free"),
				("free", "free", "free", "free", "free", "free", "free"),
				("free", "free", "free", "free", "free", "free", "free")';*/
	/*$query = 'insert into CSE_courses
				(course_id, course_name)
			values	
				("CSE455", "Data Warehousing and Data Mining"),
				("CSE400", "Computer Graphics"),
				("CSE421", "Net-Centric Programming"),
				("CSE430", "Computer Lanuguage Engineering"),
				("MNG400", "Principles of Management"),
				("CSE490", "Computer Graphics and Visualization Lab")';*/

$query = 'insert into CSE430
			(username)
		values
			("kamalaveni"),
			("prashanth_nair"),
			("sabarish"),
			("sini"),
			("hema_pm")';				
	mysql_query($query, $con) or die(mysql_error($con));