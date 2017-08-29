<div class="buttons">
	<a href="#modal-project-task" data-toggle="modal" style="color: #ffffff;"><i class="icon-globe"></i> <strong>
	<?php 
	$taskperproject=mysqli_query($con ,"SELECT project_name, count(project_name) as count FROM task group by project_name")or die(mysqli_error());
	while($row=mysqli_fetch_array($taskperproject)){
	echo '<span class="pull-left strong" style="padding-left:20px;">';echo $row['project_name']; echo '</span><span class="pull-right strong" style="padding-right:20px;">'; echo $row['count']; echo '</span><br>';}?>
	</strong> <small>Projects - No Of Task </small></a>
   
   <div class="modal hide" id="modal-project-task">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">×</button>
         <h3 style="color: #000000">Project Task</h3>
      </div>
      <div class="modal-body">
		<div class="widget-content nopadding">
            <table class="table table-bordered table-scrollable">
              <thead>
                <tr>
				  <th>Project Name</th>
				  <th>Task Id</th>
				  <th>Task Title</th>
				  <th>Task Desc</th>
				  <th>Assigned to</th>
				  <th>Scheduled_for</th>
                </tr>
              </thead>
              <tbody>
				  <?php 
					$query1=mysqli_query($con ,"select * from task order by project_name")or die(mysqli_error());
					
					while($row=mysqli_fetch_array($query1)){
					
				  ?>
			  <tr style="color: #000000">
					<td><?php echo $row['project_name']; ?></td>
					<td><?php echo $row['date'].$row['id']; ?></td>
					<td><?php echo $row['tasktitle']; ?></td>
					<td><?php echo $row['task_desc']; ?></td>
					<td><?php echo $row['assigned_to']; ?></td>
					<td><?php echo $row['scheduled_for']; ?></td>
			  </tr>
				<?php } ?>
			  </tbody>
			  </table>
		
		</div>
	  </div>
      <div class="modal-footer form-group"> 
         <a href="#" class="btn" data-dismiss="modal">Ok</a> 
      </div>

</div>