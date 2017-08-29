<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-edit"></i></span>
	<h5>Edit Task</h5>
  </div><br>
	<h5 class="control-label" style="text-align:center;">Project Name : <?php echo $project_name; ?> / Task Name : <?php echo $tasktitle; ?></h5>
	<hr>
	<form class="form-horizontal widget-content" role="form" action="dashboard.php" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>" > 
			<input type="hidden" name="date" value="<?php echo $date; ?>" > 
			<input type="hidden" name="writtenby" value="<?php echo $date; ?>" >
				<div class="row-fluid">
					<div  class="span4">
						Start Date :
						<div class="input-append date form_datetime">
							<input class="form-control from_date" id="dp4" name="sdate" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;">
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
				</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span4">
					Project Name :
					<input class="form-control" id="project_name" name="project_name" type="text" placeholder="Project Name" value="<?php echo $project_name;?>">
				</div>
		
				<div  class="span4">
					Task Title :
					<input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="Task Title" value="<?php echo $tasktitle;?>">
				</div>
		
				<div  class="span4">
					Task Desc :
					<input class="form-control" id="task_desc" name="task_desc" type="text" placeholder="Task Desc" value="<?php echo $task_desc;?>">
				</div>

			</div>
		</div>
		
		<div class="form-group">
			<div class="row-fluid">
				<div  class="span4">
					Time :
					<input class="form-control" id="time" name="time" type="time" placeholder="Time" value="<?php echo $time;?>">
				</div>
		</div></div>
		<br>
		<div class="form-group">
			<div>
				 <input type="submit" class="btn btn-primary pull-right" name="action" value="Apply">
			</div>
			<div>
				<a href="dashboard.php" class="btn" data-dismiss="modal">Cancel</a> 
			</div>
		</div>
		<br>
	</form>
</div>