<?php 
	session_start();

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'userregistration');

	$name = $_POST['user'];
	$pass = $_POST['password'];

	$s = "select * from usertable where name = '$name'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1) {
		echo '<div style="font-size:1.25em ;color:red; font-size: 50px; margin-top: 300px; margin-left: 450px;">Username Already Taken!</div>';
		echo '<div style="font-size:1.25em ; font-size: 30px; margin-left: 560px;">Back to previous page</div>';
	}
	else {
		$reg = "insert into usertable(name , password) values ('$name', '$pass')";
		mysqli_query($con, $reg);
		header('location: home.php');
		echo "Registration Succesfull!";
	}

 ?>