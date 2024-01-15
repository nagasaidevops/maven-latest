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
  <h1>Create Oppurtunity </h1>
  <ol class="breadcrumb">
	<li><a href="index.php">Dashboard</a></li>
	<li><i class="fa fa-angle-right"></i> Create Oppurtunity</li>
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
			  <label>Oppurtunity Name</label>
			  <input id="o_name" class="form-control" placeholder="Name" type="text">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Oppurtunity Value</label>
			  <input id="value" class="form-control" placeholder="Value" type="number">
			</fieldset>
		</div>	
	
		<div class="col-lg-4">
			<label>Account Name</label>
			<select class="form-control" id="account_name">
				<option>Select</option>
				<option>Sahith</option>
				<option>Chetan</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<label>Related Contact</label>
			<select class="form-control" id="related_contact">
				<option>Select  </option>
				<option>Alexander</option>
			</select>
	    </div>

		<div class="col-lg-4">
				<label>Oppurtunity Stage</label>
			<select class="form-control" id="stage" onchange="myFunction()">
				<option>Select</option>
				<option>Decision Makers</option>
				<option>Demonstration</option>
				<option>Proposal</option>
				<option>Negotiation</option>
				<option>Verbal</option>
				<option>Win</option>
				<option value="lost">Lost</option>
			</select>
		</div>

		<div class="col-lg-4">
			<label>Oppurtunity Owner</label>
			<select class="form-control" id="owner">
				<option>Select </option>
				<option>Sahith</option>
				<option>Chetan</option>
			</select>
		</div>
		
		<div class="col-lg-4">
			<label>Source</label>
			<select class="form-control" id="business">
				<option>Select </option>
				<option>Website</option>
				<option>Social Media</option>
				<option>Telemarketing</option>
				<option>Events</option>
			</select>
	    </div>
		
		<div class="col-lg-4">
			<label>Campaign</label>
			<select class="form-control" id="business">
				<option>Select </option>
				<option>m65</option>
				<option>ITSM Services</option>
				<option>RWaaS</option>
				<option>AWS</option>
				<option>Offshore</option>
			</select>
	    </div>
		
		<div class="col-lg-4">
			<label>Oppurtunity Type</label>
			<select class="form-control" id="business">
				<option>Select </option>
				<option>New Business</option>
				<option>Existed Business</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<label>ISR </label>
			<select class="form-control" id="isr">
				<option>Select </option>
				<option>Ramya Deepthi</option>
				<option>Varsha</option>
				<option>Joysree</option>
				<option>Smad</option>
			</select>
		</div>
	 
		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Next Step</label>
			  <input id="next_step" class="form-control" placeholder="Next Step" type="text">
			</fieldset>
		</div>
	 
		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Closed Date</label>
			  <input id="closed_date" class="form-control" placeholder="Closed Date" type="date">
			</fieldset>
		</div>
	 
		<div class="col-lg-4" style="display:none" id="reason_area">
			<fieldset class="form-group">
			  <label>Reason</label>
			  <textarea id="reason" class="form-control" placeholder="Reason" ></textarea>
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
	var x = document.getElementById("stage").value;
	console.log(x,'x');
	if(x=="lost"){
		document.getElementById("reason_area").style.display = "block";
	}else{
		document.getElementById("reason_area").style.display = "none";
	}
}
</script>
</body>
</html>
