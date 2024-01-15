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
  <h1>View Accounts </h1>
  <ol class="breadcrumb">
	<li><a href="index.php">Dashboard</a></li>
	<li><i class="fa fa-angle-right"></i> View Accounts</li>
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
			<th>Business Name</th>
			<th>Created Date</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>1001</td>
			<td>Compitetor</td>
			<td>03-10-2017</td>
		  </tr>
		 <tr>
			<td>1001</td>
			<td>Customer</td>
			<td>03-10-2017</td>
		  </tr>
		  <tr>
			<td>1001</td>
			<td>Perspective</td>
			<td>03-10-2017</td>
		  </tr>
		</tbody>
		<tfoot>
		  <tr>
			<th>ID #</th>
			<th>Business Name</th>
			<th>Created Date</th>
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
