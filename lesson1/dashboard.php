<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border: 1px solid black;
        }
        td,th{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <?php
    include_once('config.php');
    $sql = "SELECT * FROM user";
    $getuser = $conn->prepare($sql);
    $getuser->execute();
    $users=$getuser->fetchAll()
    ?>
    <br><br>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user) {
                # code...
        
            ?>
            <tr>
                <td> <?= $user['id'] ?></td>
                <td> <?= $user['name'] ?></td>
                <td> <?= $user['surname'] ?></td>
                <td> <?= $user['email'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="form.html">Add Users</a>
</body>
</html>