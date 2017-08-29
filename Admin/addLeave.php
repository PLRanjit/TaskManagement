<div class="buttons">
   <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add Leave</a>
   <div class="modal hide" id="modal-add-event" >
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">x</button>
         <h3>Add a Leave</h3>
      </div>
      <div class="modal-body" style="height:200px;">
         <form class="form-horizontal" role="form" action="addLeaveDB.php" method="post">
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Employee Id:
				  	<select id="employment_id" name="employment_id" style="width: 150px;">
						<?php 
							$query=mysqli_query($con,"select * from staff where status = 'Active'")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
						?>
                        <option value="<?php echo $row['employment_id']; ?>"><?php echo $row['employment_id']; ?></option>
						<?php } ?>
                     </select>
					 
                    <!-- <input class="form-control from_date" id="dp4" name="sdate" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;" required>
                     <span class="add-on"><i class="icon-th"></i></span>-->
               </div>
            </div>
         </div>
		 
         <div class="form-group">
            <div class="row-fluid">
			 <?php 
				$date=date("Ym");
				$sdate=date('Y-m-d');
				$edate=date('Y-m-d', strtotime("+3 day"));
				?>
			 <div class="form-group">
				<div class="row-fluid">
				   <div  class="span6"> 
					  Leave From :
					  <div class="input-append date form_datetime">
						 <input class="form-control from_date" id="dp4" name="Leave_from" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;" required>
						 <span class="add-on"><i class="icon-th"></i></span>
					  </div>
				   </div>
				   <div  class="span6">
					  Leave To :
					  <div class="input-append date form_datetime">
						 <input class="form-control to_date"  id="dp5" name="Leave_To" type="date" value="<?php echo $edate;?>" placeholder="Due Date" style="width: 130px;" required>
						 <span class="add-on"><i class="icon-th"></i></span>
					  </div>
				   </div>
				</div>
			 </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span12">
                  Task Desc :
                  <textarea class="form-control" id="Reason_for_leave" name="Reason_for_leave" type="textarea" placeholder="Task Desc" required></textarea>
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