<?php include_once $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/helpers.inc.php'; ?>
<?php
$login = 1;
session_start();
$_SESSION["user_id"] = "440262";

if(isset($_SESSION["user_id"])) {
	// ADD TO DB
	/*
	if(isset($_POST['school'])&&isset($_POST['dept'])&&isset($_POST['type'])&&isset($_POST['topic'])&&isset($_POST['date'])&&isset($_POST['venue'])&&isset($_POST['organizer'])&&isset($_POST['objective'])&&isset($_POST['owner'])&&isset($_POST['uid'])&&isset($_POST['summary'])&&isset($_POST['application'])) {
	*/
	if(isset($_POST['school'])&&
	   isset($_POST['dept'])&&
	   isset($_POST['type'])&&
	   isset($_POST['topic'])) {
	

    	// Clean up input strings
		$timestampt = date('YmdHis');
		$school = sanitizeString($_POST['school']);
		$dept = sanitizeString($_POST['dept']);
		$type = sanitizeString($_POST['type']);
		$role = sanitizeString($_POST['role']);
		$topic = sanitizeString($_POST['topic']);
		$date = sanitizeString($_POST['date']);
		$hours = sanitizeString($_POST['hours']);
		$venue = sanitizeString($_POST['venue']);
		$organizer = sanitizeString($_POST['organizer']);
		$objective = sanitizeString($_POST['objective']);
		$participant = sanitizeString($_POST['participant']);
		$owner = sanitizeString($_POST['owner']);
		$uid = sanitizeString($_POST['uid']);
		$summary = sanitizeString($_POST['summary']);
		$application = sanitizeString($_POST['application']);
		$file1 = $file2 = $file3 = $file4 = $file5 = $file6 = "";

		// CREATE & ADD TO FOLDERS
		foreach ($_FILES["ulfiles"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$tmp_name = $_FILES["ulfiles"]["tmp_name"][$key];
				$name = $_FILES["ulfiles"]["name"][$key];
				// set dept folder here
				$dept_path = $dept;
				// set type folder here
				$type_path = $type;
				$path = $_SERVER['DOCUMENT_ROOT']."/uploads/".$dept."/".$type."/";				
				$uploadfile= $path.$name;
				if (move_uploaded_file($tmp_name, $uploadfile)) {
					echo "File ".$name." is valid, and was successfully uploaded.\n";
				} else {
					echo "Cannot upload ".$name."!\n";
				}
			}
		}

		for ($x=0; $x<6; $x++){
			echo "<br>File ",$x+1,":", $_FILES["ulfiles"]["name"][$x];
		}
		
		// echo $timestampt, " ", $school , " ",$dept , " ",$topic;
		
		// Add to table ''
		$sql = "INSERT INTO project_report (timestampt, school, dept, type, role, topic, date, hours, venue, organizer, objective, participant, owner, uid, summary, application, file1, file2, file3, file4, file5, file6)
		VALUES ('John', 'Doe', 'john@example.com')";
		
		
	} else {
		include 'project-report.html.php';
	}
	
	
}

//include $_SERVER['DOCUMENT_ROOT'].'/git/msmeApps/inc/footer.inc.html.php';

?>