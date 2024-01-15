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
  <h1>View Oppurtunity </h1>
  <ol class="breadcrumb">
	<li><a href="index.php">Dashboard</a></li>
	<li><i class="fa fa-angle-right"></i> View Oppurtunity</li>
  </ol>
</div>

<!-- Main content -->
<div class="content">
  <div class="info-box">
  <!-- <h4 class="text-black"> All Accounts</h4> -->
  <p>Export data to Copy, CSV, Excel, PDF & Print</p>
  <div class="table-responsive"><!-- example1 -->
	  <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
		<thead>
		  <tr>
			<th>ID #</th>
			<th>Oppurtunity Name</th>
			<th>Oppurtunity Value</th>
			<th>Oppurtunity Stage</th>
			<th>Oppurtunity Owner</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>1</td>
			<td>Infosys</td>
			<td>20,00,000</td>
			<td>Proposal</td>
			<td>Sahith</td>
		  </tr>
		  <tr>
			<td>2</td>
			<td>Tata communications</td>
			<td>40,00,000</td>
			<td>Verbal</td>
			<td>Chetan</td>
		  </tr>
		  
		</tbody>
		<tfoot>
		  <tr>
			<th>ID #</th>
			<th>Oppurtunity Name</th>
			<th>Oppurtunity Value</th>
			<th>Oppurtunity Stage</th>
			<th>Oppurtunity Owner</th>
		  </tr>
		</tfoot>
	  </table>
	</div>
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
