<?php
			session_start();
			include('connection.php');
			
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
	
	//Sanitize the POST values
	
	
	
	$employment_id= clean($_POST['employment_id']);
	$Leave_from= clean($_POST['Leave_from']);
	$Leave_To= clean($_POST['Leave_To']);
	$Reason_for_leave= clean($_POST['Reason_for_leave']);
	
	$start = new DateTime($Leave_from);
	$end = new DateTime($Leave_To);
	
	$interval1 = $end->diff($start);
	
	$No_Of_Leaves =  (int)$interval1->format('%R%a') ;
	
	if($No_Of_Leaves < 0){
		$No_Of_Leaves = 0 - $No_Of_Leaves;
	}
$No_Of_Leaves = $No_Of_Leaves + 1;
	
	$query=mysqli_query($con,"INSERT INTO leaves(employment_id, Reason_for_leave, Leave_from, Leave_To, No_Of_Leaves) VALUES 
	('$employment_id','$Reason_for_leave','$Leave_from','$Leave_To', '$No_Of_Leaves')")or die (mysqli_error());	
	  if($query){	
		header('Location: Manage_LeavesHolidays.php');
}else{
	
}
	
?>


