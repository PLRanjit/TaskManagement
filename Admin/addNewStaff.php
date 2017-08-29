<?php
			session_start();
			include('connection.php');
			
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
/* 			$_dbHost = "localhost";
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
	$fullname= clean($_POST['fullname']);
	$employment_id= clean($_POST['employment_id']);
	$dob= clean($_POST['dob']);
	$doj= clean($_POST['doj']);
	$email= clean($_POST['email']);
	$notel= clean($_POST['notel']);
	$project= clean($_POST['project']);
	$power= clean($_POST['power']);
	$address= clean($_POST['address']);
	$position= clean($_POST['position']);
	$status= 'Active';
	$username= clean($_POST['username']);
	$password= clean($_POST['password']);

	   
	$query=mysqli_query($con ,"INSERT INTO staff (power, fullname,employment_id,dob,doj,email,contactno,address,position,status,username,password, project) VALUES ('$power','$fullname','$employment_id','$dob','$doj','$email','$notel','$address','$position','Active','$username','$password','$project')");	
	  if($query){	
		header('Location: UserManagement.php');
}
	
?>


