<div class="widget-box" id="report">
  <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
	<h5>Notes</h5>
  </div>
  <div class="widget-content nopadding"  style="height:200px;overflow: auto;">
	<ul class="recent-posts">
	<?php 
	$changeBy = $_SESSION['staffid'];
	
			$query = mysqli_query($con, "select * from staff where staffid = '$changeBy' limit 1");
		 
			$count_user = mysqli_num_rows($query);
			if($count_user==1){
				$row = mysqli_fetch_array($query);
				$empid=$row['employment_id'];
			}else{
				$empid=$id;
			}
	
	
	
		$query1=mysqli_query($con ,"select * from notes where written_by='$empid'")or die(mysqli_error());
		$count_user = mysqli_num_rows($query1);
		if($count_user<1){
			echo '<center>No Data Available</center>';
		}else{
		while($row=mysqli_fetch_array($query1)){
	?>
	  <li>
		<div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
		<div class="article-post">
		  <div class="fr"><div class="btn-group">
							<form action="dashboard.php" method="post" name="editcust">
							<input type="hidden" value="Edit" name="actionMe">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['date'];?>" name="date">
							<button name="submit" type="submit" value="edit" class="btn btn-primary btn-mini">Edit</button>
							</form>
						</div> <div class="btn-group">
							<form action="dashboard.php" method="post" name="delcust">
							<input type="hidden" value="delete" name="actionMe">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['date'];?>" name="date">
							<button name="submit" type="submit" value="DELETE" class="btn btn-danger btn-mini">Delete</button>
							</form>
						</div></div>
		  <span class="user-info"> <?php echo $row['project_name']; ?> / <?php echo $row['tasktitle']; ?> / Date: <?php echo $row['sdate']; ?> / Time:<?php echo $row['time']; ?> </span>
		  <p><?php echo $row['task_desc']; ?> </p>
		</div>
	  </li>
		<?php }}?>
	</ul>
  </div>
  	  <div style="padding:10px;background-color:#efefef;border-bottom: 1px solid #CDCDCD;">
		<form action="dashboard.php" method="post" name="delcust">
		<input type="hidden" value="Add" name="Add">
		<button name="submit" type="submit" value="Add" class="btn btn-warning btn-mini">Add Note</button>
		</form>
	</div>
</div>
