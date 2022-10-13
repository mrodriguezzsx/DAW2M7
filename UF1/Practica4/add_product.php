<?php 
//Comprovem que ens estan arribant les dades per POST
$db_host = "localhost";
$db_nombre = "practica4";
$db_usuario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

if (isset($_GET['afegir'])){
    $nom = $_GET['name'];
    $descripcio = $_GET['description'];
    $preu = $_GET['price'];
}

$consulta = "INSERT INTO productes (Name, Description, Price) VALUES ('$nom','$descripcio','$preu')";

$products = mysqli_query($connexio, $consulta);

header('Location: index.php')

?>