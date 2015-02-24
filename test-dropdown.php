<header>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>

function dynamic_Select(ajax_page, country) {
	$.ajax({
	type: "GET",
	url: ajax_page,
	data: "ch=" + country,
	dataType: "html",
	success: function(html){       $("#txtResult").html(html);     }
	}); 
}


function getFacultyList(ajax_page, department) {
	$.ajax({
	type: "GET",
	url: ajax_page,
	data: "dept=" + department,
	dataType: "html",
	success: function(html){       $("#facultyList").html(html);     }
	}); 
}
</script>
</header>

<form method="post">
<select name="country" onchange="dynamic_Select('city.php', this.value)" />
<option value="#">-Select-</option>
<option value="India">India</option>
<option value="USA">USA</option>
</select>

<div id="txtResult">
<select name="cityList">
<option></option>
</select>
</div>
</form>

<form method="post">
<select name="dept" onchange="getFacultyList('faculty.php', this.value)" />
<option value="#">-Select-</option>
<option value='acct'>Accounting</option>
<option value='be'>Business Economics</option>
<option value='bis'>Business Information Systems</option>
</select>

<div id="facultyList">
<select name="instructor">
<option></option>
</select>
</div>
</form>
