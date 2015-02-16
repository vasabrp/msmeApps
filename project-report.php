<?php include_once $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/helpers.inc.php'; ?>
<?php
$login = 1;
session_start();
$_SESSION["user_id"] = "440262";

if(isset($_SESSION["user_id"])) {
	// ADD TO DB
	if(isset($_POST['school'])&&isset($_POST['dept'])&&isset($_POST['type'])&&isset($_POST['topic'])&&isset($_POST['date'])&&isset($_POST['venue'])&&isset($_POST['organizer'])&&isset($_POST['objective'])&&isset($_POST['owner'])&&isset($_POST['id'])&&isset($_POST['summary'])&&isset($_POST['application'])) {
		$timestampt = date('YmdHis');
		$school = sanitizeString($_POST['school']);
		$dept = sanitizeString($_POST['dept']);
		$type = sanitizeString($_POST['type']);
		$topic = sanitizeString($_POST['topic']);
		$date = sanitizeString($_POST['date']);
		$hours = sanitizeString($_POST['hours']);
		$venue = sanitizeString($_POST['venue']);
		$organizer = sanitizeString($_POST['organizer']);
		$objective = sanitizeString($_POST['objective']);
		$participant = sanitizeString($_POST['participant']);
		$owner = sanitizeString($_POST['owner']);
		$id = sanitizeString($_POST['id']);
		$summary = sanitizeString($_POST['summary']);
		$application = sanitizeString($_POST['application']);
	} else {
		include 'project-report.html.php';
	}
	// CREATE & ADD TO FOLDERS
	
	
	$path1= "upload/".$HTTP_POST_FILES['ufile']['name'][0];
	$path2= "upload/".$HTTP_POST_FILES['ufile']['name'][1];
	$path3= "upload/".$HTTP_POST_FILES['ufile']['name'][2];	
	
	
}

//include $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/footer.inc.html.php';

?>