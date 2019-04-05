<?php 
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:home.php');
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home Page</title>
 </head>
 <body>
 	<a href="logout.php">LOGOUT</a>
 	<h1>Login Success </h1>
 	<!--<?php echo $_SESSION['username']; ?>-->
 </body>
 </html>

