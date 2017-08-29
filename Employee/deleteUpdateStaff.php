<?php

			if($_POST['action']=='Delete')
			{
			
				$id= clean($_POST['staffid']);
				$query=mysqli_query($con ,"DELETE from staff where staffid=$id ");
				if($query){
					header("location: UserManagement.php");
				}
				else
					{
					echo "can't delete user";
				}
			
			}
			
			/* update data database */
			if($_POST['action']=='Update User')
			{
				
			$staffid = clean($_POST['staffid']);
			$fullname = clean($_POST['fullname']);
			$employment_id = clean($_POST['employment_id']);
			$dob = clean($_POST['dob']);
			$doj = clean($_POST['doj']);
			$email = clean($_POST['email']);
			$contactno = clean($_POST['contactno']);
			$address = clean($_POST['address']);
			$position = clean($_POST['position']);
			$status = clean($_POST['status']);
			$username = clean($_POST['username']);
			$password = clean($_POST['password']);
			
				
				$query=mysqli_query($con ,"UPDATE staff set fullname='$fullname',employment_id='$employment_id',dob='$dob',doj='$doj',email='$email',contactno='$contactno',address='$address',position='$position',status='$status',username='$username',password='$password' where staffid=$staffid") or die(mysqli_error());
				
					if($query){
						$error=" User Successful Update";
					}
					else
					{
						$error1="Can't Update User";
					}
			
			}
			

?>