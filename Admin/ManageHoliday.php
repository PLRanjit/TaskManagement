
<div>
		<?php
			if(isset($error2)){
				
				echo '<div class="alert alert-success alert-dismissible" role="alert" id="success-message">
				<button type="button" class="close" data-dismiss="alert">x<span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
				<strong>Success! </strong>';
				echo $error;
				echo '</div>';
				
			}
				else if(isset($error3))
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
			if(isset($_POST['action'])=='EditMe')
			{ 
			$id=$_POST['id'];
			$date=$_POST['date'];
			/* receive data from database */
			$queryupdate=mysqli_query($con,"select * from holidays where id='$id' and date='$date' ")or die(mysqli_error());
				while($rowupdate=mysqli_fetch_array($queryupdate)){

					$id= $rowupdate['id'];
					$date= $rowupdate['date'];
					$sdate= $rowupdate['sdate'];
					$ddate= $rowupdate['ddate'];
					$Occasion= $rowupdate['Occasion'];
					$No_Of_Holidays = $rowupdate['No_Of_Holidays'];
					
				}
			?>
			
			<?php include 'holyEdit.php'?>
			
			<?php 
			}			
			else
			{
			?>
		  <?php include 'holy.php' ?>
		  <?php } ?>
		  </div>