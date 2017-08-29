<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-edit"></i></span>
	<h5>Edit Task</h5>
  </div><br>
	<hr>
	<form class="form-horizontal widget-content" role="form" action="Manage_LeavesHolidays.php" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>" > 
				<div class="row-fluid">
					<div  class="span4">
					Employee Id :
					<!--<select id="employment_id" name="employment_id" style="width: 200px;">
						<?php 
							$query=mysqli_query($con,"select * from staff where status = 'Active'")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
						?>
                        <option value="<?php echo $row['employment_id']; ?>" <?php if($employment_id==$row['employment_id']) echo "selected" ?>><?php echo $row['employment_id']; ?></option>
						<?php } ?>
                     </select>-->
					 <input class="form-control to_date"  id="employment_id" name="employment_id" type="text" value="<?php echo $employment_id; ?>" placeholder="Employee Id" style="width: 130px;" readonly>
					</div>
				</div>
		</div>
		
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Leave From :
                  <div class="input-append date form_datetime">
                     <input class="form-control to_date"  id="dp5" name="Leave_from" type="date" value="<?php echo $Leave_from;?>" placeholder="Leave From" style="width: 130px;" required>
                     <span class="add-on"><i class="icon-th"></i></span>
                  </div>
               </div>
               <div  class="span6">
                  Leave To :
                  <div class="input-append date form_datetime">
                     <input class="form-control to_date"  id="dp3" name="Leave_To" type="date" value="<?php echo $Leave_To;?>" placeholder="Leave To" style="width: 130px;" required>
                     <span class="add-on"><i class="icon-th"></i></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span12">
                  Reason for leave :
                  <input class="form-control" id="Reason_for_leave" name="Reason_for_leave" type="text" placeholder="reason for leave" 
				  value="<?php echo $Reason_for_leave;?>" required></textarea>
               </div>
            </div>
         </div>
		 <div class="form-group">
            <div class="row-fluid">
               <div  class="span12">
                  No Of Leaves :
                  <input type="text" class="form-control" id="No_Of_Leaves" name="No_Of_Leaves" placeholder="No Of Leave" value="<?php echo $No_Of_Leaves;?>" required></textarea>
               </div>
            </div>
         </div>
		<br>
		<div class="form-group">
			<div>
				 <input type="submit" class="btn btn-primary pull-right" name="action1" value="Update Leave">
			</div>
			<div>
				<a href="Manage_LeavesHolidays.php" class="btn" data-dismiss="modal">Cancel</a> 
			</div>
			
		</div>
		<br>
	</form>
</div>