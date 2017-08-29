<?php 
			if(isset($_POST['actionMe'])=='Edit')
			{ 
			$id=$_POST['id'];
			$date=$_POST['date'];
			/* receive data from database */
			$queryupdate=mysqli_query($con ,"select * from notes where id='$id' and date='$date' ")or die(mysqli_error());
				while($rowupdate=mysqli_fetch_array($queryupdate)){

					$id= $rowupdate['id'];
					$date= $rowupdate['date'];
					$sdate= $rowupdate['sdate'];
					
					$tasktitle= $rowupdate['tasktitle'];
					$project_name= $rowupdate['project_name'];
					$task_desc= $rowupdate['task_desc'];
					$time= $rowupdate['time'];
				}
				
			?>
			<?php include 'editNote.php';?>
			<?php }else if(isset($_POST['Add'])=='Add'){?>
			<?php include 'addNote.php'?>
			<?php }else { ?>
			<?php include 'notes.php'?>
			<?php } ?>