<div class="widget-box">
  <div class="widget-title bg_ly" data-toggle="collapse"  href="#collapseG3"style="background-color:#f2f1bc;"> <span class="icon"><i class="icon-ok"></i></span>
	<h5>Employees On Leave For Next Few Days </h5>
  </div>
  <div class="widget-content nopadding collapse in" id="collapseG3">
	<div class="todo">
	  <ul>
	<?php
	$log = $_SESSION['staffid'];
	$date = date("Ym");
	$sdate = date('Y-m-d');
	$edate = date('Y-m-d', strtotime("+3 day"));
	$day = date('l', strtotime($sdate));
	$searc = array();
	$inL = array();
	$leavesdate = array();
	$leaveddate = array();
	$query1 = mysqli_query($con, "select * from leaves") or die(mysqli_error());
	$svac = "";
	$dvac = "";
	while ($row = mysqli_fetch_array($query1)) {
		$noDay = $row['No_Of_Leaves'];
		$svac = date($row['Leave_from']);
		$dvac = date($row['Leave_To']);
		if ($svac > $sdate && $svac < $edate) {
			if (!in_array($row['employment_id'], $searc)) {
				array_push($searc, $row['employment_id']);
				array_push($leavesdate, $svac);
				array_push($leaveddate, $dvac);
			}
		}
	}
			
		foreach($searc as $emp){
			$query1 = mysqli_query($con, "select * from task where assigned_to = '$emp'") or die(mysqli_error());
			while ($row = mysqli_fetch_array($query1)) {
				$prj = $row['project_name'];
				$query2 = mysqli_query($con, "select * from staff where position in ('Manager','Ceo','Admin')") or die(mysqli_error());
				while ($rowupdate = mysqli_fetch_array($query2)) {
					if(($log == $rowupdate['staffid'] && $prj == $rowupdate['project']) || ($log == '111')){
						
						$sdis = array_search($emp, $searc);
						if(!in_array($emp, $inL)){
							array_push($inL, $emp);
						?>
						
						<li class="clearfix">
							<div class="txt"> 
								<span class="by label"><?php echo $emp; ?></span> : <b>Is On Leave from <span class="date badge badge-info"><?php echo $leavesdate[$sdis];?></span> To &nbsp;<span class="date badge badge-info"><?php echo $leaveddate[$sdis];?></span></b>
							</div>
							<div class="pull-right"> 
								<a class="tip" href='TaskManagement.php?id=<?php echo $emp; ?>&title=<?php echo $title; ?>&tab=changeit' title="Delete"><i class="icon-pencil"></i></a> 
							</div>
						</li>
						
						<?php	
						}
					}
				}
			}
		}
		?>
	  </ul>
	</div>
  </div>
</div>