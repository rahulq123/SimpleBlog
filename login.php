<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		
	 
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Login Page</title>


</head>
	<body>
	
	
	
	<?php session_start();
	
		
		if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$loginpage = array('user' => 'abcd','user2' => 'pass','user3' => 'pass');
		
		/* Check and assign submitted Username and Password to new variable */
		$Name = isset($_POST['Name']) ? $_POST['Name'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($loginpage[$Name]) && $loginpage[$Name] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Name']=$loginpage[$Name];
			header("location:addentry.html");
			exit;
			
		} else {
			
			
			echo "<span style='color:red '>Invalid Login Details</span>";
		}
		}
	?>
	
	</body>

</html>
