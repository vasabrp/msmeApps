<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/helpers.inc.php';

// prepare all faculty list
/*
$sql = "SELECT * FROM user";
$allFacultyList = mysqli_query($conn, $sql);
if (mysqli_num_rows($allFacultyList) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($allFacultyList)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

if ($_GET['dept'] == 'acct') {
?>
	<select name="instructor">
	<option value="">acct1</option>
	<option value="">acct2</option>
	<option value="">acct3</option>
	<option value="">acct4</option>
	</select>
<?php
}
if ($_GET['dept'] == 'be') {
?>
<select name="instructor">
<option value="Albama">be1</option>
<option value="Alaska">be2</option>
<option value="Arizona">be3</option>
<option value="Florida">be4</option>
</select>
<?php
}
if ($_GET['dept'] == 'bis') {

// prepare all faculty list
$sql = "SELECT * FROM user where dept='bis' ORDER BY name asc";
$bisList = mysqli_query($conn, $sql);
if (mysqli_num_rows($bisList) > 0) {
    // output data of each row
    echo "<select name='instructor'>";
	while($row = mysqli_fetch_assoc($bisList)) {
		echo "<option value='".$row["id"]."'>".$row["name"]. "</option>";
    }
    echo "</select>";
} else {
    echo "0 results";
}

mysqli_close($conn);

}
?>