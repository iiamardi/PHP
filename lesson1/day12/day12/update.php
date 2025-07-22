<?php
session_start();
include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $tempPass = $_POST['password'];

    if(empty($name) || empty($surname) || empty($username) || empty($email)){
        echo "You need to fill all the fields";
        header("refresh:2; url=profile.php");
        exit();
    }

    if (!empty($tempPass)) {
        $password = password_hash($tempPass, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email, password=:password WHERE id=:id";
    } else {
        $sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email WHERE id=:id";
    }

    $updateSql = $conn->prepare($sql);
    $updateSql->bindParam(':id', $id);
    $updateSql->bindParam(':username', $username);
    $updateSql->bindParam(':name', $name);
    $updateSql->bindParam(':surname', $surname);
    $updateSql->bindParam(':email', $email);
    
    if (!empty($tempPass)) {
        $updateSql->bindParam(':password', $password);
    }

    $updateSql->execute();

    // Pasi ndryshon username ose password → logout për siguri
    header('Location: logout.php');
    exit();
}
?>
