<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-edit"></i></span>
	<h5>Edit Task</h5>
  </div><br>
	
	<hr>
	<form class="form-horizontal widget-content" role="form" action="dashboard.php" method="post">
		<div class="form-group">
			<?php 
            $date=date("Ym");
            $sdate=date('Y-m-d');
            $edate=date('Y-m-d', strtotime("+45 day"));
            ?>
				<div class="row-fluid">
					<div  class="span4">
					<input type="hidden" value="<?php echo $date;?>" name="date">
						Start Date :
						<div class="input-append date form_datetime">
                     <input class="form-control from_date" id="dp4" name="sdate" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;" required>
                     <span class="add-on"><i class="icon-th"></i></span>
                  </div>
					</div>
				</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span4">
					Project Name :
					<input class="form-control" id="project_name" name="project_name" type="text" placeholder="Project Name">
				</div>
		
				<div  class="span4">
					Task Title :
					<input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="Task Title">
				</div>
		
				<div  class="span4">
					Task Desc :
					<input class="form-control" id="task_desc" name="task_desc" type="text" placeholder="Task Desc">
				</div>

			</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span3">
				<?php $today = date('H:i'); ?>
					Time :
					<input class="form-control" id="time" name="time" type="time" placeholder="Time" value="<?php echo $today; ?>">
				</div>
		</div></div>
		<br>
		<div class="form-group">
			<div>
				 <input type="submit" class="btn btn-primary pull-right" name="actionV" value="Add">
			</div>
			<div>
				<a href="dashboard.php" class="btn" data-dismiss="modal">Cancel</a> 
			</div>
		</div>
		<br>
	</form>
</div>