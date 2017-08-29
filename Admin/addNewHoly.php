<?php
			session_start();
			include('connection.php');
			
			if(!isset($_SESSION['staffid']) || (trim($_SESSION['staffid']) == '')) {
			header("location: index.php");
			exit();
			}
	
	//Sanitize the POST values
	

	$date= clean($_POST['date']);
	$sdate= clean($_POST['sdate']);
	$ddate= clean($_POST['ddate']);
	
	$ocassion= clean($_POST['Occasion']);

	$start = new DateTime($sdate);
	$end = new DateTime($ddate);
	
	$interval1 = $end->diff($start);
	
	$No_Of_Holidays =  (int)$interval1->format('%R%a');
	
	if($No_Of_Holidays < 0){
		$No_Of_Holidays = 0 - $No_Of_Holidays;
	}
	
	$query=mysqli_query($con,"INSERT INTO holidays (date,sdate,ddate,Occasion, No_Of_Holidays) VALUES 
	('$date','$sdate','$ddate','$ocassion','$No_Of_Holidays')")or die (mysqli_error());	
	  if($query){	
		header('Location: Manage_LeavesHolidays.php');
}
	
?>


