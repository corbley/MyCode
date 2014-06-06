<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>My Company</title>

<style type="text/css">
#tabs ul {
padding: 0px;
margin: 0px;
margin-left: 10px;
list-style-type: none;
}

#tabs ul li {
display: inline-block;
clear: none;
float: left;
height: 24px;
}

#tabs ul li a {
position: relative;
margin-top: 16px;
display: block;
margin-left: 6px;
line-height: 24px;
padding-left: 10px;
background: #f6f6f6;
z-index: 9999;
border: 1px solid #ccc;
border-bottom: 0px;
-moz-border-radius-topleft: 0px;
border-top-left-radius: 0px;
-moz-border-radius-topright: 0px;
border-top-right-radius: 0px;
width: 150px;
color: #000000;
text-decoration: none;
font-weight: bold;
}

#tabs ul li a:hover {
text-decoration: underline;
cursor:pointer;
}

#tabs #Content_Area {
padding: 0 15px;
clear:both;
overflow:hidden;
line-height:19px;
position: relative;
top: 20px;
z-index: 5;
height: auto;
overflow: hidden;
border: 2px solid #000000;
border-radius: 1px;

}

p { padding-left: 15px; }
</style>

<script type="text/javascript">
function tab(tab) {
document.getElementById('tab1').style.display = 'none';
document.getElementById('tab2').style.display = 'none';
document.getElementById('tab3').style.display = 'none';
document.getElementById('tab4').style.display = 'none';
document.getElementById('li_tab1').setAttribute("class", "");
document.getElementById('li_tab2').setAttribute("class", "");
document.getElementById('li_tab3').setAttribute("class", "");
document.getElementById('li_tab4').setAttribute("class", "");
document.getElementById(tab).style.display = 'block';
document.getElementById('li_'+tab).setAttribute("class", "active");
}
</script>

</head>

<body>

<div id="tabs">
<ul>
<li id="li_tab1" onclick="tab('tab1')"><a>My Company</a></li>
<li id="li_tab2" onclick="tab('tab2')"><a>Regions & Locations</a></li>
<li id="li_tab3" onclick="tab('tab3')"><a>Employees</a></li>
<li id="li_tab4" onclick="tab('tab4')"><a>Other Information</a></li>
</ul>
<div id="Content_Area">
<div id="tab1">
</body>
<body>
<form action="createMyCompany.php" method="post"> <br />
<b>Company Details</b>
<table border="0"  cellpadding="5px"  >
<tr>
	<td>Company Name</td>  
	<td><input type="text" name="inputName" value="" /></td>  
</tr>
<tr>
	<td>Contact Name</td> 
	<td><input type="text" name="inputContactName" value="" /> </td> 
</tr>
<tr>
	<td>Contact Email</td> 
	<td><input type="text" name="inputEmail" value="" /> </td> 
</tr>
<tr>
	<td>Address 1</td> 
	<td><input type="text" name="inputAddress" value="" /></td> 
</tr>
<tr>
	<td>City</td> 
	<td><input type="text" name="inputCity" value="" /></td> 
	<td>State</td> 
	<td><select name="state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select></td> 
	<td>Postal</td> 
	<td><input type="text" name="inputPostal" value="" /> </td> 
</tr>
<tr>
	<td>Telephone</td> 
	<td><input type="text" name="inputTelephone" value="" /></td> 
</tr>
<tr>
	<td>Work Week Start</td>
	<td><select name="inputPayrollStartDay">
<option value="0">Sunday</option>
<option value="1">Monday</option>
</select></td>
</tr>
<tr>
	<td>Notes</td> 
	<td><textarea name="inputNotes" rows="2" cols="20"></textarea></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Save" /></tr>
</tr>
</table>
	
</form>
</body>
</div>
<!-- new tab 2-->

<div id="tab2" style="display: none;">
<body>
<html>
<table>
<tr>
  <td>
   <table>
   <tr>
	 <td><?php
	 
include 'includes/connection.php';
 
 if (isset($_POST['update'])){
 $UpdateQuery = "UPDATE `clikclok`.`internal_regions` SET reg_Name='$_POST[inputRegName]' WHERE reg_Name='$_POST[hiddenRegName]'";
 mysql_query($UpdateQuery); 
 }; 
 
 if (isset($_POST['delete'])){
 $DeleteQuery = "DELETE FROM internal_regions WHERE reg_Name='$_POST[hiddenRegName]'";
 mysql_query($DeleteQuery); 
 }; 
 
  if (isset($_POST['add'])){
 $AddQuery = "INSERT INTO `clikclok`.`internal_regions` (reg_Name) VALUES('$_POST[addRegName]')";
 mysql_query($AddQuery); 
 };
 
$sql = "SELECT * FROM `clikclok`.`internal_regions`";
$myData = mysql_query($sql);
echo "<table border=1>
<tr>
<th>Region Name</th>
</tr>";
while($record = mysql_fetch_array($myData)){
echo "<form action=mycompanyTabs.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=inputRegName value='" . $record['reg_Name'] . "' </td>"; //space here is critical " </td>"
echo "<td>" . "<input type=hidden name=hiddenRegName value='" . $record['reg_Name'] . "' </td>"; //hidden part apparently critical
echo "<td>" . "<input type=submit name=update value=Save" . " </td>";
echo "<td>" . "<input type=submit name=delete value=Delete" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "<form action=myCompanyTabs.php method=post>";
echo "<tr>";
echo "<td><input type=text name=addRegName></td>";
echo "<td>" . "<input type=submit name=add value=Add" . " </td>";
echo "</form>";
echo "</table>";
?></td>
   </tr>
   </table>
  </td>
  <td>
   <table>
   <tr>
	 <td>
</td>
   </tr>
   <tr>
	 <td><?php
 // Included configuration file in our code.
include ("includes/connection.php");
$query = "SELECT reg_Name FROM `clikclok`.`internal_regions`" ;
$result = mysql_query($query);
echo'<select name="somename">';
while($row = mysql_fetch_assoc( $result )) { 
        echo '<option value="'.$row['reg_Name'].'">' . $row['reg_Name'] . '</option>';   
}
echo '</select>';

//Select Locations
 // Included configuration file in our code.
include ("includes/connection.php");
if (isset($_POST['update'])){
 $UpdateQuery = "UPDATE `clikclok`.`internal_locations` SET loc_Name='$_POST[inputLocName]', loc_City='$_POST[inputCityName]', loc_LoadRate='$_POST[inputLoadRate]' WHERE  AND loc_City='$_POST[hiddenCityName]'  AND loc_LoadRate='$_POST[hiddenLoadRate]'";
 mysql_query($UpdateQuery); 
 }; 
 
 if (isset($_POST['delete'])){
 $DeleteQuery = "DELETE FROM internal_locations WHERE loc_Name='$_POST[hiddenLocName]'";
 mysql_query($DeleteQuery); 
 }; 
 
  if (isset($_POST['add'])){
 $AddQuery = "INSERT INTO internal_locations (loc_Name, loc_City, loc_LoadRate) VALUES('$_POST[addLocName]', '$_POST[addCityName]', '$_POST[addLoadRate]')";
 mysql_query($AddQuery); 
 };
 
$sql = "SELECT * FROM `clikclok`.`internal_locations`";
$myData = mysql_query($sql);
echo "<table border=1>
<tr>
<th>Location Name</th>
</tr>";
while($record = mysql_fetch_array($myData)){
echo "<form action=mycompanyTabs.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=inputLocName value='" . $record['loc_Name'] . "' </td>";
echo "<td>" . "<input type=text name=inputCityName value='" . $record['loc_City'] . "' </td>"; 
echo "<td>" . "<input type=text name=inputLoadRate value='" . $record['loc_LoadRate'] . "' </td>";  //space here is critical 
echo "<td>" . "<input type=hidden name=hiddenLocName value='" . $record['loc_Name'] . "' </td>" . "<td>" . "<input type=hidden name=hiddenCityName value='" . $record['loc_City'] . "' </td>" . "<input type=hidden name=hiddenLoadRate value='" . $record['loc_LoadRate'] . "' </td>"; //hidden part apparently critical
echo "<td>" . "<input type=submit name=update value=Save" . " </td>";
echo "<td>" . "<input type=submit name=delete value=Delete" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "<form action=myCompanyTabs.php method=post>";
echo "<tr>";
echo "<td><input type=text name=addLocName></td> <td><input type=text name=addCityName></td> <td><input type=text name=addLoadRate></td>";  //todo remove td's
echo "<td>" . "<input type=submit name=add value=Add" . " </td>";
echo "</form>";
echo "</table>";
?>
</td>
   </tr>
   </table>
  </td>
</tr>
</table>
</body>
</div>


<!-- new tab 3-->

<div id="tab3" style="display: none;">
<body>


<table>
<tr>
  <td>
   <table>
   <tr>
	 <td><?php
include 'includes/connection.php';
 
  if (isset($_POST['deleteEmployee'])){
 $DeleteQuery = "DELETE FROM internal_employees WHERE INT_EMPLOYEE_ID='$_POST[hiddenEmpID]'";
 mysql_query($DeleteQuery); 
 }; 
 
 if (isset($_POST['deleteEmployee'])){
 $DeleteQuery = "DELETE FROM websecurity_users WHERE guid = '$_POST[hiddenEmpID2]'";
 mysql_query($DeleteQuery); 
 }; 
				 
 
$sql = "SELECT * FROM `clikclok`.`internal_employees`
					LEFT OUTER JOIN `clikclok`.`setup_employees` on setup_employees.email=internal_employees.email
				 LEFT OUTER JOIN `clikclok`.`web_users`
				 on web_users.userid = setup_employees.EMAIL
				 ORDER BY internal_employees.EMP_NAME_LAST";
$myData = mysql_query($sql);

echo "<table border=1>
<tr>
<th>Employee</th>
</tr>";
echo "<td> <b>" . "Name" . "</td>";
echo "<td> <b>" . "Permission" . "</td>";
echo "<td> <b>" . "Active" . "</td>";
echo "<td> <b>" . "Comm Plan" . "</td>";
echo "<td> <b>" . "Spread %" . "</td>";

while($record = mysql_fetch_array($myData)){
echo "<form action=mycompanyTabs.php method=POST>";
echo "<tr>";
echo "<td>" . '<a href="http://localhost:1337/Practice2/editEmployee.php" title="Security" class="popup">' . $record['EMP_NAME'] . ' ' .$record['EMP_NAME_LAST'] . '</a>' . "</td>";
echo "<td>" .  $record['ROLE1'] . "</td>"; 
echo "<td>" .  $record['regstatus'] . "</td>"; 
// echo "<td>" . "<input type=hidden name=hiddenEmpID value='" . $record['INT_EMPLOYEE_ID'] . "' </td>"; //hidden part apparently critical
echo "<td>" .  "<input type=hidden name=hiddenEmpID value='" . $record['INT_EMPLOYEE_ID'] . "' </td>"; //hidden part apparently critical
echo "<td>" . "<input type=hidden name=hiddenEmpID2 value='" . $record['guid'] . "' </td>"; //hidden part apparently critical
echo "<td>" . "<input type=submit name=deleteEmployee value=-" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "<tr>";
echo  "<td>" . "</td>" . "<td>" . "</td>" . "<td>" . "</td>" . "<td>" . "</td>" .  "<td>" . "</td>" .  "<td>" . "</td>" . "<td>" . '<a href="http://localhost:1337/Practice2/employeeSetup.php" title="add" class="popup">' . '+'.  "</td>";
echo "</tr>";
echo "</table>";
?>
</tr>
</table>
</table>
</body>
</div>


<div id="tab4" style="display: none;">
<body>


	 <?php
	
include 'includes/connection.php';
 
$query = "SELECT distinct TermReason FROM `clikclok`.`lookup_termreason`";
$termination = mysql_query($query);
echo "<table border=1>
<tr>
<th>Termination</th>
</tr>";
echo "<td> <b>" . "Termination Reason" . "</td>";
while($record = mysql_fetch_array($termination)){
echo "<tr>";
echo "<td>" .  $record['TermReason'] . "</td>"; 
echo "</tr>";

}
echo "<tr>";
echo "</table>";
?>

</table>
 </tr>
</table>


</body>
</div>


</html>