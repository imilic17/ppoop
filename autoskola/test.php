<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "Vozilo.php";
$vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35); 

echo $vozilo->getInfo(); // Volkswagen Golf 8 (2023) | 35 €/sat 
echo $vozilo->getCijenaPoSatu(); // 35 
echo $vozilo->jeNovo(2022); // false (2023 < 2024) 
$vozilo->setCijenaPoSatu(-10); // Ne smije promijeniti (negativna) echo $vozilo->getCijenaPoSatu(); // 35 (ostalo isto) $novo = new Vozilo("Toyota", "Yaris", 2025, 40); echo $novo->jeNovo(); // true (2025 >= 2024) $greska = new Vozilo("Opel", "Corsa", 2020, -5); echo $greska->getCijenaPoSatu(); // 30 (postavljeno na default)

?>

</body>
</html>