   <?php

   try{
      $pdo = new PDO("mysql:host=localhost;dbname=test12", "root". "");

      $username = "Jack";
      $password = password_hash("mypassword", PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
      $pdo->exec($sql);
      echo "New record created";
   }catch(PDOException $e){
      echo $e->getMessage();
   }

   ?>