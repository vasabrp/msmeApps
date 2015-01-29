<?php include_once $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/helpers.inc.php'; ?>
<?php
$login = 1;
session_start();
$_SESSION["user_id"] = "440262";

if(isset($_SESSION["user_id"])) {
	if(isset($_POST['school'])) {
		$school = sanitizeString($_POST['school']);
		echo $school;
	} else {
		include 'project-report.html.php';
	}
	
}

echo 'Hello, world.';

include $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/footer.inc.html.php';

?>