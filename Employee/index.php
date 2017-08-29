<?php
	include ('connection.php');
	session_start();
	if(isset($_POST['username']) && $_POST['password']){

		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);
		
		$hash_pass = $password;
		
		$query = mysqli_query($con ,"select * from staff where status = 'Active' and
		 username='".$username."' and password='".$hash_pass."' limit 1");
		 
		$count_user = mysqli_num_rows($query);
		if($count_user==1){
			$row = mysqli_fetch_array($query);
			$_SESSION['name'] = $row['fullname'];
			$_SESSION['staffid'] = $row['staffid'];
			
			$_SESSION['id'] = '';
			header("location:dashboard.php ");
		}else{
			$error = 'Error Username and Password.';	
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Task Management System</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox"> 
			<?php
			if(empty($error)){}
			else if($error){?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
			<strong>Login Fail. </strong><?php echo $error; ?>
			</div>
			<?php }?>		
            <form id="loginform" class="form-vertical" role="form" action="index.php" method="post">
				<div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input class="form-control" id="username" name="username" placeholder="Username" required="" type="text" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input class="form-control" id="password" name="password" placeholder="Password" required="" type="password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <!--<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>-->
                    <span class="pull-right"><button type="submit" class="btn btn-success btn-sm" /> Login</button></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>
</html>
