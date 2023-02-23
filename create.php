<?php

require_once("./connect.php");

$sql = "INSERT INTO games(
       name_of_game,
       ganre_of_game,
       description_game,
       price
    ) VALUES (
    :name_of_game,
    :ganre_of_game,
    :description_game,
    :price
    )";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name_of_game", $_POST["name_of_game"], PDO::PARAM_STR);
$stmt->bindParam(":ganre_of_game", $_POST["ganre_of_game"], PDO::PARAM_STR);
$stmt->bindParam(":description_game", $_POST["description_game"], PDO::PARAM_STR);
$stmt->bindParam(":price", $_POST["price"], PDO::PARAM_INT);

$stmt->execute();

header("Location: ./index.php");
