<?php

require_once("./connect.php");

$sql = "UPDATE games SET
       name_of_game = :name_of_game,
       ganre_of_game = :ganre_of_game,
       description_game = :description_game,
       price = :price
    WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name_of_game", $_POST["name_of_game"], PDO::PARAM_STR);
$stmt->bindParam(":ganre_of_game", $_POST["ganre_of_game"], PDO::PARAM_STR);
$stmt->bindParam(":description_game", $_POST["description_game"], PDO::PARAM_STR);
$stmt->bindParam(":price", $_POST["price"], PDO::PARAM_INT);
$stmt->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$stmt->execute();

header("Location: ./index.php");
