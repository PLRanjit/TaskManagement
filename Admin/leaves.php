        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Leaves List</h5>
			<?php include 'addLeave.php'?>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table table-scrollable" style="display: block; width: 100%;">
              <thead>
                <tr>
				<th style="width: 3%;">Id</th>
                  <th>Employee Id</th>
				  <th style="width: 60%;">Reason for leave</th>
                  <th>Leave From</th>
                  <th>Leave To</th>
				  <th style="width: 2%;">No Of Leaves</th>
				  <th style="width: 10%;">Manage</th>
                </tr>
              </thead>
              <tbody>
                <?php 
				$query1=mysqli_query($con,"select * from leaves")or die(mysqli_error());
				while($row=mysqli_fetch_array($query1)){
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['employment_id']; ?></td>
					<td><?php echo $row['Reason_for_leave']; ?></td>
					<td><?php echo $row['Leave_from']; ?></td>
					<td><?php echo $row['Leave_To']; ?></td>
					<td><?php echo $row['No_Of_Leaves']; ?></td>
					<td><center>
						<div class="btn-group btn-group-sm">
							<form action="Manage_LeavesHolidays.php" method="post" name="editcust">
							<input type="hidden" value="Edit" name="action1">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['employment_id'];?>" name="employment_id">
							<button name="submit" type="submit" value="edit" class="btn btn-info btn-sm" style="width:35px;"><span class="icon icon-edit"></button>
							</form>
						</div>
						<div class="btn-group btn-group-sm">
							<form action="Manage_LeavesHolidays.php" method="post" name="delcust">
							<input type="hidden" value="delete" name="action1">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['employment_id'];?>" name="employment_id">
							<button name="submit" type="submit" value="DELETE" class="btn btn-danger btn-sm"  style="width:35px;"><span class="icon icon-remove"></span></button>
							</form>
						</div>
					</center>
					</td>
				</tr>
			<?php } ?>
					</tbody>
			</table>
          </div>
        </div>