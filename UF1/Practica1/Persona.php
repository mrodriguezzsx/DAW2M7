<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pràctica 1</title>
</head>
<body>
<?php
$name = "Matias";
$cognoms = "Rodriguez Saldaña";
$edat = 19;
$any = date('06-11-2002');
$telefon = "663180551";
$localitat = "Sant Andreu de Llavaneres, Barcelona";
$email = "mrodrigu@jaumebalmes.net";
$treball = false;
$altura = 1.70;
$si = "si";
$no= "no";

if($treball==true) {
    $treball = $si;
} else {
    $treball = $no;
}
?>
<form>
    <h1>Descrivint a <?php echo $name, " ", $cognoms?></h1><br>
    <h2>Les Dades de <?php echo $name?> són:</h2><br>
    <ul>
        <li>Es diu: <?php echo $name, " ", $cognoms?></li>
        <li>Te <?php echo $edat?> anys</li>
        <li>Va néixer l'any: <?php echo $any?></li>
        <li>El seu telefon és: <?php echo $telefon?></li>
        <li>Via a <?php echo $localitat?></li>
        <li>El seu e-mail és <?php echo $email?></li>
        <li>Madeix un total de <?php echo $altura?> m</li>
        <li>I actualment <?php echo $treball?> treballa</li>
    </ul>
</form>
</body>
</html>