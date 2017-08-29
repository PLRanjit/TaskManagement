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