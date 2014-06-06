<?php
 // Included configuration file in our code.
include ("includes/connection.php");
$query = "SELECT reg_Name FROM `clikclok`.`internal_regions`" ;
$result = mysql_query($query);
echo'<select name="somename">';
while($row = mysql_fetch_assoc( $result )) { 
        echo '<option value="'.$row['reg_Name'].'">' . $row['reg_Name'] . '</option>';   
}
echo '</select>';
?>


<?php
$dropdown = "<select name='drinkname'>";
while($row = mysql_fetch_assoc($dresult)) {
  $dropdown .= "\r\n<option value='{$row['drinkname']}'>{$row['drinkname']}</option>";
}
$dropdown .= "\r\n</select>";
echo $dropdown;
//test for perforce
?>

