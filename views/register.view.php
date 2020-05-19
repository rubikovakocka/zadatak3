<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php include 'views/css/style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<h1>Register</h1>
	<h3>Please, fill all the fields.</h3>
	
	<form method="POST" action="/register" id="register">
		<pre>E-mail:		<input type="email" name="email" placeholder="E-mail..." required></pre>
		<pre>Name:		<input type="text" name="name" placeholder="Name..." required></pre>
		<pre>Password:	<input type="password" name="password" placeholder="Password..." required></pre>
		<button type="submit">Submit</button>
		<button type="reset">Clear</button>
	</form>

    <div align="center">
        <form action="/login">
            <p>Already have account?</p>
            <button>Login</button>
        </form>
    </div>
</body>
</html>