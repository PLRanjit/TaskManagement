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
<title>GreyCells Employee</title>
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
  <h1><a href="dashboard.html">GreyCells Employee</a></h1>
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

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Employee</a>
  <ul>
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="TaskManagement.php"><i class="icon icon-signal"></i> <span>Manage Task</span></a> </li>
	<li class="active"><a href="profile.php"><i class="icon icon-user"></i> <span>My Profile</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">My Profile</a> </div>
    <h1>My Profile</h1>
	
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
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
			<?php
				$staffid = $_SESSION['staffid'];
				$query1=mysqli_query($con ,"select * from staff where staffid=109 ")or die(mysqli_error());
				while($row1=mysqli_fetch_array($query1)){
				
				$staffid=$row1['staffid'];
				$fullname=$row1['fullname'];
				$employment_id=$row1['employment_id']; 
				$dob=$row1['dob'];
				$doj=$row1['doj'];
				$email=$row1['email'];
				$contactno=$row1['contactno'];
				$address=$row1['address'];
				$position=$row1['position'];
				$username=$row1['username'];
				$password=$row1['password'];
				
				}
				?>
			<?php include 'myprofile.php' ?>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 1995 &copy; Grey Cells Employee. Brought to you by <a href="http://www.greycellsindia.com">greycellsindia.com</a> </div>
</div>
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
