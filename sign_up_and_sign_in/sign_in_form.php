<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sign in</title>
		<link rel="stylesheet" type="text/css" href="./sign_in_style.css">
</head>
<body>
	<div class="sign_in_form_div">
		<form class="sign_in_form">
			<h4>sign in</h4>
			<label>Username</label>
			<input required type="text" name="uname" placeholder="Enter your email !!!" />

			<label>Password</label>
			<input required type="password" name="password" placeholder="Enter your password !!!" /> 

			<input type="submit" name="signin" value="SIGN IN" />
			<div>
				<span>Don't have an account?</span><span><a href="./sign_up_form.php">Sign Up</a></span>
			</div>
		</form>
	</div>
</body>
</html>