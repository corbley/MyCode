<html lang="en">
  <head>
    <title>My Company</title>
  </head>
    <body>
  <div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 500px; display: table-cell;">Regions 
		<table>
   <tr>
	 <td><?php
$con = mysql_connect("localhost", "root", "AtlHawk33");
if (!$con){
die("Can not connect: " . mysql_error());
}
 mysql_select_db("clikclok", $con);
 
 if (isset($_POST['update'])){
 $UpdateQuery = "UPDATE `clikclok`.`internal_regions` SET reg_Name='$_POST[inputRegName]' WHERE reg_Name='$_POST[hiddenRegName]'";
 mysql_query($UpdateQuery, $con); 
 }; 
 
 if (isset($_POST['delete'])){
 $DeleteQuery = "DELETE FROM internal_regions WHERE reg_Name='$_POST[hiddenRegName]'";
 mysql_query($DeleteQuery, $con); 
 }; 
 
  if (isset($_POST['add'])){
 $AddQuery = "INSERT INTO internal_regions (reg_Name) VALUES('$_POST[addRegName]')";
 mysql_query($AddQuery, $con); 
 };
 
$sql = "SELECT * FROM `clikclok`.`internal_regions`";
$myData = mysql_query($sql,$con);
echo "<table border=1>
<tr>
<th>Region Name</th>
</tr>";
while($record = mysql_fetch_array($myData)){
echo "<form action=mycompanyTabs.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=inputRegName value=" . $record['reg_Name'] . " </td>"; //space here is critical " </td>"
echo "<td>" . "<input type=hidden name=hiddenRegName value=" . $record['reg_Name'] . " </td>"; //hidden part apparently critical
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
mysql_close($con);
?>
</td>
   </tr>
   </table>
		</div>
        <div style="display: table-cell align="left";"> Locations </div>
		<br>
		<table>
   <tr>

	 <?php
		// Included configuration file in our code.
		$con = mysql_connect("localhost", "root", "AtlHawk33");
		if (!$con){
		die("Can not connect: " . mysql_error());
		}		
	 echo "<td>";
	 $sql = "SELECT * FROM `clikclok`.`internal_regions`";
	$myData = mysql_query($sql,$con);
		while($query = mysql_fetch_array($myData)){
			echo "<form action=mycompanyTabs.php method=post>";
			echo "<tr>";
				$query = "SELECT reg_Name FROM `clikclok`.`internal_regions`" ;
				$result = mysql_query($query);
				echo "<ul>";
				echo'<select name="somename">';
				while($row = mysql_fetch_array( $result )) { 
						echo "<li>" . '<option value="'.$row['reg_Name'].'">' . $row['reg_Name'] . '</option>' . "</li>" ; 
						
				} 
				echo "<ul>";
			echo "<td>" . "<input type=hidden name=hiddenRegName value=" . $record['reg_Name'] . " </td>"; //hidden part apparently critical
			echo "</tr>";
			echo "</form>";
			}
		echo "<form action=myCompanyTabs.php method=post>";
	echo "</td>";
	echo "</tr>";
	?>		
		
    </div>
</div>
</frameset>
</body>


