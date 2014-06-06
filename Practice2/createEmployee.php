<?php
	include 'includes/connection.php';
	
	$firstName = mysql_real_escape_string($_POST['inputFirstName']);
	$lastName = mysql_real_escape_string($_POST['inputLastName']);
	$telephone = mysql_real_escape_string($_POST['inputTelephone']);
	$email = mysql_real_escape_string($_POST['inputEmail']);
	$region = mysql_real_escape_string($_POST['inputRegion']);
	$location = mysql_real_escape_string($_POST['inputLocation']);
	$title = mysql_real_escape_string($_POST['inputTitle']);
	$startDate = mysql_real_escape_string($_POST['inputStartDate']);
	$endDate = mysql_real_escape_string($_POST['inputEndDate']);
	
	$username = mysql_real_escape_string($_POST['inputUsername']);
	$password = mysql_real_escape_string($_POST['inputPassword']);
		
		//test for perforce  delete this line whenever number 5
		
	if(!$_POST['submit']) {
		echo "Please fill out the form";
		header('Location: myCompanyTabs.php');
	} else {
	
		//creates UUID for both inserts so that users will be mapped correctly
		$uuidQuery  = mysql_query("select uuid() as uuid") or die(mysql_error());
		if( $row = mysql_fetch_array($uuidQuery, MYSQL_ASSOC) ){
		$uuid = $row['uuid'];
		}
		
		mysql_query("INSERT INTO `clikclok`.`internal_employees` ( `guid`, `company_id`, `EMP_NAME`,`EMP_NAME_LAST`,`PHONE`,`EMAIL`,`emp_Region_id`, `emp_job_title`, `place_StartDate`, `place_EndDate`)
		VALUES('$uuid', '1', '$firstName', '$lastName', '$telephone', '$email', '$region', '$title', '$startDate', '$endDate')") or die(mysql_error());
		//echo "Employee has been added.";
		//header('Location: index.php');
		
		mysql_query("INSERT INTO `clikclok`.`websecurity_users` (`guid`, `userid`, `password`)
		VALUES('$uuid', '$username', '$password')") or die(mysql_error());
		
	}		
		header('Location: myCompanyTabs.php');
	
	
		echo "Employee has been added.";

?>