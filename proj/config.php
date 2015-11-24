<?php

$con = mysql_connect('localhost', 'project', 'project') or die('Unable to connect');
mysql_select_db('project', $con) or die(mysql_error($con));

?>