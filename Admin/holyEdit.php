<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-edit"></i></span>
	<h5>Edit Task</h5>
  </div><br>

	<form class="form-horizontal widget-content" role="form" action="Manage_LeavesHolidays.php" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>" > 
			<input type="hidden" name="date" value="<?php echo $date; ?>" > 
				<div class="row-fluid">
					<div  class="span4">
						From :
						<div class="input-append date form_datetime">
							<input class="form-control from_date" id="dp4" name="sdate" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;">
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
			
					<div  class="span4">
						To :
						<div class="input-append date form_datetime">
							<input class="form-control to_date"  id="dp5" name="ddate" type="date" value="<?php echo $ddate;?>" placeholder="Due Date" style="width: 130px;">
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
				</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span12">
					Occassion :
					<input class="form-control" id="Occasion" name="Occasion" type="text" placeholder="Occassion" value="<?php echo $Occasion;?>">
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span12">
					No Of Holidays :
					<input class="form-control" id="No_Of_Holidays" name="No_Of_Holidays" type="text" placeholder="No Of Holidays" value="<?php echo $No_Of_Holidays;?>">
				</div>
			</div>
		</div>
		
		<br>
		<div class="form-group">
			<div>
				 <input type="submit" class="btn btn-primary pull-right" name="action" value="Update Holiday">
			</div>
			<div>
				<a href="Manage_LeavesHolidays.php" class="btn" data-dismiss="modal">Cancel</a> 
			</div>
			
		</div>
		<br>
	</form>
</div>