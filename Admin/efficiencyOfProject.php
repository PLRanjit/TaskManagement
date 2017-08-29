<div class="widget-box" style="margin:0;" >
  <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
	<h5>Over All Project Efficiency</h5>
  </div>  
  <div class="widget-content">
	<ul class="unstyled">
	  <?php 
		$query=mysqli_query($con,"select project_name, sum(efficiency) as total, count(project_name) as count from task group by project_name")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
	  ?>
	  <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> <?php echo $row['project_name']; ?><span class="pull-right strong"><?php echo floor($row['total']/$row['count']);?>%</span>
		<div class="progress active progress-striped ">
		  <div style="width: <?php echo round($row['total']/$row['count'], 2);?>%;" class="bar"></div>
		</div>
	  </li>
		<?php } ?>
	</ul>
  </div>
</div>