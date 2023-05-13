<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password =  $_POST['password'];

 if (isset($email)&& isset($password)) {
    echo 'berhasil';
    // pengecekan ke database

    $query = "
    SELECT *
    FORM user
    WHERE email ='$email' AND password ='$password'
    ";

    $select = $conn->query($query);
    if($select->num_rows > 0) {
        $row =$select->fetch_assoc();
        echo '<pre>';
        print($row);
        echo '<pre>';
        die;
        $_SESSION ['email'] = $email;
        $_SESSION ['password'] = $password;
}else {
        header('location: login.php');
    }
}else {
    echo 'gagal';
    die;
    header('location: login.php');
 }