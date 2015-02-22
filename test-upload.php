<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project Summary Report</title>
<script>

</script>
<div class="container">
<form  enctype="multipart/form-data" action="test-upload.php" method="post">
  <div class="form-group">
    <label for="topic">Topic of the event *</label>
    <input type="text" name="topic" id="topic" placeholder="Topic of the event ..." style="width: 250px;" required>
  </div>
  <div class="form-group">
    <label for="files">Support Documents, e.g., invitation letter, registration confirmation, photos *<br/>
	<span class="current">Please "zip" the files if you have more than one documents.</span></label><br />
    <!-- input files -->
	<input name="ulfiles[]" type="file" id="ulfiles[]" size="50 "/><br />
	<input name="ulfiles[]" type="file" id="ulfiles[]" size="50 "/><br />
	<input name="ulfiles[]" type="file" id="ulfiles[]" size="50 "/><br />
	<input name="ulfiles[]" type="file" id="ulfiles[]" size="50 "/><br />
	<input name="ulfiles[]" type="file" id="ulfiles[]" size="50 "/><br />
	<input name="ulfiles[]" type="file" id="ulfiles[]" size="50 "/>
  </div>

  <input type="submit">
  

</form>
</div>

<?php
	if(isset($_POST['topic'])) {
		foreach ($_FILES["ulfiles"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$tmp_name = $_FILES["ulfiles"]["tmp_name"][$key];
				$name = $_FILES["ulfiles"]["name"][$key];
				$path = $_SERVER['DOCUMENT_ROOT']."/uploads/";
				echo $uploadfile= $path.$name;
				if (move_uploaded_file($tmp_name, $uploadfile)) {
					echo "File is valid, and was successfully uploaded.\n";
				} else {
					echo "Cannot upload the file!\n";
				}
			}
		}
	}
	
	/*
	if(isset($_FILES['ulfiles']['name'][0]) && !empty($_FILES['ulfiles']['name'][0])) {
		// set paths
		$path = $_SERVER['DOCUMENT_ROOT']."/uploads/";
		echo $path1= $path.basename($_FILES['ulfiles']['name'][0]);
		if (move_uploaded_file($_FILES['ulfiles']['tmp_name'], "$path1")) {
			echo "File is valid, and was successfully uploaded.\n";
		} else {
			echo "Cannot upload the file!\n";
		}
		
	}
	*/

?>