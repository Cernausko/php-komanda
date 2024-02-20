<?php
require_once 'inc/functions.php';

// Patikriname ar forma buvo pateikta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vardas = $_POST["vardas"];
    $pavarde = $_POST["pavarde"];
    $komanda = $_POST["komanda"];
    $amzius = $_POST["amzius"];
    
    if (patikrintiDuomenis($vardas, $pavarde, $komanda, $amzius)) {
        issaugotiZaidejoDuomenis($vardas, $pavarde, $komanda, $amzius);
    }
}
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krepšinio turnyro dalyvių forma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>

        <div class="container mt-5">
            <h1>Krepšinio turnyro dalyvių forma</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="vardas">Vardas:</label>
                    <input type="text" class="form-control" id="vardas" name="vardas">
                </div>
                <div class="form-group">
                    <label for="pavarde">Pavardė:</label>
                    <input type="text" class="form-control" id="pavarde" name="pavarde">
                </div>
                <div class="form-group">
                    <label for="komanda">Komanda:</label>
                    <input type="text" class="form-control" id="komanda" name="komanda">
                </div>
                <div class="form-group">
                    <label for="amzius">Amžius:</label>
                    <input type="text" class="form-control" id="amzius" name="amzius">
                </div>
                <button type="submit" class="btn btn-primary">Pateikti</button>
            </form>
            <h2 class="mt-5">Žaidėjų sąrašas</h2>
            <table class='table table-bordered'>
                <tr>
                    <th>Vardas</th>
                    <th>Pavardė</th>
                    <th>Komanda</th>
                    <th>Amžius</th>
                    <th>Veiksmai</th>
                </tr>
                <?php rodytiZaidejus(); ?>
            </table>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
