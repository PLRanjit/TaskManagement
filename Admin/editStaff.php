<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-edit"></i></span>
	<h5>Edit User Profile</h5>
  </div><br>
	<h5 class="control-label" style="text-align:center;">Staff Id: <?php echo $staffid; ?> / User Name : <?php echo $username; ?></h5>
	<hr>
	<form class="form-horizontal widget-content" role="form" action="UserManagement.php" method="post">
	
		<div class="form-group">
			<div class="row-fluid">
			   <div  class="span6">
				<input type="hidden" name="staffid" value="<?php echo $staffid; ?>" > 
				  Staff Name :
				  <input class="form-control" id="fullname" name="fullname" type="text" placeholder="Full Name"  value="<?php echo $fullname;?>">
			   </div>
			   <div  class="span6">
				  Employement Id :
				  <input class="form-control" id="employment_id" name="employment_id" type="text" placeholder="Employement Id" value="<?php echo $employment_id;?>">
			   </div>
			</div>
		 </div>
		 <div class="form-group">
			<div class="row-fluid">
			   <div  class="span6">
				  D.O.B :
					<div class="input-append date form_datetime">
						<input class="form-control from_date" id="dp4" name="dob" type="date" value="<?php echo $dob;?>" placeholder="Birth Date" style="width: 130px;">
						<span class="add-on"><i class="icon-th"></i></span>
					</div>
			   </div>
			   <div  class="span6">
				  D.O.J :
				  <div class="input-append date form_datetime">
						<input class="form-control from_date" id="dp4" name="doj" type="date" value="<?php echo $doj;?>" placeholder="Joining Date" style="width: 130px;">
						<span class="add-on"><i class="icon-th"></i></span>
					</div>
			   </div>
			</div>
		 </div>
		 
		 <div class="form-group">
			<div class="row-fluid">
			   <div  class="span6">
				  Email Id :
				  <input class="form-control" id="email" name="email" type="email" placeholder="E-mail Id" value="<?php echo $email;?>" >
			   </div>
			   <div  class="span6">
				  Mobile No :
				  <input class="form-control" id="notel" name="contactno" type="text" placeholder="Mobile/telephone" value="<?php echo $contactno;?>">
			   </div>
			</div>
		 </div>
		 
		 <div class="form-group">
			<div class="row-fluid">
			   <div  class="span6">
				  Address :
				  <textarea rows="2" cols="50" class="form-control" id="address" name="address" type="text" placeholder="Address" value="<?php echo $address;?>"><?php echo $address;?></textarea>
			   </div>
			   <div  class="span6">
				  Position :
				  <input class="form-control" id="position" name="position" type="text" placeholder="Position" value="<?php echo $position;?>">
			   </div>
			</div>
		 </div>
		 
		 <div class="form-group">
			<div class="row-fluid">
			   <div  class="span6">
				  Project :
				  <textarea rows="2" cols="50" class="form-control" id="project" name="project" type="text" placeholder="Project" value="<?php echo $project;?>"><?php echo $project;?></textarea>
			   </div>
			   <div  class="span6">
				  Authority :
				  <input class="form-control" id="power" name="power" type="text" placeholder="Position" value="<?php echo $power;?>">
			   </div>
			</div>
		 </div>
		 
		<div class="form-group">
			<div class="row-fluid">
			   <div  class="span6">
				  UserName :
				  <input class="form-control" id="username" name="username" type="text" placeholder="UserName" value="<?php echo $username;?>">
			   </div>
			   <div  class="span6">
				  Password :
				  <input class="form-control" id="password" name="password" type="password" value="<?php echo $password;?>">
			   </div>
			</div>
		 </div>
		 
		 <div class="form-group">
			<div class="row-fluid">
			   <div  class="span6">
				  Status :
				  <select id="status" name="status"class="form-control" style="width: 150px;">
					<option value="Active" <?php if($status=="Active") echo "selected" ?>>Active</option>
					<option value="InActive" <?php if($status=="InActive") echo "selected" ?>>InActive</option>
				  </select>
			   </div>
			</div>
		 </div>
			 
		<br>
		<div class="form-group">
			<div>
			<input type="hidden" value="Update User" name="action">
				 <input type="submit" class="btn btn-primary pull-right" name="action" value="Update User">
			</div>
			<div>
				<a href="UserManagement.php" class="btn" data-dismiss="modal">Cancel</a> 
			</div>
			
		</div>
		<br>
	</form>
</div>