<?php

$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
mysql_select_db('project', $con) or die(mysql_error($con));

/*$var = 'insert into department (dept) values 
			("CSE"),
			("MECH"),
			("ECE")';

$var = 'insert into course(dept,course_code,course_name) values 
			("CSE","CSE_101","C++"),
			("CSE","CSE_102","DBMS")'
			;
$var = 'insert into course(dept,course_code,course_name) values 
			("CSE","CSE_103","OS"),
			("MECH","MECH_101","carpentary"),
			("MECH","MECH_102","sheetmetal"),
			("MECH","MECH_103","thermodynamics"),
			("ECE","ECE_101","circuits"),
			("ECE","ECE_102","vlsi"),
			("ECE","ECE_103","MC")'
;
$var = 'insert into course_faculty(dept,course_code,fac_id) values 
			("CSE","CSE_101","CSE_FAC_101"),
			("CSE","CSE_101","CSE_FAC_102"),
			("CSE","CSE_102","CSE_FAC_102"),
			("CSE","CSE_103","CSE_FAC_103"),
			("CSE","CSE_103","CSE_FAC_101"),
			("MECH","MECH_101","MECH_FAC_101"),
			("MECH","MECH_101","MECH_FAC_102"),
			("MECH","MECH_102","MECH_FAC_102"),
			("MECH","MECH_102","MECH_FAC_103"),
			("MECH","MECH_103","MECH_FAC_101"),
			("ECE","ECE_101","ECE_FAC_101"),
			("ECE","ECE_101","ECE_FAC_102"),
			("ECE","ECE_102","ECE_FAC_102"),
			("ECE","ECE_102","ECE_FAC_103"),
			("ECE","ECE_103","ECE_FAC_101")'
			;*/
/*$var = 'insert into d_faculty(fac_id,fac_name,dept) values 
			("CSE_FAC_101","siddarth","CSE"),
			("CSE_FAC_102","chaitanya","CSE"),
			("CSE_FAC_103","kiran","CSE"),
			("MECH_FAC_101","harinarayanan","MECH"),
			("MECH_FAC_102","amrita","MECH"),
			("MECH_FAC_103","vit","MECH"),
			("ECE_FAC_101","sumanth","ECE"),
			("ECE_FAC_102","nadeem","ECE"),
			("ECE_FAC_103","aazad","ECE")'
			;*/
			
	/*$var = 'insert into cse_courses(course_id, course_name) values
			("CSE400", "Computer Graphics"),
			("CSE421", "Net Centric Programming"),
			("CSE430", "Computer Language Engineering"),
			("CSE455", "Data Warehousing and Data Mining")';*/
	$var = 'insert into cse400 (username)values
			("aarthi"),
			("archana")';
mysql_query($var, $con) or die(mysql_error($con));

?>