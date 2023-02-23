<?php

require_once("./connect.php");

    $sql = "SELECT
        id, 
        name_of_game,
       ganre_of_game,
       description_game,
       price
    FROM
        games
    WHERE
        id = :id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Edit Author</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./new.php">New Game</a></li>
            </ul>
        </nav>
        <h1 class="mt-3">Edit Game</h1>
        
        <form action="./update.php" method="post" class="mt-5">
            <input type="hidden" name="id" value="<?= $row->id ?>">
            <div class="form-group mb-3">
                <label for="name_of_game">Game</label><br>
                <input type="text" class="form-control" name="name_of_game" value="<?= $row->name_of_game ?>">
            </div>
            <div class="form-group mb-3">
                <label for="ganre_of_game">Genre</label><br>
                <input type="text" class="form-control" name="ganre_of_game" value="<?= $row->ganre_of_game ?>">
            </div>
            <div class="form-group mb-3">
                <label for="description_game">Description</label><br>
                <input type="text" class="form-control" name="description_game" value="<?= $row->description_game ?>">
            </div>
            <div class="form-group mb-3">
                <label for="price">Price</label><br>
                <input type="number" class="form-control" name="price" value="<?= $row->price?>">
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </body>
</html>
