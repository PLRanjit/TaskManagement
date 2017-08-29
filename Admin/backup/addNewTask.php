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
			if(!mysql_connect($_dbHost, $_dbUser, $_dbPass)) {
				echo $_connFailed;
			}
			//validate database 
			if(!mysql_select_db($_dbName)) {
				echo $_dbConnFailed;
			} 
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
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
	$scheduled_for= clean($_POST['scheduled_for']);
	$status= 'In Progress';
	$priority= clean($_POST['priority']);

	   
	$query=mysql_query("INSERT INTO task (date,sdate,ddate,adate,tasktitle,project_name,task_desc,assigned_by,assigned_to,scheduled_for,status,priority) VALUES ('$date','$sdate','$ddate','$adate','$tasktitle','$project_name','$task_desc','$assigned_by','$assigned_to','$scheduled_for','$status','$priority')")or die (mysql_error());	
	  if($query){	
		header('Location: TaskManagement.php');
}
	
?>


