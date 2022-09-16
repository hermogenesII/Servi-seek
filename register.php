<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="registration-form">
		<h1><i class="fa-solid fa-users-between-lines"></i> Registration Form</h1>
		<form action="register_function.php" method="post">
		<div class="last">
			<p> First Name:</p>
			<input type="text" name="lastname" required>
		</div>
		<div class="first">
			<p> Last Name:</p>
			<input type="text" name="firstname" required>
		</div>
		<div class="address">
			<p> Address:</p>
			<input type="text" name="address" required>
		</div>
		<div class="contactno">
			<p>Contact No.:</p>
			<input type="text" name="contact" required>
		</div>
		<div class="gender">
			<p>Gender:</p>
			<select id="Gender">
				<option value="status">Choose gender</option>
				<option value="Single">Male</option>
				<option value="Married">Female</option>
				<option value="Widow">Prefer not to say</option>
			</select>
		</div>
		<div class="gender">
			<p>Civil Status:</p>
			<select id="Status">
				<option value="status">Choose status</option>
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Divorced">Divorced</option>
				<option value="Widow">Widow/ed</option>
			</select>
		</div>
		<div class="check">
			<input type="checkbox"> I Accept the Terms and Conditions
		</div>
		<div class="buttonn2">
			<button type="submit">
				<a class="registerbutton2" href="signup.php">Next</a>
			</button>
		</div>
	</form>
    </div>
</body>
</html>
