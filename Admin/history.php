<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
	<h5>Task History List</h5>
  </div>
	<div class="widget-content nopadding">
		<table class="table table-bordered data-table table-scrollable">
		  <thead>
			<tr>
			  <th>Task Id</th>
			  <th>Project Name</th>
			  <th>Task Title</th>
			  <th>Task Desc</th>
			  <th>Changed By</th>
			  <th>Scheduled for</th>
			  <th>Status</th>
			  <th>Priority</th>
			  <th>Changes Made on</th>
			  <th>State</th>
			</tr>
		  </thead>
		  <tbody>
			  <?php 
			  if($_GET['id'] != null && $_GET['date']!= null){
				  $id=$_GET['id'];
				  $date=$_GET['date'];
					$query5=mysqli_query($con,"select * from history where id='$id' and date='$date'")or die(mysqli_error());
				}else{
					$query5=mysqli_query($con,"select * from history")or die(mysqli_error());
				}
				
				while($rowman=mysqli_fetch_array($query5)){
					?>
				  <tr style="color: #000000">
						<td><?php echo $rowman['date'].$rowman['id']; ?></td>
						<td><?php echo $rowman['project_name']; ?></td>
						<td><?php echo $rowman['tasktitle']; ?></td>
						<td><?php echo $rowman['task_desc']; ?></td>
						<td><?php echo $rowman['changes_made_by']; ?></td>
						<td><?php echo $rowman['scheduled_for']; ?></td>
						<td><?php echo $rowman['status']; ?></td>
						<td><?php echo $rowman['priority']; ?></td>
						<td><?php echo $rowman['time']; ?></td>
						<td><?php echo $rowman['state']; ?></td>
				  </tr>
			<?php } ?>
		  </tbody>
		  </table>
	</div>
</div>