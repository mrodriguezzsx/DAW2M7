<?php 
//Comprovem que ens estan arribant les dades per POST

$buscar = $_GET['search'];
if (isset($_POST['add_product'])){
    $numId = $_POST['NumID'];
    $name = $_POST['Name'];
    $descripcio = $_POST['Description'];
    $preu = $_POST['Price'];
    $quantity = $_POST['Quantity'];
}

try {
    $connect_PDO = new PDO ("mysql:host=localhost; dbname=practica5", "root", "");
    //Capturem errors de l’objecte Exception per a mostrar en el catch
    $connect_PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (Exception $e) {
    die("Error: " . $e->GetMessage());

    }finally{
    //buidem la memoria
    $connect_PDO=null;
    
}

$connect_PDO->exec("SET CHARACTER SET UTF8");
$sql = "INSERT INTO productes (Name, Description, Price, Quantity) VALUES ('$nom','$descripcio','$preu', '$quantity')";
$result = $connect_PDO->prepare($sql);
$result->exec(array($buscar));

while($registre = $result->fetch(PDO::FETCH_ASSOC){
    echo "Nom: " . $registre['Name'] . "<br>";
    echo "Descripció: " . $registre['Description'] . "<br>";
    echo "Preu: " . $registre['Price']. "<br>";
    echo "Quantity". $registre['Quantity']. "<br>";
    }
    
    $result->closeCursor();


header('Location: index.php')

?>