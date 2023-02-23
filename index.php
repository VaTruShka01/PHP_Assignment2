<?php

$sql = "SELECT id, name_of_game, price, ganre_of_game, description_game
    FROM games";

require_once("./connect.php");

$rows = [];
if ($conn) {
    $rows = $conn->query($sql)->fetchAll(PDO::FETCH_OBJ);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <li><a href="./">Home</a></li>
        <li><a href="./new.php">New Game</a></li>

    </nav>


    <h1 class="mt-3">Games</h1>

    <table class="table table-striped">

        <thead>
            <tr>

                <th>ID</th>
                <th>Game</th>
                <th>Genre</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($rows as $row) : ?>

                <tr>
                    <td><?= $row->id?></td>
                    <td><?= $row->name_of_game?></td>
                    <td><?= $row->ganre_of_game?></td>
                    <td><?= $row->price?></td>
                    <td><?= $row->description_game ?></td>
                    <td>
                        <a href="./edit.php?id=<?= $row->id ?>">Edit</a>
                        <a href="./delete.php?id=<?= $row->id ?>" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                    </td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>