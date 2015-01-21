<?php include_once $_SERVER['DOCUMENT_ROOT'].'/git/msmeERP/inc/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Project Summary Report</title>
<link rel="stylesheet" href="https://ssl.gstatic.com/docs/script/css/add-ons.css">
</head>
<body>

<form action="?<?php htmlout($action);?>" method="post">
  <div class="form-group">
    <label for="school">School</label>
    <select name="school" required>
      <option>Martin de Tours School of Management and Economics</option>
    </select>
  </div>
  <div>
  </div>
  <div class="form-group">
    <label for="dept">Department </label>
    <select name="dept" required>
      <option> </option>
      <option>Accounting</option>
      <option>Business Economics</option>
      <option>Business Information Systems</option>
      <option>Commerce</option>
      <option>Finance and Banking</option>
      <option>Hospitality and Tourism Management</option>
      <option>Industrial Management</option>
      <option>Insurance</option>
      <option>International Business Management</option>
      <option>Management</option>
      <option>Marketing</option>
      <option>Real Estate</option>
      <option>Ph.D. in Business Administration Program</option>
      <option>M.Sc. in Financial Economics</option>
      <option>M.Sc. in Supply Chain Management</option>
    </select>
  </div>
  <div class="form-group">
    <label for="type">Type of the event</label>
    <select name="type" required>
        <option> - - - - - - </option>
        <option>Professional Development</option>
        <option>Academic Service</option>
        <option>Social Service</option>
        <option>University Service</option>
        <option>Functions</option>
    </select>
  </div>
  <div class="form-group">
    <label for="topic">Topic of the event *</label>
    <input type="text" name="topic" id="topic" placeholder="Topic of the event ..." style="width: 250px;" required>
  </div>
  <div class="form-group">
    <label for="date">Date *</label>
    <input type="date" name="date" id="date"  placeholder="e.g., 2000-01-01"  required />
  </div>
  <div class="form-group">
    <label for="hours">Total hours</label>
    <input type="number" name="hours" placeholder="e.g., 4.0 or 6.5" required />
  </div>
  <div class="form-group">
    <label for="venue">Venue *</label>
    <input type="text" name="venue" id="venue" placeholder="Venue of the event ..."  required>
  </div>
  <div class="form-group">
    <label for="organizer">Organizer *</label>
    <input type="text" name="organizer" id="organizer" placeholder="Organized by ..."  required>
  </div>
  <div class="form-group">
    <label for="obj">Objectives *</label>
    <textarea name ="objective" id ="objective" row="6" cols="50" placeholder="Objectives of the event ..."  required></textarea>
  </div>
  <div class="form-group">
    <label for="participant">Participants</label>
    <textarea name ="participant" row="6" cols="50" placeholder="A list of participant(s)"></textarea>
  </div>
  <div class="form-group">
    <label for="owner">Prepared by *</label>
    <input type="text" name="owner" id="owner" placeholder="Prepared by [name]" readonly required />
  </div>
  <div class="form-group">
    <label for="summary">Summary *</label>
    <textarea name ="summary" row="6" cols="50" placeholder="Summary of content learned from the event" ></textarea>
  </div>
  <div class="form-group">
    <label for="application">Application to T&L *</label>
    <textarea name ="application" id ="application" row="6" cols="50" placeholder="Applied to Teaching and Learning (any T&L or any BIS subjects related to the event)" required ></textarea>
  </div>
  <div class="form-group">
    <label for="files">Support Documents, e.g., invitation letter, registration confirmation, photos *<br/><span class="current">Please "zip" the files if you have more than one documents</span>.</label>
     <!-- File input filed -->
	<input type="file" name="myFile" id="myFile" required />
  </div>

  <input type="submit">
</form>

</body>
</html>