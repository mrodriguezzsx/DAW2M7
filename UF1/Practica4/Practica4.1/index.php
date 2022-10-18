<?php
include_once 'db.php';
include_once 'test.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Practica 4</title>
</head>
<body>
    <?php
    echo"Fem un test utilitzant la classe test i el mètode getProducts:";
    echo '<br>';
    $testObj = new Test();
    $testObj->getProducts();
    echo '<br>';
    echo"Fem un test utilitzant consultes preparades";
    echo '<br>';
    $testObj->getProductsPrepareStmt("Alcatel", "SmartPhone 4G - 2016");
    echo '<br>';
    echo"Insertem noves dades fent set utilitzant consultes preparades";
    echo '<br>';
    $testObj->setProductsPrepareStmt("Huawei", "P40 PRO", "699");
    ?>
</body>
</html>