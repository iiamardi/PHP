SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE 'user' (
    'id' int(11) NOT NULL,
    'name' int(100) NOT NULL,
    'surname' int(100) NOT NULL,
    'email' int(100) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO 'user' ('id', 'name', 'surname', 'email') VALUES (2, 'test', 'test', 'test@test.com' );

ALTER TABLE  'user'
ADD PRIMARY KEY ('id');
 ALTER TABLE 'user'
 MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
 <!DOCTYPE html>
 <html>
 <head></head>
 <body>
 <form action="add.php" method="POST">
 <input type="text" name="name" placeholder="Name"><br>
 <input type="text" name="surname" placeholder="Surname"><br>
 <input type="email" name="email" placeholder="Email"><br>
 <button type="submit" name="submit">Add</button>
 </form>
 </body>
 </html>

