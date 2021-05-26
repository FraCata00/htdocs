<?php

include 'Gioco.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud2021";

$conn = new mysqli($servername, $username, $password, $dbname) or die(mysqli_error($connn));
$ident = (isset($_GET['id']))?$_GET['id']:false;
$where = ($ident !== false)? " where id = " . $_GET['id']:"";

$sql = "SELECT * FROM videogames";
$result = $conn->query($sql);
$giochi = [];
while ($gioco=mysqli_fetch_object($result)) {
    //echo $row["Nome"]. "<br>"; //. " - Genere: " . $row["Genere"] . " - Valutazione: " . $row["Valutazione"] . "<br>";
    $g = new Gioco($gioco->id, $gioco->nome, $gioco->genere, $gioco->valutazione);
    $giochi[] = $g;
}

header("Content-Type: application/json");
echo json_encode($giochi);
$conn->close();
?>