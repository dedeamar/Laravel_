<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("location: index.php");
    exit;
}

if(isset($_GET["logout"])) {
    session_destroy();
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
	<div class="login">
