<!DOCTYPE html>
<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="Css/style.css">
</head>
<body>
	<div class="container">

		<h2 class="header">Welcome to Godzila</h2>
		<h3 class="sub_header">Online Library System</h3>

		<div class="row">
			<div class="col-md-6">
				<h2>Login Here</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div> <!--form-group-->

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div> <!--form-group-->

					<button type="submit" class="btn-primary">Login</button>
				</form>
			</div> <!--col-md-6-->

			<div class="col-md-6">
				<h2>Register Here</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div> <!--form-group-->

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div> <!--form-group-->

					<button type="submit" class="btn-primary">Register</button>
				</form>
			</div> <!--col-md-6-->

		</div> <!--row-->
	</div> <!--container-->
</body>
</html>