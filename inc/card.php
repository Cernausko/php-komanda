<?php
$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
$komanda = $_GET['komanda'];
$amzius = $_GET['amzius'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dalyvio kortelė</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container mt-5">
            <div class="card">
                <h3 class="card-title">Dalyvio kortelė</h3>
                <p class="card-text"><strong>Vardas:</strong> <?php echo $vardas; ?></p>
                <p class="card-text"><strong>Pavardė:</strong> <?php echo $pavarde; ?></p>
                <p class="card-text"><strong>Komanda:</strong> <?php echo $komanda; ?></p>
                <p class="card-text"><strong>Amžius:</strong> <?php echo $amzius; ?></p>
            </div>
            <a href="index.php" class="btn btn-primary mt-3">Grįžti atgal</a>
        </div>
    </body>
</html>

