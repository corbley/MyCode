<html>
<body>
<form action="createEmployee.php" method="post"> <br />
<b>Add New Employee</b>
<table border="0"  cellpadding="5px"  >
<tr>
	<td>First Name</td>  
	<td><input type="text" name="inputFirstName" value="" /></td>  
</tr>
<tr>
	<td>Last Name</td> 
	<td><input type="text" name="inputLastName" value="" /></td> 
</tr>
<tr>
	<td>Phone Number</td> 
	<td><input type="text" name="inputTelephone" value="" /> </td> 
</tr>
<tr>
	<td>Email Address</td> 
	<td><input type="text" name="inputEmail" value="" /> </td> 
</tr>
<tr>
	<td>Region</td> 
	<td><?php
include ("includes/connection.php");
$query = "SELECT reg_Name, region_id FROM `clikclok`.`internal_regions`" ;
$result = mysql_query($query);
echo'<select name="inputRegion">';
while($row = mysql_fetch_assoc( $result )) { 
        echo '<option value="'.$row['region_id'].'">' . $row['reg_Name'] . '</option>';   
}
echo '</select>';
?>
</td> 
<td>Location</td>
<td>
<?php
$query = "SELECT loc_Name, Location_id FROM `clikclok`.`internal_locations`" ;
$result = mysql_query($query);
echo'<select name="inputRegion">';
while($row = mysql_fetch_assoc( $result )) { 
        echo '<option value="'.$row['Location_id'].'">' . $row['loc_Name'] . '</option>';   
}
echo '</select>';
?>
</tr>
<tr>
	<td>Title</td> 
	<td><input type="text" name="inputTitle" value="" /> </td> 
</tr>
</tr>
<tr>
	<td>Start Date</td> 
	<td><input type="text" name="inputStartDate" value="" /></td> 
</tr>
<tr>
	<td>End Date</td> 
	<td><input type="text" name="inputEndDate" value="" /> </td> 
</tr>
<tr>
	<td>Username</td> 
	<td><input type="text" name="inputUsername" value="" /></td> 
</tr>
<tr>
	<td>Password</td> 
	<td><input type="text" name="inputPassword" value="" /> </td> 
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Save" /></tr>
</tr>
</table>
</form>
</body>
</div>
</html>