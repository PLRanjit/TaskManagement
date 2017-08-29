<?php		
			session_start();
			include('connection.php');
			error_reporting(0);
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
?>
<?php include 'maintainNotes.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Task Mgmt Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">Task Mgmt Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php include 'headerProfile.php' ?>

<!--start-top-serch-->
<div id="search">
	<a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Admin</a>
  <ul>
    <li class="active"><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="TaskManagement.php"><i class="icon icon-signal"></i> <span>Manage Task</span></a> </li>
    <li><a href="UserManagement.php"><i class="icon icon-inbox"></i> <span>Manage User</span></a> </li>
	<li><a href="Manage_LeavesHolidays.php"><i class="icon icon-calendar"></i> <span>Manage Leaves & Holidays</span></a> </li>
	<li><a href="ManageHistory.php"><i class="icon icon-list-alt"></i> <span>Task History</span></a> </li>
	<li><a href="profile.php"><i class="icon icon-user"></i> <span>My Profile</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
	
    <div class="container-fluid">
	
		<div class="quick-actions_homepage">
		  <ul class="quick-actions">
			<li class="bg_lb"> <a href="dashboard.php"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
			<li class="bg_lg span3"> <a href="TaskManagement.php"> <i class="icon-th-list"></i> Manage Task</a> </li>
			<li class="bg_ly"> <a href="UserManagement.php"> <i class="icon-pencil"></i> Manage User </a> </li>
			<li class="bg_ls"> <a href="Manage_LeavesHolidays.php"> <i class="icon-calendar"></i> Manage Leaves & Holidays </a> </li>
			<li class="bg_lo span3" > <a href="#Crow"> <i class="icon-bar-chart"></i> Leaves & Daily Task Report</a> </li>
		  </ul>
		</div>

			<div class="row-fluid">
			<hr>
				<?php
				if(isset($error)){
					
					echo '<div class="alert alert-success alert-dismissible" role="alert" id="success-message">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
					<strong>Success! </strong>';
					echo $error;
					echo '</div>';
					
				}
					else if(isset($error1))
				{
					$error="can't delete task";
					echo '<div class="alert alert-warning alert-dismissible" role="alert" id="success-message">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
					<strong>Warning! </strong>';
					echo $error1;
					echo '</div>';
				}
				?>
				
				<?php include 'MainNotes.php'?>
			
			  <div class="widget-box">
				<div class="widget-title bg_lg" id="modal-Total-Project"><span class="icon"><i class="icon-signal"></i></span>
				  <h5>Site Analytics</h5>
				</div>
				<div class="widget-content collapse in" id="collapseG6">
				  <div class="row-fluid">
					<div class="span9">
					  <div><?php include 'efficiencyOfProject.php' ?></div>
					</div><br>
					<?php 
					$pending=mysqli_query($con,"SELECT * FROM task WHERE status != 'Completed'")or die(mysqli_error());
					$allTask=mysqli_query($con,"SELECT * FROM task")or die(mysqli_error());
					$totuser=mysqli_query($con,"SELECT * FROM staff")or die(mysqli_error());
					$totproject=mysqli_query($con,"SELECT * FROM task group by project_name")or die(mysqli_error());
					?>
					<div class="span3">
					  <ul class="site-stats">
						<li class="bg_lh"><a href="#modal-No-Of-Employee" style="color: #ffffff;"><i class="icon-user"></i> <strong><?php echo mysqli_num_rows($totuser); ?></strong> <small>No of Employees</small></a></li>
						
						<li class="bg_lh"><a href="#modal-Total-Project" style="color: #ffffff;"><i class="icon-shopping-cart"></i> <strong><?php echo mysqli_num_rows($totproject); ?></strong> <small>Total Project</small></a></li>
						<li class="bg_lh"><a href="TaskManagement.php?tab=incomplete" style="color: #ffffff;"><i class="icon-repeat"></i> <strong><?php echo mysqli_num_rows($pending); ?></strong> <small>In Complete Tasks</small></a></li>
						<li class="bg_lh"><a href="TaskManagement.php" style="color: #ffffff;"><i class="icon-tag"></i> <strong><?php echo mysqli_num_rows($allTask); ?></strong> <small>Total Task</small></a></li>
						
						<li class="bg_lh" style="width:230px;"><?php include 'projectTask.php' ?></li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			</div>

			<hr>
			<div id="Crow">
			
			<div class="row-fluid">
				<div class="span6">
					<?php include 'notifyLeave.php'?>
				</div>
				<div class="span6">
					<?php include 'ToDoListIndividual.php'?>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span6">
					<?php include 'TaskOccurOnHolidays.php'?>
				</div>
				<div class="span6">
					<?php include 'ToDoList.php'?>
					
				</div>
			</div>
			</div>
			<hr>
			<div class="row-fluid">
			  <div class="span12">
				<?php include 'dashcheck.php'?>
			  </div>
			</div>
  </div>
</div>
<!--Footer-part-->
<?php include 'Footer.php'?>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
