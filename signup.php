<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="registration-form">
		<h1><i class="fa-solid fa-users-rectangle"></i> Register<br> <p class="create">(Create your Account for Free)</p></h1>
		<form action="register_function.php" method="post">
		<div class="user">
			<p>User Name:</p>
			<input type="text" name="username" required>
		</div>
		<div class="email">
			<p>Email Address:</p>
			<input type="text" name="email" required>
		</div>
		<div class="passwordd">
			<p>Password:</p>
			<input type="password" name="password" required>
		</div>
		<div class="confirm">
			<p>Confirm Password :</p>
			<input type="password" name="confirm-password" required>
		</div>
		<div class="signup">
				<input class="registerbutton" type="submit" name="submit" value="Sign up" placeholder="Sign Up">
		</div>
		<div class="login">
          Already Have an Account? <a href="Login.html"><u>Login</u></a>
        </div>
    </form>
	</div>
</body>
</html>
