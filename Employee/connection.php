<?php

			$_dbHost = "localhost";
			$_dbUser = "root";
			$_dbPass = "";
			$_dbName = "greycellstms";
			$_connFailed = "Database connection failed.";
			$_dbConnFailed = "Database selection failed.";
			$con = mysqli_connect($_dbHost, $_dbUser, $_dbPass);
		

			//validate host connection
			if(!$con) {
				echo $_connFailed;
			}
			//validate database 
			if(!mysqli_select_db($con, $_dbName)) {
				echo $_dbConnFailed;
			} 
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$_dbHost = "localhost";
		$_dbUser = "root";
		$_dbPass = "";
		$_dbName = "greycellstms";
		$con = mysqli_connect($_dbHost, $_dbUser, $_dbPass);
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($con, $str);
		}
		
?>