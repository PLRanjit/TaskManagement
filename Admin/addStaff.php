<div class="buttons">
   <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new user</a>
   <div class="modal hide" id="modal-add-event">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">×</button>
         <h3>Add a new User</h3>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" role="form" action="addNewStaff.php" method="post">
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Staff Name :
                  <input class="form-control" id="fullname" name="fullname" type="text" placeholder="Full Name" required">
               </div>
               <div  class="span6">
				<?php 
					$emparr = array();
					$query1 = mysqli_query($con, "select * from staff") or die(mysqli_error());
					while ($row = mysqli_fetch_array($query1)) {
						if (!in_array($row['employment_id'], $emparr)) {
						array_push($emparr, $row['employment_id']);
						}
					}
					do{
					$a = mt_rand(100000,999999);
					$se = "emp".$a;
					}while(in_array($se, $emparr));
					?>
                  Employement Id :
                  <input class="form-control" id="employment_id" name="employment_id" type="text" placeholder="Employement Id" value="<?php echo $se;?>" required>
               </div>
            </div>
         </div>
		 <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  D.O.B :
					<div class="input-append date form_datetime">
						<input class="form-control from_date" id="dp4" name="dob" type="date" placeholder="Birth Date" style="width: 130px;">
						<span class="add-on"><i class="icon-th"></i></span>
					</div>
               </div>
               <div  class="span6">
                  D.O.J :
				  <div class="input-append date form_datetime">
						<input class="form-control from_date" id="dp4" name="doj" type="date" placeholder="Joining Date" style="width: 130px;">
						<span class="add-on"><i class="icon-th"></i></span>
					</div>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Email Id :
                  <input class="form-control" id="email" name="email" type="email" placeholder="E-mail Id" required>
               </div>
               <div  class="span6">
                  Mobile No :
                  <input class="form-control" id="notel" name="notel" type="text" placeholder="Mobile/telephone" required>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Address :
                  <textarea rows="2" cols="50" class="form-control" id="address" name="address" type="text" placeholder="Address" required></textarea>
               </div>
               <div  class="span6">
                  Position :
                  <input class="form-control" id="position" name="position" type="text" placeholder="Position" required>
               </div>
            </div>
         </div>
		 <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Project :
                  <textarea rows="2" cols="50" class="form-control" id="project" name="project" type="text" placeholder="Project" required></textarea>
               </div>
               <div  class="span6">
                  Authority :
                  <input class="form-control" id="power" name="power" type="text" placeholder="1 for admin and ceo 0 for others" required>
               </div>
            </div>
         </div>
		<div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  UserName :
                  <input class="form-control" id="username" name="username" type="text" placeholder="UserName" required>
               </div>
               <div  class="span6">
                  Password :
                  <input class="form-control" id="password" name="password" type="password" required>
               </div>
            </div>
         </div>
		 
		 
      </div>
      <div class="modal-footer form-group"> 
         <a href="#" class="btn" data-dismiss="modal">Cancel</a> 
         <input type="submit" class="btn btn-primary" name="submit" value="Add User">
      </div>
	  </form>
   </div>
</div>