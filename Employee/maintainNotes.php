<?php

			if($_POST['actionMe']=='delete')
			{
			
			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$query=mysqli_query($con ,"DELETE from notes where id=$id and date=$date ");
			if($query){
				$error=" Task Successful Delete".mysqli_error($con);
				header("location: dashboard.php#report");	
			}
				else
			{
			$error1="can't delete task".$date."--";
			}
			
			}
			
			/* update data database */
			if($_POST['action']=='Apply')
			{

			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$sdate= clean($_POST['sdate']);
			$tasktitle= clean($_POST['tasktitle']);
			$project_name= clean($_POST['project_name']);
			$task_desc= clean($_POST['task_desc']);
			$time= clean($_POST['time']);

				$queryedit=mysqli_query($con ,"UPDATE notes set id='$id',date='$date',sdate='$sdate',tasktitle='$tasktitle',project_name='$project_name',task_desc='$task_desc',time='$time' where id=$id and date=$date ") or die(mysqli_error());	

					if($queryedit){
						$error="Updated Successfully";
					}
					else
					{
						$error1="Can't Update Task";
					}
			}
			
			
			if($_POST['actionV']=='Add')
			{

			$id= clean($_POST['id']);
			$date= clean($_POST['date']);
			$sdate= clean($_POST['sdate']);
			$tasktitle= clean($_POST['tasktitle']);
			$project_name= clean($_POST['project_name']);
			$task_desc= clean($_POST['task_desc']);
			$time= clean($_POST['time']);

			$changeBy = $_SESSION['staffid'];
	
			$query = mysqli_query($con, "select * from staff where staffid = '$changeBy' limit 1");
		 
			$count_user = mysqli_num_rows($query);
			if($count_user==1){
				$row = mysqli_fetch_array($query);
				$empid=$row['employment_id'];
			}else{
				$empid=$id;
			}

				$query=mysqli_query($con,"INSERT INTO notes (date,sdate,tasktitle,project_name,task_desc,written_by,time) VALUES ('$date','$sdate','$tasktitle','$project_name','$task_desc','$empid','$time')")or die (mysqli_error());
					
				unset($_POST);
			}
			

?>