<?php
			session_start();
			include('connection.php');
			
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
			/* $_dbHost = "localhost";
			$_dbUser = "root";
			$_dbPass = "";
			$_dbName = "tms";
			$_connFailed = "Database connection failed.";
			$_dbConnFailed = "Database selection failed.";
		
		

			//validate host connection
			if(!mysqli_connect($_dbHost, $_dbUser, $_dbPass)) {
				echo $_connFailed;
			}
			//validate database 
			if(!mysqli_select_db($_dbName)) {
				echo $_dbConnFailed;
			} 
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
		} */
	
	//Sanitize the POST values
	
	
	
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
	$scheduled_for = implode(",",$_POST["scheduled"]);
	$status= 'Not Approved';
	$priority= clean($_POST['priority']);
	$today= date('Y-m-d H:i:s');
	$changeBy = $_SESSION['staffid'];
	
	$query = mysqli_query($con, "select * from staff where staffid = '$changeBy' limit 1");
		 
		$count_user = mysqli_num_rows($query);
		if($count_user==1){
			$row = mysqli_fetch_array($query);
			$empid=$row['employment_id'];
		}else{
			$empid=$id;
		}
	
	   
	$query=mysqli_query($con,"INSERT INTO task (date,sdate,ddate,adate,tasktitle,project_name,task_desc,assigned_by,assigned_to,scheduled_for,status,priority) VALUES ('$date','$sdate','$ddate','$adate','$tasktitle','$project_name','$task_desc','$assigned_by','$assigned_to','$scheduled_for','$status','$priority')")or die (mysqli_error());	
		
	$query1=mysqli_query($con,"select * from task where date='$date' and sdate='$sdate' and ddate='$ddate' and tasktitle='$tasktitle' and task_desc='$task_desc'")or die (mysqli_error());
	while($rowupdate=mysqli_fetch_array($query1)){
				$ids= $rowupdate['id'];
		}
	$query2=mysqli_query($con,"INSERT INTO history (id,date,tasktitle,project_name,task_desc,changes_made_by,scheduled_for,status,priority,time,state) VALUES ('$ids','$date','$tasktitle','$project_name','$task_desc','$empid','$scheduled_for','$status','$priority','$today','Add Task')")or die (mysqli_error());
		
	
	  if($query){	
		header('Location: TaskManagement.php');
}
	
?>


