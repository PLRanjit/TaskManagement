<div class="widget-box" id="modal-No-Of-Employee">
  <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
	<h5>Report List</h5>
  </div>
	  <div class="widget-content nopadding ">
		<table class="table table-bordered data-table">
      <thead>	  
         <tr>
            <th>
               Staff
            </th>
			<th>
               Employment Id
            </th>
            <th>
               Today Tasks
            </th>
            <th>
               This Week Tasks
            </th>
            
            <th>
               Delayed Tasks
            </th>
            <th>
               Completed Tasks
            </th>
			<th>
               Not Approved Tasks
            </th>
			<th>
               In Progress Tasks
            </th>
			<th>
               Urgent Tasks
            </th>
			<th>
               Not Started Tasks
            </th>
			<th>
               All Tasks
            </th>
			<th>
               Efficiency
            </th>
         </tr>
      </thead>
      <tbody>

	<?php 
            $query=mysqli_query($con ,"select * from staff")or die(mysqli_error());
            $iid = $_SESSION['staffid'];
            while($row=mysqli_fetch_array($query)){
            $name=$row['employment_id'];
            $id=$row['staffid'];
            $todaydate=date('Y-m-d');
            $today=mysqli_query($con ,"SELECT * FROM task WHERE sdate <='$todaydate' AND ddate >='$todaydate' AND assigned_to='$name' AND status='In Progress'")or die(mysqli_error());	
            $ttoday=mysqli_query($con ,"SELECT * FROM task WHERE sdate <='$todaydate' AND ddate >='$todaydate' AND status='In Progress'")or die(mysqli_error());	
            $week=mysqli_query($con ,"SELECT * FROM task WHERE WEEKOFYEAR(sdate)=WEEKOFYEAR('$todaydate') AND assigned_to='$name' AND status='In Progress' ")or die(mysqli_error());	
            $tweek=mysqli_query($con ,"SELECT * FROM task WHERE WEEKOFYEAR(sdate)=WEEKOFYEAR('$todaydate') AND status='In Progress' ")or die(mysqli_error());	
            $all=mysqli_query($con ,"SELECT * FROM task WHERE ddate >='$todaydate' AND assigned_to='$name' AND status='In Progress'")or die(mysqli_error());	
            $tall=mysqli_query($con ,"SELECT * FROM task WHERE ddate >='$todaydate' AND status='In Progress'")or die(mysqli_error());	
            $out=mysqli_query($con ,"SELECT * FROM task WHERE sdate <'$todaydate' AND ddate <'$todaydate' AND assigned_to='$name' AND status='In Progress'")or die(mysqli_error());	
            $tout=mysqli_query($con ,"SELECT * FROM task WHERE sdate <'$todaydate' AND ddate <'$todaydate' AND status='In Progress'")or die(mysqli_error());	
            $done=mysqli_query($con ,"SELECT * FROM task WHERE assigned_to='$name' AND status='Completed'")or die(mysqli_error());	
            $tdone=mysqli_query($con ,"SELECT * FROM task WHERE status='Completed'")or die(mysqli_error());	
			$notApp=mysqli_query($con ,"SELECT * FROM task WHERE status='Not Approved' AND assigned_to='$name'")or die(mysqli_error());
			$tnotApp=mysqli_query($con ,"SELECT * FROM task WHERE status='Not Approved'")or die(mysqli_error());
			$prog=mysqli_query($con ,"SELECT * FROM task WHERE status='In Progress' AND assigned_to='$name'")or die(mysqli_error());
			$tprog=mysqli_query($con ,"SELECT * FROM task WHERE status='In Progress'")or die(mysqli_error());
			$urg=mysqli_query($con ,"SELECT * FROM task WHERE status='Urgent' AND assigned_to='$name'")or die(mysqli_error());
			$turg=mysqli_query($con ,"SELECT * FROM task WHERE status='Urgent'")or die(mysqli_error());
			$app=mysqli_query($con ,"SELECT * FROM task WHERE status='Approved' AND assigned_to='$name'")or die(mysqli_error());
			$tapp=mysqli_query($con ,"SELECT * FROM task WHERE status='Approved'")or die(mysqli_error());
			$comtask = mysqli_query($con ,"SELECT * FROM task WHERE status='Completed' AND assigned_to='$name'")or die(mysqli_error());
			$uncomtask = mysqli_query($con ,"SELECT * FROM task WHERE assigned_to='$name'")or die(mysqli_error());
            	?>	
         <tr style="background-color: <?php if($id == $iid){echo '#ffffb3';}?>;">
            <td class="active" style="background-color: #f2f2f2;"><?php echo $row['fullname']; ?></td>
			<td class="active" ><?php echo $row['employment_id']; ?></td>
            <td style="background-color: <?php if(mysqli_num_rows($today) != 0){echo '#dff0d8';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=today'><?php echo mysqli_num_rows($today); ?></a></td>
            <td class="active" style="background-color: <?php if(mysqli_num_rows($week) != 0){echo '#ffd480';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=week'><?php echo mysqli_num_rows($week); ?></a></td>
            
            <td class="active" style="background-color: <?php if(mysqli_num_rows($out) != 0){echo '#ff8080';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=out'><?php echo mysqli_num_rows($out); ?></a></td>
            <td style="background-color: <?php if(mysqli_num_rows($done) != 0){echo '#99ff99';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=done'><?php echo mysqli_num_rows($done);?></a></td>
			
			<td style="background-color: <?php if(mysqli_num_rows($notApp) != 0){echo '#cccccc';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=notApp'><?php echo mysqli_num_rows($notApp);?></a></td>
			<td style="background-color: <?php if(mysqli_num_rows($prog) != 0){echo '#ffe066';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=prog'><?php echo mysqli_num_rows($prog);?></a></td>
			<td style="background-color: <?php if(mysqli_num_rows($urg) != 0){echo '#ff4d4d';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=urg'><?php echo mysqli_num_rows($urg);?></a></td>
			<td style="background-color: <?php if(mysqli_num_rows($app) != 0){echo '#80bfff';}?>;"><a href='TaskManagement.php?id=<?php echo $id ?>&tab=app'><?php echo mysqli_num_rows($app);?></a></td>
			<td><a href='TaskManagement.php?id=<?php echo $id ?>&tab=all'><?php echo mysqli_num_rows($all);?></a></td>
			<td>
			
			<?php 
			$nu = mysqli_num_rows($comtask);
			$dn = mysqli_num_rows($uncomtask); 
				$ans = round($nu/$dn, 2) * 100;
			?>
				<div class="progress progress-mini active">
					<div style="width:<?php echo $ans; ?>%;" class="bar"></div>
				</div>
				<span class="percent"><?php echo $ans; ?>%</span>
			</td>
         </tr>
         <?php } ?>
         <tr class="info">
            <td class="info">Total</td>
			<td class="info"></td>
            <td class="info"><?php echo mysqli_num_rows($ttoday); ?></td>
            <td class="info"><?php echo mysqli_num_rows($tweek); ?></td>
            
            <td class="info"><?php echo mysqli_num_rows($tout); ?></td>
            <td class="info"><?php echo mysqli_num_rows($tdone); ?></td>
			
			<td class="info"><?php echo mysqli_num_rows($tnotApp); ?></td>
			<td class="info"><?php echo mysqli_num_rows($tprog); ?></td>
			<td class="info"><?php echo mysqli_num_rows($turg); ?></td>
			<td class="info"><?php echo mysqli_num_rows($tapp); ?></td>
			<td class="info"><?php echo mysqli_num_rows($tall); ?></td>
			<td class="info"></td>
         </tr>
      </tbody>
   </table>
</div>