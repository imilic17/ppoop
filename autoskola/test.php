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
require_once "Kamion.php";
require_once "Polaznik.php";
require_once "Autoskola.php";

// Kreiranje vozila
$auto1 = new Vozilo("Audi", "A3", 2023, 35);
$auto2 = new Vozilo("BMW", "320", 2022, 40);
$kamion1 = new Kamion("Mercedes", "Actros", 2024, 60, 18, 4);

// Kreiranje autoškole
$skola = new Autoskola("Autoškola Brzi");

// Dodavanje vozila u vozni park
$skola->dodajVozilo($auto1);
$skola->dodajVozilo($auto2);
$skola->dodajVozilo($kamion1);

// Kreiranje polaznika
$polaznik1 = new Polaznik("Marko Marković", "marko@gmail.com");
$polaznik2 = new Polaznik("Ana Aničić", "ana@gmail.com");

// Registracija polaznika
$skola->registrirajPolaznika($polaznik1);
$skola->registrirajPolaznika($polaznik2);

// Dodavanje instruktora polazniku
$polaznik1->dodajInstruktora("Ivan Horvat", $auto1);
$polaznik1->dodajInstruktora("Petar Petrović", $kamion1);

// ISPIS
echo "<h2>Vozila:</h2>";
echo $auto1->getInfo() . "<br>";
echo $auto2->getInfo() . "<br>";
echo $kamion1->getInfo() . "<br><br>";

echo "<h2>Polaznik: " . $polaznik1->getIme() . "</h2>";
echo "Email: " . $polaznik1->getEmail() . "<br>";
echo "Broj instruktora: " . $polaznik1->brojInstruktora() . "<br>";
echo "Najskuplji sat: " . $polaznik1->najskupljiSat() . " €<br><br>";

echo "<h2>Trošak polaganja za kamion:</h2>";
echo $kamion1->troskoviPolaganja() . " €";

?>
</body>
</html>