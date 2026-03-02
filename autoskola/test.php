<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once 'Vozilo.php';
require_once 'Kamion.php';
require_once 'Polaznik.php';

echo "vozilo\n";
echo "<br>";

$vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
echo $vozilo->getInfo() . "\n";
echo "Cijena: " . $vozilo->getCijenaPosatu() . " €/sat\n";
echo "Novo: " . ($vozilo->jeNovo() ? 'da' : 'ne') . "\n";

$vozilo->setCijenaPosatu(10);
echo "Nova cijena: " . $vozilo->getCijenaPosatu() . " €/sat\n";

$greska = new Vozilo("Opel", "Corsa", 2020, -5);
echo $greska->getInfo() . "\n";

echo "kamion\n";

$kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);
echo $kamion->getInfo() . "\n";
echo "Polaganje: " . $kamion->troskoviPolaganja() . "€\n";

$kamionNovi = new Kamion("Volvo", "FH", 2024, 55, 22, 4);
echo $kamionNovi->getInfo() . "\n";
echo "Novo: " . ($kamionNovi->jeNovo() ? 'da' : 'ne') . "\n";

echo "\npolaznik\n";

$polaznik = new Polaznik("Marko Marić", "marko@email.com");
$v1 = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
$v2 = new Vozilo("Toyota", "Yaris", 2025, 40);
$kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);

$polaznik->dodajInstruktora("Ivan Ivić", $v1);
$polaznik->dodajInstruktora("Ana Anić", $v2);
$polaznik->dodajInstruktora("Pero Perić", $kamion);

echo "Broj instruktora: " . $polaznik->brojInstruktora() . "\n";

echo "Instruktori:\n";
foreach ($polaznik->prikaziInstruktore() as $instruktor) {
    echo "- " . $instruktor . "\n";
}

echo "Najskuplji sat: " . $polaznik->najskupljiSat() . " €/sat\n";

$polaznik->ukloniInstruktora("Ana Anić");
echo "Broj nakon uklanjanja: " . $polaznik->brojInstruktora() . "\n";

$duplikat = $polaznik->dodajInstruktora("Ivan Ivić", $v2);
echo "Duplikat dodan: " . ($duplikat ? 'da' : 'ne') . "\n";

$prazan = new Polaznik("Ivo Ivić", "ivo@email.com");
echo "Prazan najskuplji: " . $prazan->najskupljiSat() . "\n";
?>
</body>
</html>