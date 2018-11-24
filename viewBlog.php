<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		
	 
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>View Blog</title>

<style type="text/css">


#wrap {
width:85%;
margin:0 auto;
}

#content {
width: 70%;
height: 300px;
float: left;
text-align: left;
font-size:20px;
overflow: auto; 
}


#sidebar {
width: 30%;
height: 300px;
float: left;
}
	
	

	
</style>
</head>
	
	
	<body>
	<div id="wrap">
	
	
	<div id="header">

	
	<img src="image.gif" alt="Myblog" height="200" width= "100%">
	</div>

	<div id="content">
	
	<?php
	
	
	if( 0 == filesize('myblog.txt')){

		
		header('location:login.html');
		}
			
		else {
			
			
				  $myFile = array_reverse(file("myblog.txt"));
                  echo $AnotherLine = "<br />";
                  foreach($myFile as $line)
                  {
					  
					  

					  //echo  $line. "<br />" ;
					  
				
		
					  
					if(preg_match('/2015/',$line))
					{
						
	
						echo "<h4> $line <br /> </h4>";
					}
					
					  else if ($line <10 )
					  {
                     
					  echo "<h1> $line <br /> </h1>";
					  }
					  
					  else
					  {
                       echo  "<h2> $line <br /> </h2>";
					  }
					  
				
					  
					}
				  
				
				
		}
	
	
	?>

	</div>

	<div id="sidebar">
	<ul>
	<li> <a href="index.php"> Home <br/></a> </li>
	<li><a href="login.html"> Add Entry<br/> </a></li>
	</ul>
	</div>

	
	</div>
	</body>

</html>
