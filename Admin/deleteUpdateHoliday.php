<?php

			if($_POST['action']=='deleteMe')
			{
			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$query=mysqli_query($con,"DELETE from holidays where id=$id and date=$date ");
			if($query){
				$error2=" Task Successful Delete";
				header("location: Manage_LeavesHolidays.php");	
			}
				else
			{
			    $error3="Can't Delete This Task";
			}
			
			}
			
			/* update data database */
			if($_POST['action']=='Update Holiday')
			{
			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$sdate= clean($_POST['sdate']);
			$ddate= clean($_POST['ddate']);
			
			$Occasion= clean($_POST['Occasion']);
			
			
				$start = new DateTime($sdate);
				$end = new DateTime($ddate);
				
				$interval1 = $end->diff($start);
				
				$No_Of_Holidays =  (int)$interval1->format('%R%a');
				
				if($No_Of_Holidays < 0){
					$No_Of_Holidays = 0 - $No_Of_Holidays;
				}
					$No_Of_Holidays = $No_Of_Holidays+1;	
				$queryedit=mysqli_query($con,"UPDATE holidays set date='$date',sdate='$sdate',ddate='$ddate', Occasion='$Occasion', No_Of_Holidays = '$No_Of_Holidays' where id = '$id' and date='$date'") or die(mysqli_error());	
					if($queryedit){
						$error2="Successfully Update";
					}
					else
					{
						$error3="Can't Update Task" ;
					}
			}
			

?>