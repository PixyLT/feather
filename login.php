<!DOCTYPE html>
<html>
<head>
	<title>Feather</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script></head>
<body>
	
	<div class="form">

		<p>Feather</p>
		<p class="status"></p>
		<form id="loginForm" method="post">
			<input type="text" class="textinput" name="username" placeholder="Username" required>
			<input type="password" class="textinput" name="password" placeholder="Password" required>
			<div class="buttoncontainer">
				<a href="#" id="register" class="buttons">New user? Register</a>
				<input type="submit" id="submit" class="buttons" value="Login">
			</div>
		</form>
		<form id="resetPasswordForm" method="post">
			<input type="text" class="textinput" name="username" placeholder="Username" required>
			<input type="password" class="textinput" name="password" placeholder="Password" required>
			<div class="buttoncontainer">
				<a href="#" id="reset" class="buttons">Reset Password?</a>
				<input type="submit" id="submit" class="buttons" value="Login">
			</div>
		</form>
		<form id="registerForm" method="post">
			<input type="text" class="textinput" name="username" placeholder="Username" required>
			<input type="password" class="textinput" name="password" placeholder="Password" required>
			<div class="buttoncontainer">
				<a href="#" id="login" class="buttons">Already a user? Log in</a>
				<input type="submit" id="submit" class="buttons" value="Register">
			</div>
		</form>
	</div>

	
	<script src="scripts/login.js"></script>
	<script src="scripts/loginForm.js"></script>
</body>
</html>