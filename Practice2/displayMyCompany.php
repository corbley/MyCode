<?php
	include 'includes/connection.php';
	
	$query = "SELECT  * FROM `clikclok`.`company`";
	
	$result = mysql_query($query);
	
	while($company = mysql_fetch_array($result)){
		echo "<h3>" . $company['name'] . "</h3>";
		echo "<h1>" . $company['address'] . "</h1>";
		echo "<h1>" . $company['city'] . "</h1>";
		echo "<p>" . $company['state'] . "</p>";
		echo "<p>" . $company['postal'] . "</p>";
		echo "<p>" . $company['contact_name'] . "</p>";
		echo "<p>" . $company['email'] . "</p>";
		echo "<p>" . $company['telephone'] . "</p>";
		echo "<p>" . $company['payroll_start_day'] . "</p>";
	}	
?>