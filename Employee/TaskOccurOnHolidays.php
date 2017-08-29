<div class="widget-box">
  <div class="widget-title bg_ly" data-toggle="collapse"  href="#collapseG2" style="background-color:#8bd4ef;"> <span class="icon"><i class="icon-ok"></i></span>
  
  <?php 
		$array = array(0 => "Monday", 1 => "Tuesday", 2 => "Wednesday", 3 => "Thursday", 4 => "Friday", 5 => "Saturday", 6 =>"Sunday");
		$date=date("Ym");
		$sdate= date('Y-m-d');
		$edate=date('Y-m-d', strtotime("+3 day"));
		$day = date('l', strtotime($sdate));
		$searcq=array();
		$changeBy = $_SESSION['staffid'];
		$searc = array();

		$query1=mysqli_query($con,"select * from holidays")or die(mysqli_error());
		while($row=mysqli_fetch_array($query1)){
			
			$noDay = $row['No_Of_Holidays'];
			
			$svac = date($row['sdate']);
			$dvac = date($row['ddate']);
			
			$day1 = date('l', strtotime($svac));
			$day2 = date('l', strtotime($dvac));
			
			array_push($searc, $day1);
			$inc = array_search($day1, $array)+1;

			if($svac > $sdate && $svac < $edate ){
		
				if($noDay < 7){
					if(in_array($day1, $array)){						
					for($i = 0; $i<$noDay; $i++){
						array_push($searc, $array[$inc]);
						$inc = $inc + 1;
							if($inc == 7){
								$inc = 0;
							}
						}

					}
				}else{
					$searc = $array;
				}
				break;
			}
		}
		
		$query = mysqli_query($con, "select * from staff where staffid = '$changeBy' limit 1");
		
		$count_user = mysqli_num_rows($query);
		if($count_user==1){
			$row = mysqli_fetch_array($query);
			$empid=$row['employment_id'];
		}
		
		
		?>
  
	<h5>Task On Comming Holiday : <?php echo "<b>$svac</b>"?> - <?php echo "<b>$dvac</b>"?></h5>
  </div>
  <div class="widget-content nopadding collapse in" id="collapseG2">
	<div class="todo">
	  <ul>
		
		<?php
		$inL=array();
		$query1=mysqli_query($con,"select * from task where assigned_to='$empid'")or die(mysqli_error());
		while($row=mysqli_fetch_array($query1)){
		$scheduled = explode(",", $row['scheduled_for']);
		$stop = array();
		foreach ($searc as $value) {
			$id= $row['assigned_to'];
			$title= $row['tasktitle'];
			$daily= $row['scheduled_for'];
			$date= $row['id'];
		if((in_array($value, $scheduled) && !in_array($date, $stop)) || $daily=='Daily'){
			array_push($stop, $date);
			$emp=$row['id'];
			if(!in_array($emp, $inL)){
				array_push($inL, $emp);
	  ?>
		<li class="clearfix">
		  <div class="txt"><b><?php echo $row['date'].$row['id']; ?></b> => <b><?php echo $row['tasktitle']; ?></b> : <?php echo $row['task_desc']; ?><span class="by label"><?php echo $row['project_name']; ?></span></div>
		  <div class="pull-right">  
		  <a class="tip" href='TaskManagement.php?id=<?php echo $id; ?>&title=<?php echo $title; ?>&tab=rescedule' title="Delete">
		  <i class="icon-pencil"></i></a> </div>
		</li>
		<?php 		}
				}
			}
		} ?>
	  </ul>
	</div>
  </div>
</div>