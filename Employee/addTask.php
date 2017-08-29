<div class="buttons">
   <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new event</a>
   <div class="modal hide" id="modal-add-event">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">×</button>
         <h3>Add a new Task</h3>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" role="form" action="addNewTask.php" method="post">
         <?php 
            $date=date("Ym");
            $sdate=date('Y-m-d');
            $edate=date('Y-m-d', strtotime("+45 day"));
            ?>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  <input type="hidden" name="date" value="<?php echo $date; ?>" > 
                  Start Date :
                  <div class="input-append date form_datetime">
                     <input class="form-control from_date" id="dp4" name="sdate" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;">
                     <span class="add-on"><i class="icon-th"></i></span>
                  </div>
               </div>
               <div  class="span6">
                  Due Date :
                  <div class="input-append date form_datetime">
                     <input class="form-control to_date"  id="dp5" name="ddate" type="date" value="<?php echo $edate;?>" placeholder="Due Date" style="width: 130px;">
                     <span class="add-on"><i class="icon-th"></i></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Project Name :
				  <select id="project_name" name="project_name">
						<?php 
							$query=mysqli_query($con,"select DISTINCT project_name from task")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
						?>
                        <option value="<?php echo $row['project_name']; ?>"><?php echo $row['project_name']; ?></option>
						<?php } ?>
                     </select>
                  <!--<input class="form-control" id="project_name" name="project_name" type="text" placeholder="Project Name" required">-->
               </div>
               <div  class="span6">
                  Task Title :
                  <input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="Task Title" required>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Task Desc :
                  <textarea rows="2" cols="550" class="form-control" id="task_desc" name="task_desc" type="textarea" placeholder="Task Desc" required></textarea>
               </div>
               <div  class="span6">
                  Scheduled For :
                     <select multiple id="scheduled_for" name="scheduled[]" required>
                        <option value="Daily">Daily</option>
                        <option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thrusday">Thrusday</option>
						<option value="Friday">Friday</option>
                     </select>
                  <!--<input class="form-control" id="scheduled_for" name="scheduled_for" type="text" placeholder="Scheduled For" required>-->
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
					<?php 
							$id1 = $_SESSION['staffid'];
							$query=mysqli_query($con,"select * from staff where staffid = $id1 and status = 'Active'")or die(mysqli_error());
							$row=mysqli_fetch_array($query);
							$ans = $row['employment_id'];
					?>
                  Assigned By :
				  
                  <input class="form-control" id="assigned_by" name="assigned_by" type="text" placeholder="Assigned By" value="<?php echo $ans;?>" style="width:150px;" readonly>
               </div>
               <div  class="span6">
                  Assigned To :
				   <select id="assigned_to" name="assigned_to" style="width: 150px;">
						<?php 
							$query=mysqli_query($con,"select * from staff where status = 'Active'")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
						?>
                        <option value="<?php echo $row['employment_id']; ?>"><?php echo $row['employment_id']; ?></option>
						<?php } ?>
                     </select>
                  <!--<input class="form-control" id="assigned_to" name="assigned_to" type="text" placeholder="Assigned To">-->
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  <div class="frontappear">
                     Status :
                     <select id="status" name="status" style="width: 150px;">
                        <option value="Not Approved">Not Approved</option>
                        <option value="Approved" disabled>Approved</option>
                        <option value="In Progress" disabled>In Progress</option>
                        <option value="Completed" disabled>Completed</option>
                        <option value="Urgent" disabled>Urgent</option>
                     </select>
                  </div>
               </div>
               <div  class="span6">
                  <div class="frontappear">
                     Priority :
                     <select id="priority" name="priority" class="form-control" style="width: 50px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
		 
      </div>
      <div class="modal-footer form-group"> 
         <a href="#" class="btn" data-dismiss="modal">Cancel</a> 
         <input type="submit" class="btn btn-primary" name="submit" value="Add Task">
      </div>
	  </form>
   </div>
</div>