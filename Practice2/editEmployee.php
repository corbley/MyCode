<?php

//Select Locations
 // Included configuration file in our code.
include ("includes/connection.php");
if (isset($_POST['update'])){
 $UpdateQuery = "UPDATE `clikclok`.`internal_employees` SET EMP_NAME='$_POST[inputFirstName]', EMP_NAME_LAST='$_POST[inputLastName]', PHONE='$_POST[inputTelephone]' ";
							//WHERE INT_EMPLOYEE_ID = '$_POST[hiddenEmpID]'";
 mysql_query($UpdateQuery); 
 }; 
 
$sql = "SELECT * FROM `clikclok`.`internal_employees`";
		//where INT_EMPLOYEE_ID = '$_GET[hiddenEmpID]'";
$myData = mysql_query($sql);
echo "<table border=1>
<tr>
<th>Employee</th>
</tr>";
while($record = mysql_fetch_array($myData)){
echo "<form action=editEmployee.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=inputFirstName value='" . $record['EMP_NAME'] . "' </td>";
echo "<td>" . "<input type=text name=inputLastName value='" . $record['EMP_NAME_LAST'] . "' </td>"; 
echo "<td>" . "<input type=text name=inputTelephone value='" . $record['inputTelephone'] . "' </td>";  //space here is critical 

//echo "<td>" . "<input type=hidden name=hiddenEmpID value='" . $record['INT_EMPLOYEE_ID'] . "' </td>"; //hidden part apparently critical
echo "<td>" . "<input type=submit name=update value=Save" . " </td>";
echo "<td>" . "<input type=submit name=delete value=Delete" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "<form action=editEmployee.php method=post>";
echo "<tr>";
//echo "<td><input type=text name=addLocName></td> <td><input type=text name=addCityName></td> <td><input type=text name=addLoadRate></td>";  //todo remove td's
//echo "<td>" . "<input type=submit name=add value=Add" . " </td>";
echo "</form>";
echo "</table>";
?>