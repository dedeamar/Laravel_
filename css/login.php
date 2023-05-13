 <?php
 session_start();
 ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login data</title>
</head>
<body>
    <style>
  * {
    background-color: ;
  }
        .login {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    border: 2px solid #ccc;
    background-color: #f2f2f2;
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
    background-color: #4CAF50;
    color: white;
    border: 5px solid blue;
    border-radius: 3px;
    padding: 10px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #45a049;
}

    </style>
    <form method="POST" action="login_proses.php">
        <label>email</label>
        <input type="text" name="email" placeholder="email">
        <br>
        <label>password</label>
        <input type="text" name="password" placeholder="password">
        <br>
        <button type="submit">login</button>
    </form>    
</body>
</html>