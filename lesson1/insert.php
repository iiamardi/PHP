<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=test12", "root", "");
    $sql = "ALTER TABLE users ADD email VARCHAR(255)";
    $pdo->exec($sql);
    echo"Column created";
}catch(PDOException $e){
    echo "Error creating column: " . $e->getMessage();
}
?>
