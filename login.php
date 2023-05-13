<?php
session_start();

if(isset($_SESSION["username"])) {
    header("location: logout.php");
    exit;
}

// Cek data
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["username"] == "admin" && $_POST["password"] == "password") {
        $_SESSION["username"] = $_POST["username"];
        header("location: logout.php");
        exit;
    } else {
        $error = "Password Kamu Salah!!.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
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
    </style>
	<div class="login">
		<h1>Login</h1>
		<form action="" method="post">
			<label>Username:</label>
			<input type="text" name="username" placeholder="Enter Username">
			<label>Password:</label>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<?php if(isset($error)) { echo "<p class='error'>" . $error . "</p>"; } ?>
		</form>
	</div>
</body>
</html>
