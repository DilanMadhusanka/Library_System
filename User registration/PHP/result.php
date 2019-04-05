<?php 
	session_start();
	if(!isset($_SESSION['output'])) {
		header('location:index.php');
	}

	//print($_SESSION['output']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Searching Result</title>
	<style type="text/css">
		* {
			margin: 0px; padding: 0;
			width: 600px;
			margin : 0 auto;

		}
		.wrapper {
			/*background-image: url('Pictures/dark.jpg');
			background-attachment: fixed;
			background-size: cover;*/
			margin-top: 170px;
			padding-top: 70px;
			height: 400px;
			background-color: lightblue;
			border: 5px solid black;
			border-radius: 10px;
			/*margin-left: 200px;
			margin-right: 400px;*/
			
		}

		.header h1 {
			text-align: center;
			margin-bottom: 20px;
			font-family: Arial;
		}

		.result {
			margin-left: 100px;
		}

	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>Some details about the you search books</h1>
		</div>
		<div class="result">
			<p><?php print($_SESSION['output']); ?></p>
		</div> <!--result-->
	</div> <!--wrapper-->
</body>
</html>