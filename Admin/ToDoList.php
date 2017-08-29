<div class="widget-box">
  <div class="widget-title bg_ly" data-toggle="collapse"  href="#collapseG1"   style="background-color:#d4e8bb;"> <span class="icon"><i class="icon-ok"></i></span>
	<h5>Project To Do list</h5>
  </div>
  <div class="widget-content nopadding collapse in" id="collapseG1">
	<div class="todo">
	  <ul>
	  <?php 
		$date=date("Ym");
		$sdate= date('Y-m-d');
		$edate=date('Y-m-d', strtotime("+45 day"));
		$day = date('l', strtotime($sdate));
		
        ?>
	  
	  <?php 
		$query1=mysqli_query($con,"select * from task")or die(mysqli_error());
		while($row=mysqli_fetch_array($query1)){
		$scheduled = explode(",", $row['scheduled_for']);
		$daily= $row['scheduled_for'];
		if(in_array($day, $scheduled) || $daily=='Daily'){
			$id= $row['assigned_to'];
		$title= $row['tasktitle'];
	  ?>
		<li class="clearfix">
		  <div class="txt"> <b><?php echo $row['tasktitle']; ?></b> : <?php echo $row['task_desc']; ?><span class="by label"><?php echo $row['project_name']; ?></span></div>
		  <div class="pull-right"> 
		  <a class="tip" href='TaskManagement.php?id=<?php echo $id; ?>&title=<?php echo $title; ?>&tab=rescedule' title="Delete">
		  <i class="icon-pencil"></i></a> </div>
		</li>
		<?php }
		} ?>
	  </ul>
	</div>
  </div>
</div>