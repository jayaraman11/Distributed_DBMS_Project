<?php 

	$connStr = "dbname=student user=postgres password=123456";  
	$link = pg_connect($connStr) or die('Could not connect: ' . pg_last_error());
	
?>