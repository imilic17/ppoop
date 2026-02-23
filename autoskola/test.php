<?php require_once 'Vozilo.php';

$vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35); 


// Volkswagen Golf 8 (2023) | 35 €/sat 
echo $vozilo->getCijenaPoSatu(); 
// 35 
echo $vozilo->jeNovo(); 
// false (2023 < 2024) 
$vozilo->setCijenaPoSatu(-10); 
// Ne smije promijeniti (negativna) 
echo $vozilo->getCijenaPoSatu(); 
// 35 (ostalo isto) 
$novo = new Vozilo("Toyota", "Yaris", 2025, 40); 

echo "<br>";
// true (2025 >= 2024) 
$greska = new Vozilo("Opel", "Corsa", 2020, -5); 
echo $greska->getCijenaPoSatu(); 
echo $vozilo->getInfo(); 

// 30 (postavljeno na default)