<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<style>
    .login {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    border: 2px solid black;
    background-color: lightgray;
}
h1 {
    text-align: center;
}
label {
    display: block;
    margin: 10px 0;
}
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
input[type="submit"] {
    background-color: blue;
    color: white;
    border: 1px solid black;
    border-radius: 3px;
    padding: 10px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: gray;
}

</style>
<body>
	<div class="login">
		<h1>Login</h1>
        <br>
		<form action="login.php" method="post">
			<label>Username:</label>
			<input type="text" name="username" placeholder="Masukan Username">
			<label>Password:</label>
			<input type="password" name="password" placeholder="Masukan Password">
            <label type="isian-jenis kelamin">Syarat&Ketentuan</label>
            <input type="checkbox"></label>
            <br>
			<input type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>
