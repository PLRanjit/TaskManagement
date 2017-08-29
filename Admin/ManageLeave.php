
<div>
		<?php
			if(isset($error)){
				
				echo '<div class="alert alert-success alert-dismissible" role="alert" id="success-message">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
				<strong>Success! </strong>';
				echo $error;
				echo '</div>';
				
			}
				else if(isset($error1))
			{
			    $error="can't delete task";
				echo '<div class="alert alert-warning alert-dismissible" role="alert" id="success-message">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
				<strong>Warning! </strong>';
				echo $error1;
				echo '</div>';
			}
			?>
			
			<?php 
			if(isset($_POST['action1'])=='Edit')
			{ 
			$employment_id=$_POST['employment_id'];
			$queryupdate=mysqli_query($con,"select * from leaves where employment_id='$employment_id'")or die(mysqli_error());
				while($rowupdate=mysqli_fetch_array($queryupdate)){
					$id = $rowupdate['id'];
					$employment_id= $rowupdate['employment_id'];
					$Leave_from= $rowupdate['Leave_from'];
					$Leave_To= $rowupdate['Leave_To'];
					$Reason_for_leave= $rowupdate['Reason_for_leave'];
					$No_Of_Leaves = $rowupdate['No_Of_Leaves'];
				}
			?>
			
			<?php include 'leaveEdit.php'?>
			
			<?php 
			}			
			else
			{
			?>
		  <?php include 'leaves.php' ?>
		  <?php } ?>
		  </div>