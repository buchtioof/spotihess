<?php
	// Connect to database
	$con = mysqli_connect("localhost","root","","spotihess");
	// Get all the courses from courses table
	// execute the query
	// Store the result
	$sql = "SELECT * FROM `songs`";
	$dbquery = mysqli_query($con,$sql);
	$dbfetch = mysqli_fetch_all($dbquery,MYSQLI_ASSOC);
?>