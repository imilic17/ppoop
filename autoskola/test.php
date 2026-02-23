<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include ("Vozilo.php");

$vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35); 
echo $vozilo->getInfo();
echo $vozilo->getCijenaPoSatu();
echo $vozilo->jeNovo();
$vozilo->setCijenaPoSatu(-10);
echo $vozilo->getCijenaPoSatu();
$novo = new Vozilo("Toyota", "Yaris", 2025, 40);
echo $novo->jeNovo();
$greska = new Vozilo("Opel", "corsa", 2020, -5);
echo $greska->getCijenaPoSatu();

?>
</body>
</html>