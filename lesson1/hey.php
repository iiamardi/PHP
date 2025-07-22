<?php
 

try{
$pdo = new PDO("mysql:host=localhost;dbname=test12", "root", "");

$sql = "ALTER TABLE users DROP COLUMN password";

$pdo ->exec($sql);

echo "Column dropped";

}catch (PDOException $e){
  echo $e->getMessage();
}
?>
   <label for="">password</label><br>
  
   <input type="text" name="password" id="password" placeholder="password" value="<?php echo $password; ?>"> <br>