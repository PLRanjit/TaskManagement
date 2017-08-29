<?php

			if($_POST['action1']=='delete')
			{
			$id = clean($_POST['id']);
			$employment_id= clean($_POST['employment_id']);
			$query=mysqli_query($con,"DELETE from leaves where id = '$id' and employment_id='$employment_id'");
			if($query){
				$error=" Task Successful Delete";
				header("location: Manage_LeavesHolidays.php");	
			}
				else
			{
			    $error1=mysqli_error($con);
			}
			
			}
			
			
			/* update data database */
			if($_POST['action1']=='Update Leave')
			{
				
			$id = clean($_POST['id']);
			$employment_id= clean($_POST['employment_id']);
			$Leave_from= clean($_POST['Leave_from']);
			$Leave_To= clean($_POST['Leave_To']);
			$Reason_for_leave= clean($_POST['Reason_for_leave']);
			
				$start = new DateTime($Leave_from);
				$end = new DateTime($Leave_To);
				
				$interval1 = $end->diff($start);
				
				$No_Of_Leaves =  (int)$interval1->format('%R%a');
				
				if($No_Of_Leaves < 0){
					$No_Of_Leaves = 0 - $No_Of_Leaves;
				}
						$No_Of_Leaves = $No_Of_Leaves + 1;
				$queryedit=mysqli_query($con,"UPDATE leaves set Leave_from='$Leave_from',Leave_To='$Leave_To',Reason_for_leave='$Reason_for_leave', No_Of_Leaves='$No_Of_Leaves' where id = '$id' and employment_id='$employment_id'") or die(mysqli_error());	
					if($queryedit){
						$error="Updated Successfully" ;
					}
					else
					{
						$error1="Can't Update Task";
					}
			}
			

?>