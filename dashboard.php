<?php
session_start();

if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) : ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h2><?php echo 'Kamu berhasil login'?></h2>
    <h3><?php echo $_SESSION ['email'] ?></h3>
    <h4><?php echo $_SESSION ['password']?></h4>
    <div>
        <a href="logout.php">Logout</a> 
    </div>
</body>
</html>
    
<?php else :
    header('location:index.php');
endif; ?>
