<?php

echo $_POST["email"];

	//Tühjuse kontroll
	if(empty($_POST["email"])) {
		$email_error ="Unavailable";
	if($_SERVER["REQUEST_METHOD"] == "POST");
	}
?>
<html>
	<head>
		<title> Login </title>
	</head>
	<body>
	
	<h2>Login</h2>
	<form action="user_form.php" method="post">
	<input name="email" type="email" placeholder="E-mail"> <?php echo $email_error; ?> <br>
	<input name="password" type="password" placeholder="Password"><br>
	<input type="submit" value="Log in"> 
	</form>
	<h2>Create user</h2>

		</body>
</html>