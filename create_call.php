<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('includes/header_links.php');
?>
</head>
<body class="sidebar-mini sidebar-collapse">
<div class="wrapper boxed-wrapper">
<?php
include('includes/header.php');
include('includes/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
<!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1>Create Call </h1>
  <ol class="breadcrumb">
	<li><a href="index.php">Dashboard</a></li>
	<li><i class="fa fa-angle-right"></i> Create Call</li>
  </ol>
</div>

<!-- Main content -->
<div class="content"> 
  
  <!-- Main row -->
<div class="content">
  <div class="info-box">
	<!-- <h4 class="text-black">Add Accounts</h4> -->
	<div class="row">
	 
		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Call Type</label>
			  <input id="o_name" class="form-control" placeholder="Name" type="text">
			</fieldset>
		</div>
	
		<div class="col-lg-4">
			<label>Call Outcome</label>
			<select class="form-control" id="call_outccome" onchange="myFunction()">
				<option>Select  </option>
				<option>Left Voice message</option>
				<option>Not right person</option>
				<option value="schedule">Meeting Schedule</option>
				<option value="connect">Connect</option>
			</select>
	    </div>
		
		<div class="col-lg-4" style="display:none" id="meeting_schedule">
			<fieldset class="form-group">
			  <label> Date</label>
			  <input id="schedule_date" class="form-control" value="<?php echo date("Y/m/d"); ?>" type="date">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<label>Related Contact</label>
			<select class="form-control" id="related_contact">
				<option>Select  </option>
				<option>Alexander</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<label>Related Account</label>
			<select class="form-control" id="related_contact">
				<option>Select  </option>
				<option>Alexander</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label> Date</label>
			  <input id="date" class="form-control" value="<?php echo date("Y/m/d"); ?>" readonly type="text">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label> TIme</label>
			  <input id="time" class="form-control" value="<?php date_default_timezone_set('Asia/Kolkata'); echo date('H:i'); ?>" readonly type="text">
			</fieldset>
		</div>
	 
		<div class="col-lg-4" style="display:none" id="reason_area">
			<fieldset class="form-group">
			  <label>Description</label>
			  <textarea id="reason" class="form-control" placeholder="Description" ></textarea>
			</fieldset>
		</div>
		

	</div>
	<div class="row" style="padding-top:10px;">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<fieldset class="form-group">
				<input id="btn btn-primary" class="form-control label-primary" placeholder="Annual Revenue" type="button" value="SAVE">
			</fieldset>
		</div>
	</div>
	
	
	
	
	<!-- <hr class="m-t-3 m-b-3"> -->
	
  </div>
  <!-- Main row --> 
</div>

</div>
<!-- /.content --> 
</div>
<!-- /.content-wrapper -->
<?php
include('includes/footer.php'); 
?>
</div>
<!-- ./wrapper --> 

<?php
include('includes/footer_links.php'); 
?>
<script>
function myFunction(){
	var x = document.getElementById("call_outccome").value;
	console.log(x,'x');
	if(x=="connect"){
		document.getElementById("reason_area").style.display = "block";
	}else{
		document.getElementById("reason_area").style.display = "none";
	}
	
	if(x=="schedule"){
		document.getElementById("meeting_schedule").style.display = "block";
	}else{
		document.getElementById("meeting_schedule").style.display = "none";
	}
}
</script>
</body>
</html>
