<?php

$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';
$password = isset($_GET['username']) ? htmlspecialchars($_GET['password']) : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form{
      background-color: lightblue;
      padding: 10px;
      display: flex;
      flex-direction: column;
      text-align: start;
      width: 400px;
      margin: auto;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      border-radius: 10px;
    }
    input{
      background-color: whitesmoke;
      border: none;
      padding: 5px 10px;
      border-radius: 10px;
      outline: none;
    }
    h3{
      font-family:Arial, Helvetica, sans-serif;
    }
    div{
      margin: auto;
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      flex-direction: column;
      background-color: lightpink;
      color: whitesmoke;
      padding: 10px;
      width: 400px;
      margin-top: 10px;
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <form action="" method="get">
  <label for="">Username</label><br>
  <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>"> <br>
      <label for="">password</label><br>
  
   <input type="text" name="password" id="password" placeholder="password" value="<?php echo $password; ?>"> <br>
  <br>
  <input type="submit" value="submit"> 
  </form>
  </body>
</html>
<?php 

if ($username !== '' && $password !== ''){
  echo "<div>";
  echo "<h3> Submitted Data: </h3>";
  echo "Username: " . $username . "<br>";
  echo "Password: " . $password . "<br>";
  echo "</div>";
}