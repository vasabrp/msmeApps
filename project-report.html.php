
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project Summary Report</title>
<script>
$(document).ready(function(){
    $('.add_more').click(function(e){
        e.preventDefault();
        $(this).before("<input name='files[]' type='file'/>");
    });
});
</script>
<div class="container">
<form  enctype="multipart/form-data" action="project-report.php" method="post">
  <div class="form-group">
    <label for="school">School</label>
    <select name="school" required>
      <option>Martin de Tours School of Management and Economics</option>
    </select>
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
    <label for="objective">Objectives *</label>
    <textarea name ="objective" id ="objective" row="6" cols="50" placeholder="Objectives of the event ..."  required></textarea>
  </div>
  <div class="form-group">
    <label for="participant">Participants</label>
	<font color="red">list check box, and allow user to add participant</font>
    <textarea name ="participant" row="6" cols="50" placeholder="A list of participant(s)"></textarea>
  </div>
  <div class="form-group">
    <label for="owner">Prepared by *</label>
    <input type="text" name="owner" id="owner" placeholder="Prepared by [name]" readonly required />
  </div>
  <div class="form-group">
    <label for="id">User ID *</label>
    <input type="text" name="id" id="id" placeholder="Prepared by [ID]" readonly required />
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
    <label for="files">Support Documents, e.g., invitation letter, registration confirmation, photos *<br/>
	<span class="current">Please "zip" the files if you have more than one documents.</span></label><br />
    <!-- input files -->
	<input name="files[]" type="file" /><br />
	<input name="files[]" type="file" /><br />
	<button class="add_more">Add More Files</button>	
  </div>

  <input type="submit">
</form>
</div>