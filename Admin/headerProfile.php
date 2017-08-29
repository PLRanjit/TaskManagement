<div id="user-nav" class="navbar navbar-inverse" style="z-index: 9999 !important;">
  <ul class="nav a">
    <li class="dropdown" >
		<a title="" href="#" data-toggle="dropdown" data-target="#a" class="dropdown-toggle">
			<i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $_SESSION['staffid'];?></span><b class="caret"></b>
		</a>
      <ul class="dropdown-menu">
        <li><a href="profile.php"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href='TaskManagement.php?id=<?php echo $_SESSION['staffid'] ?>&tab=mytask'><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>