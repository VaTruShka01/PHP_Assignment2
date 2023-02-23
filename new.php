<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>New Game</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./new.php">New Game</a></li>
            </ul>
        </nav>
        <h1 class="mt-3" >New Game</h1>
        
        <form class="mt-5" action="./create.php" method="post">
            <div class="form-group mb-3">
                <label for="name_of_game">Game Name</label><br>
                <input type="text" name="name_of_game" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="ganre_of_game">Genre</label><br>
                <input type="text" name="ganre_of_game" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="description_game">Description</label><br>
                <input type="text" name="description_game" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="price">Price $</label><br>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>