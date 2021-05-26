<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud2021";


$conn = new mysqli($servername, $username, $password, $dbname) or die(mysqli_error($connn));
$data = json_decode(file_get_contents('php://input'), true);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    mysqli_query ($conn, "INSERT INTO Videogames (nome, genere, valutazione) VALUES ('$data[nome]', '$data[genere]', '$data[valutazione]'") or die(mysqli_error($conn));
}

if ($_SERVER['REQUEST_METHOD'] == "PUT") {
    mysqli_query($conn, "UPDATE Videogames SET nome ='$data[nome]', genere = '$data[genere]', valutazione = '$data[valutazione]'") or die(mysqli_error($conn));
}

if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
    echo "DELETE FROM Videogames WHERE id = $_GET[id]";
    mysqli_query($conn, "DELETE FROM Videogames WHERE id = $_GET[id]") or die(mysqli_error($conn));
}

?>
