<?php
    include __DIR__.'/partials/functions.php';

    /* RECUPERO IL NUMERO INSERITO NEL CAMPO INPUT */
    if(isset($_GET["passLength"]) && $_GET["passLength"] != '' && is_numeric($_GET["passLength"])) {
        $passLength = $_GET["passLength"];

        /* CONTROLLO CHE IL NUMERO INSERITO SIA MAGGIORE DI 0 */
        if ($passLength > 0) {
            /* ASSOCIO LA PASSWORD RICHIAMANDO LA FUNZIONE */
            $pass = passwordGen($passLength);
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passGenerator</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container py-3">
        <div class="row">
            <div class="col-4 d-flex">
                <form action="./index.php" method="GET">
                    <h1 class="text-white pb-4 fw-bolder">Password Generator</h1>
                    <div class="d-flex">
                        <input type="text" name="passLength" id="password" placeholder="Inserisci la lunghezza" class="form-control">
                        <div class="px-3">
                            <button type="submit" class="btn btn-danger">Genera</button>
                        </div>
                    </div>
                </form>               
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div>
                    <h2 class="text-white py-4">La tua password è: <span class="text-danger"><?php echo $pass ?? '' ?></span></h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>