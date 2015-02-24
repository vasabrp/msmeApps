<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project Summary Report</title>
<script>

// dynamically generate 
var academicRole ="";
academicRole += '<select name="role" id="role" required>';
academicRole += '<option value="organizer">organizer</option>';
academicRole += '<option value="speaker">speaker</option>';
academicRole += '<option value="participant">participant</option>';
academicRole += '</select>';

var cultureRole ="";
cultureRole += '<select name="role" id="role" required>';
cultureRole += '<option value="organizer">organizer</option>';
cultureRole += '<option value="participant">participant</option>';
cultureRole += '</select>';

function addRole() {
//var role = val;
var type = document.getElementById('type').value;
	if(type=='academic' || type=='pdAU' || type=='pdOther'){
		document.getElementById('roleDiv').innerHTML = academicRole;
	} else if(type=='art'){
		document.getElementById('roleDiv').innerHTML = cultureRole;
	}
};
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
    <select name="dept" name="dept"  onchange="getFacultyList();" required>
      <option> </option>
      <option value='acct'>Accounting</option>
      <option value='be'>Business Economics</option>
      <option value='bis'>Business Information Systems</option>
      <option value='acc'>Commerce</option>
      <option value='fin'>Finance and Banking</option>
      <option value='htm'>Hospitality and Tourism Management</option>
      <option value='idm'>Industrial Management</option>
      <option value='ins'>Insurance</option>
      <option value='ibm'>International Business Management</option>
      <option value='mgt'>Management</option>
      <option value='mkt'>Marketing</option>
      <option value='real'>Real Estate</option>
      <option value='phdba'>Ph.D. in Business Administration Program</option>
      <option value='msfe'>M.Sc. in Financial Economics</option>
      <option value='msscm'>M.Sc. in Supply Chain Management</option>
    </select>
  </div>
  <div class="form-group">
    <label for="type">Type of the event</label>
    <select name="type" id="type" onchange="addRole();" required>
        <option> - - - - - - </option>
        <option value='academic'>Academic service</option>
        <option value='art'>Art and culture project</option>
        <option value='pdAU'>Professional development by AU</option>
        <option value='pdOther'>Professional development by other organizations</option>
    </select>
  </div>
  <div class="form-group">
    <label for="role">Role</label>
	<div id='roleDiv'></div>

  </div>
  <div class="form-group">
    <label for="topic">Topic of the event *</label>
    <input type="text" name="topic" id="topic" placeholder="Topic of the event ..." style="width: 250px;" required>
  </div>
  <div class="form-group">
    <label for="date">Date *</label>
    <input type="date" name="date" id="date"  placeholder="e.g., 2000-01-01"   />
  </div>
  <div class="form-group">
    <label for="hours">Total hours</label>
    <input type="number" name="hours" placeholder="e.g., 4.0 or 6.5"  />
  </div>
  <div class="form-group">
    <label for="venue">Venue *</label>
    <input type="text" name="venue" id="venue" placeholder="Venue of the event ..."  >
  </div>
  <div class="form-group">
    <label for="organizer">Organizer *</label>
    <input type="text" name="organizer" id="organizer" placeholder="Organized by ..."  >
  </div>
  <div class="form-group">
    <label for="objective">Objectives *</label>
    <textarea name ="objective" id ="objective" row="6" cols="50" placeholder="Objectives of the event ..."  ></textarea>
  </div>
  <div class="form-group">
	
  ** H E R E **
	show 2 list (dept) and (all)
	allow to add list item
	http://stackoverflow.com/questions/17773938/add-a-list-item-through-javascript
	http://jsfiddle.net/Gmyag/
	
    <label for="participant">Participants</label>
	<font color="red">list check box, and allow user to add participant</font>
    <textarea name ="participant" row="6" cols="50" placeholder="A list of participant(s)"></textarea>
  </div>
  <div class="form-group">
    <label for="owner">Prepared by *</label>
    <input type="text" name="owner" id="owner" placeholder="Prepared by [name]" readonly  />
  </div>
  <div class="form-group">
    <label for="id">User ID *</label>
    <input type="text" name="id" id="id" placeholder="Prepared by [ID]" readonly  />
  </div>
  <div class="form-group">
    <label for="summary">Summary *</label>
    <textarea name ="summary" row="6" cols="50" placeholder="Summary of content learned from the event" ></textarea>
  </div>
  <div class="form-group">
    <label for="application">Application to T&L *</label>
    <textarea name ="application" id ="application" row="6" cols="50" placeholder="Applied to Teaching and Learning (any T&L or any BIS subjects related to the event)"  ></textarea>
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