<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-edit"></i></span>
	<h5>Edit Task</h5>
  </div><br>
	<h5 class="control-label" style="text-align:center;">Project Name : <?php echo $project_name; ?> / Task Name : <?php echo $tasktitle; ?></h5>
	<hr>
	<form class="form-horizontal widget-content" role="form" action="TaskManagement.php" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>" > 
			<input type="hidden" name="date" value="<?php echo $date; ?>" > 
				<div class="row-fluid">
					<div  class="span4">
						Start Date :
						<div class="input-append date form_datetime">
							<input class="form-control from_date" id="dp4" name="sdate" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;" readonly>
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
			
					<div  class="span4">
						Due Date :
						<div class="input-append date form_datetime">
							<input class="form-control to_date"  id="dp5" name="ddate" type="date" value="<?php echo $ddate;?>" placeholder="Due Date" style="width: 130px;" readonly>
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
			
					<div  class="span4">
						End Date :
						<div class="input-append date form_datetime">
							<input class="form-control from_date" id="dp6" name="adate" type="date" value="<?php echo $adate;?>" placeholder="End Date" style="width: 130px;" <?php if($status=="Not Approved"){ echo 'readonly'; }?>>
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
				</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span4">
					Project Name :
					<input class="form-control" id="project_name" name="project_name" type="text" placeholder="Project Name" value="<?php echo $project_name;?>" readonly>
				</div>
		
				<div  class="span4">
					Task Title :
					<input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="Task Title" value="<?php echo $tasktitle;?>"<?php if($status=="Not Approved"){ echo 'readonly'; }?>>
				</div>
		
				<div  class="span4">
					Task Desc :
					<input class="form-control" id="task_desc" name="task_desc" type="text" placeholder="Task Desc" value="<?php echo $task_desc;?>"<?php if($status=="Not Approved"){ echo 'readonly'; }?>>
				</div>

			</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span4">
					Assigned By :
					<input class="form-control" id="assigned_by" name="assigned_by" type="text" placeholder="Assigned By" value="<?php echo $assigned_by;?>" readonly>
				</div>
		
				<div  class="span4">
					Assigned To :
					<!--<select id="assigned_to" name="assigned_to" style="width: 200px;" readonly>
						<?php 
							$query=mysqli_query($con ,"select * from staff where status = 'Active'")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
						?>
                        <option value="<?php echo $row['employment_id']; ?>" <?php if($assigned_to==$row['employment_id']) echo "selected" ?>><?php echo $row['employment_id']; ?></option>
						<?php } ?>
                     </select>-->
					<input class="form-control" id="assigned_to" name="assigned_to" type="text" placeholder="Assigned To" value="<?php echo $assigned_to;?>" readonly>
				</div>
		
				<div  class="span4">
					<?php $scheduled = explode(",", $scheduled_for);?>
					
					Scheduled For :
					<?php if($status=="Not Approved"){?>
					<input class="form-control" id="scheduled_for" name="scheduled_for" type="text" placeholder="Scheduled For" value="<?php echo $scheduled_for;?>" readonly><?php } else {?>
					
					<select multiple id="scheduled_for" name="scheduled[]" style="width:200px;"required>
                        <!--<option value="Weekend" <?php if(in_array("Weekend", $scheduled)) echo "selected" ?> >Weekend</option>-->
                        <option value="Daily" <?php if(in_array("Daily", $scheduled)) echo "selected" ?> >Daily</option>
                        <!--<option value="Monthly" <?php if(in_array("Monthly", $scheduled)) echo "selected" ?> >Monthly</option>
                        <option value="Quartly" <?php if(in_array("Quartly", $scheduled)) echo "selected" ?> >Quartly</option>-->
                        <option value="Monday" <?php if(in_array("Monday", $scheduled)) echo "selected" ?> >Monday</option>
						<option value="Tuesday" <?php if(in_array("Tuesday", $scheduled)) echo "selected" ?> >Tuesday</option>
						<option value="Wednesday" <?php if(in_array("Wednesday", $scheduled))echo "selected" ?> >Wednesday</option>
						<option value="Thrusday" <?php if(in_array("Thrusday", $scheduled)) echo "selected" ?> >Thrusday</option>
						<option value="Friday" <?php if(in_array("Friday", $scheduled)) echo "selected" ?> >Friday</option>
						<!--<option value="Saturday" <?php if(in_array("Saturday", $scheduled)) echo "selected" ?> >Saturday</option>
						<option value="Sunday" <?php if(in_array("Sunday", $scheduled)) echo "selected" ?> >Sunday</option>-->
                     </select>
					<?php }?>
					<!--<input class="form-control" id="scheduled_for" name="scheduled_for" type="text" placeholder="Scheduled For" value="<?php echo $scheduled_for;?>" readonly>-->
				</div>

			</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span4">
					<div>
					Status :
					<?php if($status=="Not Approved"){?>
							<input class="form-control" id="status" name="status" type="text" placeholder="status" value="<?php echo $status;?>" style="width: 150px;"readonly><?php }else{?>
						<select id="status" name="status"class="form-control" style="width: 150px;">
							<!--<option value="Not Approved" <?php if($status=="Not Approved") echo "selected" ?>>Not Approved</option>-->
							<option value="Approved" <?php if($status=="Approved") echo "selected" ?>>Approved</option>
							<option value="In Progress" <?php if($status=="In Progress") echo "selected" ?>>In Progress</option>
							<option value="Completed" <?php if($status=="Completed") echo "selected" ?>>Completed</option>
							<option value="Urgent" <?php if($status=="Urgent") echo "selected" ?> >Urgent</option>
						</select>
							<?php } ?>
						<!--<input class="form-control" id="status" name="status" type="text" placeholder="status" value="<?php echo $status;?>" style="width: 150px;"readonly>-->
						
					</div>
				</div>
				
				<div  class="span4">
					<div>
					Priority :
						<!--<select id="priority" name="priority" class="form-control" style="width: 50px;" readonly>
						<option value="1" <?php if($priority==1) echo "selected" ?>>1</option>
						<option value="2" <?php if($priority==2) echo "selected" ?>>2</option>
						<option value="3" <?php if($priority==3) echo "selected" ?>>3</option>
						<option value="4" <?php if($priority==4) echo "selected" ?>>4</option>
						<option value="5" <?php if($priority==5) echo "selected" ?>>5</option>
						</select>-->
						<input class="form-control" id="priority" name="priority" type="text" placeholder="priority" value="<?php echo $priority;?>" style="width: 50px;" readonly>
					</div>
				</div>
				<?php 

				?>
				<div  class="span4">
					Efficiency :
					<input class="form-control" id="efficiency" name="efficiency" type="text" placeholder="Efficiency" value="<?php echo $efficiency;?>" readonly>%
				</div>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div>
				 <input type="submit" class="btn btn-primary pull-right" name="action" value="Update Task">
			</div>
			<div>
				<a href="TaskManagement.php" class="btn" data-dismiss="modal">Cancel</a> 
			</div>
			
		</div>
		<br>
	</form>
</div>