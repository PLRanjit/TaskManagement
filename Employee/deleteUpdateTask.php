<?php

			if($_POST['action']=='delete')
			{
			
			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$changeBy = $_SESSION['staffid'];
			$x=0;
			$query = mysqli_query($con, "select * from staff where staffid = '$changeBy' limit 1");
			$today= date('Y-m-d H:i:s');
			$count_user = mysqli_num_rows($query);
			if($count_user==1){
				$row = mysqli_fetch_array($query);
				$empid=$row['employment_id'];
			}else{
				$empid=$id;
			}
				
			$query7 = mysqli_query($con, "select * from task where id=$id and date=$date limit 1");
			
			$count = mysqli_num_rows($query7);
			if($count==1&&$x==0){
				$query5=mysqli_query($con,"INSERT INTO history (id,date,tasktitle,project_name,task_desc,changes_made_by,scheduled_for,status,priority,time,state) select id,date,tasktitle,project_name,task_desc,'$empid',scheduled_for,status,priority,'$today','Delete Task' from task where id=$id and date=$date ")or die (mysqli_error());

				$x=1;
				
				$query=mysqli_query($con,"DELETE from task where id=$id and date=$date ");

			}
			
			

			if($query){
					
				
				$error=" Task Successful Delete" .$ee;
				//header("location: TaskManagement.php");	
			}
				else
			{
			    $error1="Can't Delete This Task".$ee;
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
			$changeBy = $_SESSION['staffid'];
			$today= date('Y-m-d H:i:s');
			if($adate != '' && $status == 'Completed'){
			$start = new DateTime($sdate);
			$end = new DateTime($ddate);
			$act = new DateTime($adate);
			
			$interval1 = $end->diff($start);
			$interval2 = $act->diff($start);

			$nu = $interval1->format('%R%a');
			$den = $interval2->format('%R%a');
			
			$efficiency = 200 - (round($den/$nu, 2) * 100);
			}else{
				$efficiency = null;
			}
			
			
			
		$query = mysqli_query($con, "select * from staff where staffid = '$changeBy' limit 1");
		 
		$count_user = mysqli_num_rows($query);
		if($count_user==1){
			$row = mysqli_fetch_array($query);
			$empid=$row['employment_id'];
		}else{
			$empid=$id;
		}
			
			
			
			
			
				$queryedit=mysqli_query($con,"UPDATE task set id='$id',date='$date',sdate='$sdate',ddate='$ddate',adate='$adate',tasktitle='$tasktitle',project_name='$project_name',task_desc='$task_desc',assigned_by='$assigned_by',assigned_to='$assigned_to',scheduled_for='$scheduled_for',status='$status',priority='$priority',efficiency='$efficiency' where id=$id and date=$date ") or die(mysqli_error());	
				
				
				$query3=mysqli_query($con,"select * from history where id='$id' and date='$date' and tasktitle='$tasktitle' and task_desc='$task_desc' and changes_made_by='$assigned_by' and scheduled_for='$scheduled_for' and status='$status' and priority='$priority'")or die (mysqli_error());	
				
				$count_user = mysqli_num_rows($query3);
				
				if($count_user==0){
					$query2=mysqli_query($con,"INSERT INTO history (id,date,tasktitle,project_name,task_desc,changes_made_by,scheduled_for,status,priority,time,state) VALUES ('$id','$date','$tasktitle','$project_name','$task_desc','$empid','$scheduled_for','$status','$priority','$today','Edit Task')")or die (mysqli_error());
				}

					if($queryedit){
						$error="Updated Successfully";
					}
					else
					{
						$error1="Can't Update Task";
					}
			}
			

?>