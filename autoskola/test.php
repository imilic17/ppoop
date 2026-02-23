<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <?php
    include("Vozilo.php");
    include("Kamion.php");
    include("Polaznik.php");
    $vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
    echo $vozilo->getInfo();// Volkswagen Golf 8 (2023) | 35 €/sat
    echo $vozilo->getCijenaPoSatu(); // 35
    echo $vozilo->jeNovo(); // false (2023 < 2024)
    $vozilo->setCijenaPoSatu(-10); // Ne smije promijeniti (negativna)
    echo $vozilo->getCijenaPoSatu(); // 35 (ostalo isto) 
    $novo = new Vozilo("Toyota", "Yaris", 2025, 40);
    echo $novo->jeNovo();
    // true (2025 >= 2024)
    $greska = new Vozilo("Opel", "Corsa", 2020, -5);
    echo $greska->getCijenaPoSatu(); // 30 (postavljeno na default)

    echo "<br>";
    echo "<br>";

    $kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);
    echo $kamion->getInfo(); // MAN TGX (2022) | 50 €/sat | 18t, 3 osovina
    echo $kamion->troskoviPolaganja(); // 3800 (50 * 40 + 18 * 100 = 2000 + 1800)
    echo $kamion->jeNovo(); // false (naslijeđena metoda, 2022 < 2024)

    echo "<br>";

    $polaznik = new Polaznik("Marko Marić", "marko@email.com");
    $v1 = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
    $v2 = new Vozilo("Toyota", "Yaris", 2025, 40);
    $kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);
    $polaznik->dodajInstruktora("Ivan Ivić", $v1);
    $polaznik->dodajInstruktora("Ana Anić", $v2);
    $polaznik->dodajInstruktora("Pero Perić", $kamion);
    echo "<br>";
    //echo $polaznik->brojInstruktora(); // 3
    echo "<br>";
    print_r($polaznik->prikaziInstruktore());// ["Ivan Ivić - Volkswagen Golf 8", "Ana Anić - Toyota Yaris", "Pero Perić - MAN TGX"]
   // echo $polaznik->najskupljiSat(); // 50 (MAN TGX ima 50 €/sat)
    $polaznik->ukloniInstruktora("Ana Anić");
    //echo $polaznik->brojInstruktora(); // 2
    echo "<br>";
    //echo $polaznik->najskupljiSat(); // 50
    echo "<br>";
    ?>
</body>
</html>