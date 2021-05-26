<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h2>Benvenuto</h2>
    <ul>
    <?php
        $peso;
        $altezza;
        if(isset($_GET['peso']) && isset ($_GET['altezza'])){
            echo "Dato il peso Kg: " . $_GET['peso'];
            echo "<br>";
            echo "Dato l'altezza metri: " . $_GET['altezza'];
            echo "<br>";
            echo "Il tuo BMI e': " . ($_GET['peso']/($_GET['altezza']*$_GET['altezza']));
        }
    ?>
    </ul>
</body>
</html>