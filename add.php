<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];


    $sql = "insert into users (name, surname, email, username, password) values (:name, :surname, :email, :username, :password)";
    $sqlQuery = $conn->prepare($sql);
    
    $sqlQuery->bindParam(':name', $name); 
    $sqlQuery->bindParam(':surname', $surname); 
    $sqlQuery->bindParam(':email', $email); 
    $sqlQuery->bindParam(':username', $username); 
    $sqlQuery->bindParam(':password', $password); 
     
    $sqlQuery->execute();
    
    echo "Data saved successfully";
}

?>