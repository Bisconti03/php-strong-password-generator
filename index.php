<?php 

include __DIR__ . '/function.php';


if (isset($_GET['password'])) {
    $password = createPassword();
}
             
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP password generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    

<div class="container"></div>
        <h1>PHP Password Generator</h1>

        <form  method="GET" name="generator">
            <label for="password"></label>
            <p>Inserisci quanti caratteri dovrà avere la tua password</p>
            <input type="text" name="password" id="idPassword">
            <button type="submit">Genera</button>
            <button type="reset">Annulla</button>
        </form>
        </div>
</body>
</html>
