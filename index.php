<?php
require_once __DIR__ . '/script.php';
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>oop films</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-dark">
    <h1 class="text-center text-white mt-5">OOP films</h1>
    
    <div class="container mt-5">
        <div class="row g-3">
            <?php foreach ($films as $film) : ?>
                <div class="col-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: <?= $film->title ?></h5>
                            <p class="card-text">Lingua: <?= $film->language ?></p>
                            <p class="card-text">Voto: <?= $film->vote ?></p>
                            <p class="card-text">Genere: <?= $film->genre?->name ?></p>
                            <p class="card-text">Descrizione: <?= $film->genre?->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>