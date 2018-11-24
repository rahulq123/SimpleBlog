<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		
	 
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Add Entry Page</title>
</head>
	<body>

	<?php
	
	$title = $_POST['title'];
	$body = $_POST['bodyarea'];  
	$BlogDate = date('l jS F Y'.",".'G:i:a T');
	$Blogline = "<hr>";
	
	$filename = "myblog.txt";
	$filehandle = fopen($filename, "a");
	fwrite($filehandle, $Blogline . "\r\n");
	fwrite($filehandle, $body . "\r\n");
	fwrite($filehandle, $title . "\r\n");
	fwrite($filehandle, $BlogDate . "\r\n");
    fwrite($filehandle, "\r\n");
	fclose($filehandle);

	
	header('location:viewBlog.php');
	
	

	?>
	
	

	
	
	</body>

</html>
