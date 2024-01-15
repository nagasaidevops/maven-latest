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
  <h1>Create Industry </h1>
  <ol class="breadcrumb">
	<li><a href="index.php">Dashboard</a></li>
	<li><i class="fa fa-angle-right"></i> Create Task</li>
  </ol>
</div>

<!-- Main content -->
<div class="content"> 
 <div class="col-lg-12"> 
  <!-- Main row -->
<div class="content">
  <div class="info-box">
	<!-- <h4 class="text-black">Add Accounts</h4> -->
	<div class="row">
	 
		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Name</label>
			  <input id="name" class="form-control" placeholder="Name" type="text">
			</fieldset>
		</div>
		
		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Description</label>
			  <input id="name" class="form-control" placeholder="Name" type="text">
			</fieldset>
		</div>
		
		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Task Type</label>
			  <select id="task_type" class="form-control" >
					<option>Select</option>
					<option>Follow Up</option>
					<option>Remainder</option>
			  </select>
			</fieldset>
		</div>
		
		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Due Date</label>
			  <input id="date" class="form-control" placeholder="20-10-2024" type="date">
			</fieldset>
		</div>
		
		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Due Time</label>
			  <input id="time" class="form-control" placeholder="20-10-2024" type="time">
			</fieldset>
		</div>
		
		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label>Outcome</label>
			  <select id="task_type" class="form-control" >
					<option>Select</option>
					<option>Interested</option>
					<option>No response</option>
					<option>No Interest</option>
					<option>No able to reach</option>
			  </select>
			</fieldset>
		</div>
		
		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Owner</label>
			  <select id="task_type" class="form-control" >
					<option>Select</option>	
					<option>Sahith</option>
					<option>Chetan</option>
			  </select>
			</fieldset>
		</div>

		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Related To</label>
			  <input id="time" class="form-control" placeholder="20-10-2024" type="Realted To">
			</fieldset>
		</div>

		<div class="col-lg-3">
			<fieldset class="form-group">
			  <label> Collabaration</label>
			  <input id="time" class="form-control" placeholder="20-10-2024" type="Collaboration">
			</fieldset>
		</div>

		

	</div>
	<div class="row" style="padding-top:10px;">
		
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