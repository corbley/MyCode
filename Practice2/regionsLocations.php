<?php
	include 'includes/connection.php';
	
	$name = $_POST['inputName'];
	
	if(!$_POST['submit']) {
		echo "Please fill out the form";
		header('Location: index.php');
	} else {
		mysql_query("INSERT INTO `clikclok`.`internal_regions`(`reg_Name`)
		VALUES('$name')") or die(mysql_error());
		echo "Company has been added.";
		header('Location: index.php');
	}		
		echo "Company has been added.";

?>