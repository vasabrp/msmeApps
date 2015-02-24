<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msmeapps";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


function html($text) {
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function htmlout($text) {
	echo html($text);
}

function sanitizeString($var) {
	$var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}
function sanitizeMySQL($connection, $var) { 
	// Using the mysqli extension
	$var = $connection->real_escape_string($var);
	$var = sanitizeString($var);
	return $var;
}