<?php		
			session_start();
			include('connection.php');
			error_reporting(0);
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
?>

<?php include 'deleteUpdateStaff.php' ?>

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
	<script>
	$('document').ready(function() {
    $('#success-message').delay(3000).fadeOut();
	});
	</script>
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
    <li  class="active"><a href="UserManagement.php"><i class="icon icon-inbox"></i> <span>Manage User</span></a> </li>
	<li><a href="Manage_LeavesHolidays.php"><i class="icon icon-calendar"></i> <span>Manage Leaves & Holidays</span></a> </li>
	<li><a href="ManageHistory.php"><i class="icon icon-list-alt"></i> <span>Task History</span></a> </li>
	<li><a href="profile.php"><i class="icon icon-user"></i> <span>My Profile</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Manage User</a> </div>
    <h1>Manage User</h1>
	
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
			if(isset($_POST['action'])=='Edit')
			{ 
				$staffid =$_POST['staffid'];
				$query1=mysqli_query($con, "select * from staff where staffid='$staffid' ")or die(mysqli_error());
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
				$status=$row1['status'];
				$username=$row1['username'];
				$password=$row1['password'];
				$project=$row1['project'];
				$power=$row1['power'];
				
				}
			?>
			
			<?php include 'editStaff.php'?>
			
			<?php 
			}			
			else
			{
			
			?>
	
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Task List</h5>
			<?php include 'addStaff.php'?>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                <th>Staff Id</th>
				<th>Name</th>
				<th>Employment ID</th>
				<th>D.O.B</th>
				<th>D.O.J</th>
				<th>Email Id</th>
				<th>Contact No</th>
				<th>Address</th>
				<th>Desigination</th>
				<th>Status</th>
				<th>User Name</th>
				<th>Password</th>
				<th>Manage</th>
                </tr>
              </thead>
				<tbody>
				<?php 
				$query=mysqli_query($con , "select * from staff")or die(mysqli_error());
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
					<td><?php echo $row['staffid']; ?></td>
					<td><?php echo $row['fullname']; ?></td>
					<td><?php echo $row['employment_id']; ?></td>
					<td><?php echo $row['dob']; ?></td>
					<td><?php echo $row['doj']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contactno']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['project']." ".$row['position']; ?></td>
					<td><span class ="badge 
					<?php 
					if($row['status'] == 'Active'){echo 'badge-success';}
				
					else if($row['status'] == 'InActive'){echo 'badge-important';}?>">
					<?php echo $row['status']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><center>
					<div class="btn-group btn-group-sm">
						<form action="UserManagement.php" method="post" name="editcust">
							<input type="hidden" value="Edit" name="action">
							<input type="hidden" value="<?php echo $row['staffid'];?>" name="staffid">
							<button name="submit" type="submit" value="edit" class="btn btn-info btn-sm " style="width:35px;"><span class="icon icon-edit"></button>
						</form>
					</div><hr style="margin:3px;">
					<div class="btn-group btn-group-sm">
						<form action="UserManagement.php" method="post" name="delcust">
							<input type="hidden" value="Delete" name="action">
							<input type="hidden" value="<?php echo $row['staffid'];?>" name="staffid">
							<button name="submit" type="submit" value="DELETE" class="btn btn-danger btn-sm " style="width:35px;"
							<?php 
							$logg=$_SESSION['staffid'];
							$qq=mysqli_query($con , "select * from staff where staffid=$logg")or die(mysqli_error());
							while($row12=mysqli_fetch_array($qq)){
							if($row['position']=='Ceo' && $row12['position']!='Ceo' ){ echo 'disabled'; } }?>
							><span class="icon icon-remove"></span></button>
						</form>
					</div>
					</center></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<?php } ?>
          </div>
        </div>
		
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
