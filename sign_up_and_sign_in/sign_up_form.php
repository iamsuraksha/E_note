 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign_up_form</title>
	<link rel="stylesheet" type="text/css" href="./sign_up_style.css">
</head>
<body>
	<div class="sign_up_form_div">
		<form class="sign_up_form" action="database.php" method="post">
			<h4>Create and account.</h4>
			<label>Full Name</label>
			<input required type="text" name="fname" placeholder="Enter your full name !!!" />

			<label>Email</label>
			<input required type="email" name="email" placeholder="Enter your email !!!" />

			<label>Password</label>
			<input required type="password" name="password" placeholder="Enter your password !!!" /> 

			<label>Conform-password</label>
			<input required type="password" name="password" placeholder="Re-enter password !!!" />
 
			<input type="submit" name="signup" value="SIGN UP" />
			<div>
				<span style="text-transform: uppercase;">i already have an account.</span><span><a href="./sign_in_form.php">Sign In</a> </span>
			</div>
		</form>
</body>
</html>