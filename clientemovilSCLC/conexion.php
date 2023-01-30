<?php
/*$servername = "localhost";
$database = "u411862740_bdafiliaccion";
$username = "u411862740_root";
$password = "KjLZptK5SnD#H75";*/

$servername = "localhost";
$username = "root";
$password = "KjLZptK5SnD#H75";
$database = "bdafiliaccion";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if (!$conn){
    die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conexión Satisfactoria";
echo "<br>";
?>