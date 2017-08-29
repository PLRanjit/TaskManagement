<div class="widget-box">
<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
  <h5>Personal-info</h5>
</div>
<div class="widget-content nopadding">
  <form class="form-horizontal" role="form" action="profile.php" method="post">
	<div class="control-group">
	<input type="hidden" name="staffid" value="<?php echo $staffid; ?>" >
	  <label class="control-label">Full Name :</label>
	  <div class="controls">
		<input id="fullname" name="fullname" type="text" placeholder="Full Name"  value="<?php echo $fullname;?>">
	  </div>
	</div>
		<div class="control-group">
	  <label class="control-label">UserName :</label>
	  <div class="controls">
		<input class="form-control" id="username" name="username" type="text" placeholder="UserName" value="<?php echo $username;?>" readonly>
	  </div>
	</div>
		<div class="control-group">
	  <label class="control-label">Password :</label>
	  <div class="controls">
		<input class="form-control" id="password" name="password" type="password" value="<?php echo $password;?>" readonly>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label">Employement Id :</label>
	  <div class="controls">
		<input class="form-control" id="employment_id" name="employment_id" type="text" placeholder="Employement Id" value="<?php echo $employment_id;?>">
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label">D.O.B :</label>
	  <div class="controls">
		<div class="input-append date form_datetime">
			<input class="form-control from_date" id="dp4" name="dob" type="date" value="<?php echo $dob;?>" placeholder="Birth Date">
			<span class="add-on"><i class="icon-th"></i></span>
		</div>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label">D.O.J :</label>
	  <div class="controls">
		<div class="input-append date form_datetime">
			<input class="form-control from_date" id="dp4" name="doj" type="date" value="<?php echo $doj;?>" placeholder="Joining Date">
			<span class="add-on"><i class="icon-th"></i></span>
		</div>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label">Email Id :</label>
		<div class="controls">
			<input class="form-control" id="email" name="email" type="email" placeholder="E-mail Id" value="<?php echo $email;?>" >
		</div>
	</div>
	<div class="control-group">
	  <label class="control-label">Mobile No :</label>
		<div class="controls">
			<input class="form-control" id="notel" name="contactno" type="text" placeholder="Mobile/telephone" value="<?php echo $contactno;?>">
		</div>
	</div>
	<div class="control-group">
	  <label class="control-label">Address :</label>
		<div class="controls">
			 <textarea  class="span11" id="address" name="address" type="text" placeholder="Address" value="<?php echo $address;?>"><?php echo $address;?></textarea>
		</div>
	</div>
	<div class="control-group">
	  <label class="control-label">Position :</label>
		<div class="controls">
			<input class="form-control" id="position" name="position" type="text" placeholder="Position" value="<?php echo $position;?>">
		</div>
	</div>
	<div class="form-actions">
	  <input type="submit" class="btn btn-primary pull-right" name="action" value="Update">
	</div>
  </form>
</div>
</div>