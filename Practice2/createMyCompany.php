<?php
	include 'includes/connection.php';
	
	$name = $_POST['inputName'];
	$address = $_POST['inputAddress'];
	$city = $_POST['inputCity'];
	$state = $_POST['inputState'];
	$postal = $_POST['inputPostal'];
	$contactName = $_POST['inputContactName'];
	$email = $_POST['inputEmail'];
	$telephone = $_POST['inputTelephone'];
	$payrollStartDay = $_POST['inputPayrollStartDay'];
	$notes = $_POST['inputNotes'];
	
	if(!$_POST['submit']) {
		echo "Please fill out the form";
		header('Location: index.php');
	} else {
		mysql_query("INSERT INTO `clikclok`.`company`(`name`,`address`,`city`,`state`,`postal`,`contact_name`,`email`,`telephone`,`payroll_start_day`,`notes`)
		VALUES('$name', '$address', '$city', '$state', '$postal', '$contactName', '$email', '$telephone', '$payrollStartDay', '$notes')") or die(mysql_error());
		echo "Company has been added.";
		header('Location: index.php');
	}		
		echo "Company has been added.";

?>