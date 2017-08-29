<?php

			if($_POST['action']=='delete')
			{
			
			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$query=mysqli_query($con ,"DELETE from task where id=$id and date=$date ");
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
			$scheduled_for = implode(",",$_POST["scheduled"]);
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
			$status= clean($_POST['status']);
			$priority= clean($_POST['priority']);
			
			
			if($adate != ''){
			$start = new DateTime($sdate);
			$end = new DateTime($ddate);
			$act = new DateTime($adate);
			
			$interval1 = $end->diff($start);
			$interval2 = $act->diff($start);

			$nu = $interval1->format('%R%a');
			$den = $interval2->format('%R%a');
			
			$efficiency = 100 - floor($den/$nu * 100);
			}else{
				$efficiency = null;
			}

				$queryedit=mysqli_query($con ,"UPDATE task set id='$id',date='$date',sdate='$sdate',ddate='$ddate',adate='$adate',tasktitle='$tasktitle',project_name='$project_name',task_desc='$task_desc',assigned_by='$assigned_by',assigned_to='$assigned_to',scheduled_for='$scheduled_for',status='$status',priority='$priority',efficiency='$efficiency' where id=$id and date=$date ") or die(mysqli_error());	
					if($queryedit){
						$error="Updated Successfully";
					}
					else
					{
						$error1="Can't Update Task";
					}
			}
			

?>