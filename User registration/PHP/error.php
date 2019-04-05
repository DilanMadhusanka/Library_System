<!DOCTYPE html>
<html>
<head>
	<title>error!</title>

	<style type="text/css">
		body {
			width: 1000px;
			margin: 0 auto;
			/*background-size: cover;*/
		}
		.main {
			background-image: url("Pictures/errorpic.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			padding-bottom: 500px;
			margin-top: -80px;
			/*background-color: yellow;*/
		}

		.header h2 {
			padding-top: 300px; 
			text-align: center;
			font-size: 50px;
			color: white;
			font-family: Arial;
		}

		.link {
			margin-left: 350px;
		}

		.link a {
			text-decoration: none;
			color: black;
			font-size: 25px;
		}
		.link a:hover {
			color: red;
		}

		button {
			/*background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 16px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			/*-webkit-transition-duration: 0.4s; /* Safari */
			/*transition-duration: 0.4s;*/
			cursor: pointer;
			background-color: white; 
  			color: black; 
  			border: 2px solid #4CAF50;
		}

		button:hover {
  			background-color: #4CAF50;
  			color: white;
  		}

	</style>
</head>
<body>
	<div class="main">
		<div class="wrapper">
			
			<div class="header">
				<h2>Invalid Username or Password!</h2>
			</div> <!--header-->

			<div class="link">
				<button><a href="login.php">Return to Login page</a></button>
			</div> <!--link-->
						
		</div> <!--wrapper-->
	</div> <!--main-->
</body>
</html>