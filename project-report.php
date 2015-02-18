<?php include_once $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/helpers.inc.php'; ?>
<?php
$login = 1;
session_start();
$_SESSION["user_id"] = "440262";

if(isset($_SESSION["user_id"])) {
	// ADD TO DB
	/*
	if(isset($_POST['school'])&&isset($_POST['dept'])&&isset($_POST['type'])&&isset($_POST['topic'])&&isset($_POST['date'])&&isset($_POST['venue'])&&isset($_POST['organizer'])&&isset($_POST['objective'])&&isset($_POST['owner'])&&isset($_POST['id'])&&isset($_POST['summary'])&&isset($_POST['application'])) {
	*/
	if(isset($HTTP_POST_FILES['ulfile']['tmp_name'][0]) && !empty($HTTP_POST_FILES['ulfile']['tmp_name'][0])) {
	
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

		// CREATE & ADD TO FOLDERS
		// create custom folder here
		
		// set paths
		$path = $_SERVER['DOCUMENT_ROOT']."/uploads/";

		$path1= $path.$HTTP_POST_FILES['ulfile']['name'][0];
		//$path2= $path.$HTTP_POST_FILES['ulfile']['name'][1];
		//$path3= $path.$HTTP_POST_FILES['ulfile']['name'][2];	

		//copy file to where you want to store file
		echo $_SERVER['DOCUMENT_ROOT'];
		copy($HTTP_POST_FILES['ulfile']['tmp_name'][0], $path1);
		//copy($HTTP_POST_FILES['ulfile']['tmp_name'][1], $path2);
		//copy($HTTP_POST_FILES['ulfile']['tmp_name'][2], $path3);
		
		// Use this code to display the error or success.

		$filesize1=$HTTP_POST_FILES['ulfile']['size'][0];
		//$filesize2=$HTTP_POST_FILES['ulfile']['size'][1];
		//$filesize3=$HTTP_POST_FILES['ulfile']['size'][2];

		if($filesize1==0) {
			echo "Cannot upload ".$HTTP_POST_FILES['ulfile']['name'][0];
			echo "<BR />";
		}

	} else {
		include 'project-report.html.php';
	}
	
	
}

//include $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/footer.inc.html.php';

?>