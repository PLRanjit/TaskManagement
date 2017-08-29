<?php		
			session_start();
			include('connection.php');
			error_reporting(0);
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
?>

<?php

			if($_POST['action']=='delete')
			{
			
			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$query=mysql_query("DELETE from task where id=$id and date=$date ");
			if($query){
				$error=" Task Successful Delete";
				header("location: TaskManagement.php");	
			}
				else
			{
			    $error1="can't delete task";
			}
			
			}
			
			/* update data database */
			if($_POST['action']=='Update Task')
			{
			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$sdate= clean($_POST['sdate']);
			$ddate= clean($_POST['ddate']);
			$adate= clean($_POST['adate']);
			$tasktitle= clean($_POST['tasktitle']);
			$project_name= clean($_POST['project_name']);
			$task_desc= clean($_POST['task_desc']);
			$assigned_by= clean($_POST['assigned_by']);
			$assigned_to= clean($_POST['assigned_to']);
			$scheduled_for= clean($_POST['scheduled_for']);
			$status= clean($_POST['status']);
			$priority= clean($_POST['priority']);
			$efficiency= clean($_POST['efficiency']);
			
				$queryedit=mysql_query("UPDATE task set id='$id',date='$date',sdate='$sdate',ddate='$ddate',adate='$adate',tasktitle='$tasktitle',project_name='$project_name',task_desc='$task_desc',assigned_by='$assigned_by',assigned_to='$assigned_to',scheduled_for='$scheduled_for',status='$status',priority='$priority',efficiency='$efficiency' where id=$id and date=$date ") or die(mysql_error());	
					if($queryedit){
						$error=" Task Successful Update";
					}
					else
					{
						$error1="Can't Update Task";
					}
			}
			

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>GreyCells Admin</title>
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
  <h1><a href="dashboard.html">GreyCells Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $_SESSION['staffid'];?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
	<a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Admin</a>
  <ul>
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active"><a href="TaskManagement.php"><i class="icon icon-signal"></i> <span>Manage Task</span></a> </li>
    <li><a href="UserManagement.php"><i class="icon icon-inbox"></i> <span>Manage User</span></a> </li>
	<li><a href="profile.php"><i class="icon icon-user"></i> <span>My Profile</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Manage task</a> </div>
    <h1>Manage Task</h1>
	
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
			$id=$_POST['id'];
			$date=$_POST['date'];
			/* receive data from database */
			$queryupdate=mysql_query("select * from task where id='$id' and date='$date' ")or die(mysql_error());
				while($rowupdate=mysql_fetch_array($queryupdate)){
				
					$id= $rowupdate['id'];
					$date= $rowupdate['date'];
					$sdate= $rowupdate['sdate'];
					$ddate= $rowupdate['ddate'];
					$adate= $rowupdate['adate'];
					$tasktitle= $rowupdate['tasktitle'];
					$project_name= $rowupdate['project_name'];
					$task_desc= $rowupdate['task_desc'];
					$assigned_by= $rowupdate['assigned_by'];
					$assigned_to= $rowupdate['assigned_to'];
					$scheduled_for= $rowupdate['scheduled_for'];
					$status= $rowupdate['status'];
					$priority= $rowupdate['priority'];
					$efficiency= $rowupdate['efficiency'];
				}
				
			?>
			
			<?php include 'validatingEdit.php'?>
			
			<?php 
			}			
			else
			{
			
			?>
	
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Task List</h5>
			<?php include 'addTask.php'?>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table table-scrollable">
              <thead>
                <tr>
                  <th>Task Id</th>
                  <th>Start Date</th>
                  <th>Due Date</th>
                  <th>End Date</th>
				  <th>Task Title</th>
				  <th>Project Name</th>
				  <th>Task Desc</th>
				  <th>Assigned by</th>
				  <th>Assigned to</th>
				  <th>Scheduled_for</th>
				  <th>Status</th>
				  <th>Priority</th>
				  <th>Efficiency</th>
				  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <?php 
				
					$id=$_GET['id'];
					$query=mysql_query("select * from staff where staffid='$id'")or die(mysql_error());
					$result=mysql_fetch_array($query);
					$name=$result['employment_id'];
					$staffid=$result['staffid'];
					$todaydate=date("Y-m-d");
					$today=mysql_query("SELECT * FROM task WHERE sdate <='$todaydate' AND ddate >='$todaydate' AND assigned_to='$name' AND status='In Progress'")or die(mysql_error());	
					while($row=mysql_fetch_array($today)){
					
			?>
				<tr>
					<td><?php echo $row['date'].$row['id']; ?></td>
					<td><?php echo $row['sdate']; ?></td>
					<td><?php echo $row['ddate']; ?></td>
					<td><?php echo $row['adate']; ?></td>
					<td><?php echo $row['tasktitle']; ?></td>
					<td><?php echo $row['project_name']; ?></td>
					<td><?php echo $row['task_desc']; ?></td>
					<td><?php echo $row['assigned_by']; ?></td>
					<td><?php echo $row['assigned_to']; ?></td>
					<td><?php echo $row['scheduled_for']; ?></td>
					<td>
					<span class="date badge 
					<?php 
					if($row['status'] == 'In Progress'){echo 'badge-warning';}
					else if($row['status'] == 'Completed'){echo 'badge-success';} 
					else if($row['status'] == 'Urgent'){echo 'badge-important';}
					else if($row['status'] == 'Approved'){echo 'badge-info';}
					else if($row['status'] == 'Not Approved'){echo 'badge';}?>">
					<?php echo $row['status']; ?></span>
					</td>
					<td><?php echo $row['priority']; ?></td>
					<td>
						<div class="progress progress-mini active">
							<div style="width:<?php echo $row['efficiency']; ?>;" class="bar"></div>
						</div>
						<span class="percent"><?php echo $row['efficiency']; ?></span>
					</td>
					<td><center>
						<div class="btn-group btn-group-sm">
							<form action="TaskManagement.php" method="post" name="editcust">
							<input type="hidden" value="Edit" name="action">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['date'];?>" name="date">
							<button name="submit" type="submit" value="edit" class="btn btn-info btn-sm" style="width:35px;"><span class="icon icon-edit"></button>
							</form>
						</div><hr style="margin:3px;">
						<div class="btn-group btn-group-sm">
							<form action="TaskManagement.php" method="post" name="delcust">
							<input type="hidden" value="delete" name="action">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['date'];?>" name="date">
							<button name="submit" type="submit" value="DELETE" class="btn btn-danger btn-sm"  style="width:35px;"><span class="icon icon-remove"></span></button>
							</form>
						</div>
					</center>
					</td>

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
<div class="row-fluid">
  <div id="footer" class="span12"> 1995 &copy; Grey Cells Admin. Brought to you by <a href="http://www.greycellsindia.com">greycellsindia.com</a> </div>
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
