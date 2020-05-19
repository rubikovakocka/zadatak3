<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php include 'views/css/style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<title>Log in</title>
</head>
<body>
	<h1>Log in</h1>
	<h3>Please enter your e-mail and password</h3>	

	<form method="POST" action="/login" id="login">
		<pre>E-mail:	  <input type="email" name="email" placeholder="E-mail..." required></pre>
		<pre>Password: <input type="password" name="password" placeholder="Password..." required></pre>
		<button type="submit">Submit</button>
	</form>

</body>
</html>