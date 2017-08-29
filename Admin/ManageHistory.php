<?php		
			session_start();
			include('connection.php');
			error_reporting(0);
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
?>

<?php include 'updateProfile.php'?>

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
  <h1><a href="dashboard.html">Task Mgmt Admin</a></h1>
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
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="TaskManagement.php"><i class="icon icon-signal"></i> <span>Manage Task</span></a> </li>
    <li><a href="UserManagement.php"><i class="icon icon-inbox"></i> <span>Manage User</span></a> </li>
	<li><a href="Manage_LeavesHolidays.php"><i class="icon icon-calendar"></i> <span>Manage Leaves & Holidays</span></a> </li>
	<li class="active"><a href="ManageHistory.php"><i class="icon icon-list-alt"></i> <span>Task History</span></a> </li>
	<li><a href="profile.php"><i class="icon icon-user"></i> <span>My Profile</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Task History</a> </div>
    <h1>History</h1>
	
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
			<?php include 'history.php'?>
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
