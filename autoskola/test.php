<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    
<?php

include ("Vozilo.php");
include ("Kamion.php");
include ("Polaznik.php");

$vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35); 

echo $vozilo->getInfo(); // Volkswagen Golf 8 (2023) | 35 €/sat 
echo $vozilo->getcijenaPoSatu(); // 35 
echo $vozilo->jeNovo(); // false (2023 < 2024) 
$vozilo->setcijenaPoSatu(-10); // Ne smije promijeniti (negativna) 
echo $vozilo->getcijenaPoSatu(35); // 35 (ostalo isto) 
$novo = new Vozilo("Toyota", "Yaris", 2025, 40); 

echo $novo->jeNovo(); // true (2025 >= 2024) 
$greska = new Vozilo("Opel", "Corsa", 2020, -5); 
echo $greska->getcijenaPoSatu(); // 30 (postavljeno na default)





?>

</body>
</html>