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
  <h1>Create Accounts </h1>
  <ol class="breadcrumb">
	<li><a href="index.php">Dashboard</a></li>
	<li><i class="fa fa-angle-right"></i> Create Accounts</li>
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
			  <label>Account Name</label>
			  <input id="name" class="form-control" placeholder="Name" type="text">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Phone Number</label>
			  <input id="phone" class="form-control" placeholder="Phone Number" type="number">
			</fieldset>
		</div>		
		<div class="col-lg-4">
			<label>Industry Type</label>
			<select class="form-control" id="industry">
				<option>Select Industry Type</option>
				<option>Accounting</option>
				<option>Advertising</option>
			</select>
	    </div>
		<div class="col-lg-4">
			<label>Business Type</label>
			<select class="form-control" id="business">
				<option>Select Business Type</option>
				<option>Compitetor</option>
				<option>Customer</option>
			</select>
	    </div>
		<!-- <div class="col-lg-4">
	    			<label>No Of Employees</label>
	    			<select class="form-control" id="emp">
	    				<option>1 - 10 </option>
	    				<option>11 - 50</option>
	    				<option>51 - 200</option>
	    				<option>201 - 500</option>
	    				<option>501 - 1000</option>
	    			</select>
	    </div> -->
		<!-- <div class="col-lg-4">
			<fieldset class="form-group">
				<label>Revenue</label>
				<input id="revenue" class="form-control" placeholder="Revenue" type="number">
			</fieldset>
		</div> -->
		<div class="col-lg-4">
			<fieldset class="form-group">
				<label>Employee Count</label>
				<input id="emp_count" class="form-control" placeholder="Employee Count" type="number">
			</fieldset>
		</div>
		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Alternate Phone Number</label>
			  <input id="phone2" class="form-control" placeholder="Alternate Phone Number" type="number">
			</fieldset>
		</div>
		<div class="col-lg-4">
			<fieldset class="form-group">
				<label>Annual Revenue</label>
				<input id="annual_revenue" class="form-control" placeholder="Annual Revenue" type="number">
			</fieldset>
		</div>
		<div class="col-lg-4">
			<fieldset class="form-group">
				<label>Website URL</label>
				<input id="web_url" class="form-control" placeholder="Website URL" type="text">
			</fieldset>
		</div>
		<div class="col-lg-4">
			<label>Sales Owner</label>
			<select class="form-control" id="sales_owner">
				<option>Select Sales Owner</option>
				<option>Sahith</option>
				<option>Chetan</option>
			</select>
	    </div>
		<div class="col-lg-4">
			<label>LinkedIn </label>
			<input id="linkedin" class="form-control" placeholder="Linkedin" type="text">
	    </div>
		<div class="col-lg-4">
			<label>Head Quaters Location </label>
			<input id="location" class="form-control" placeholder="Head Quaters Location" type="text">
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
</body>
</html>
