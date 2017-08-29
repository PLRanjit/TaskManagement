        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Holidays List</h5>
			<?php include 'addHoliday.php'?>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table table-scrollable">
              <thead>
                <tr>
				<th>Id</th>
				  <th>From</th>
                  <th>To</th>
				  <th style="width:62%;">Occasion</th>
				  <th>No Of Holidays</th>
				  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <?php 
				$query1=mysqli_query($con,"select * from holidays")or die(mysqli_error());
				while($row=mysqli_fetch_array($query1)){
			?>
				<tr>
					<td><?php echo $row['date'].$row['id']; ?></td>
					<td><?php echo $row['sdate']; ?></td>
					<td><?php echo $row['ddate']; ?></td>
					<td><?php echo $row['Occasion']; ?></td>
					<td><?php echo $row['No_Of_Holidays']; ?></td>
					<td><center>
						<div class="btn-group btn-group-sm">
							<form action="Manage_LeavesHolidays.php" method="post" name="editcust">
							<input type="hidden" value="EditMe" name="action">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['date'];?>" name="date">
							<button name="submit" type="submit" value="Edit" class="btn btn-info btn-sm" style="width:35px;"><span class="icon icon-edit"></button>
							</form>
						</div>
						<div class="btn-group btn-group-sm">
							<form action="Manage_LeavesHolidays.php" method="post" name="delcust">
							<input type="hidden" value="deleteMe" name="action">
							<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							<input type="hidden" value="<?php echo $row['date'];?>" name="date">
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