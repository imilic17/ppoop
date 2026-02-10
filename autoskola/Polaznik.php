<?php

require_once "Vozilo.php";
require_once "Kamion.php";

class Polaznik
{
    private $ime;
    private $email;
    private $instruktori; 

    public function __construct($ime, $email)
    {
        $this->ime = $ime;
        $this->email = $email;
        $this->instruktori = [];
    }

    public function getIme()
    {
        return $this->ime;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function dodajInstruktora($imeInstruktora, $vozilo)
    {
    
        if (!isset($this->instruktori[$imeInstruktora])) {
            $this->instruktori[$imeInstruktora] = $vozilo;
        }
    }

    public function ukloniInstruktora($imeInstruktora)
    {
        if (isset($this->instruktori[$imeInstruktora])) {
            unset($this->instruktori[$imeInstruktora]);
        }
    }

    public function prikaziInstruktore()
    {
        $rezultat = [];

        foreach ($this->instruktori as $imeInstruktora => $vozilo) {
            $marka = $vozilo->marka;
            $model = $vozilo->model;

            $rezultat[] = $imeInstruktora . " - " . $marka . " " . $model;
        }

        return $rezultat;
    }


    public function brojInstruktora()
    {
        return count($this->instruktori);
    }

   
    public function najskupljiSat()
    {
        $max = 0;

        foreach ($this->instruktori as $vozilo) {
            $cijena = $vozilo->getCijenaPoSatu();

            if ($cijena > $max) {
                $max = $cijena;
            }
        }

        return $max;
    }
}
$polaznik = new Polaznik("Marko Marić", "marko@email.com");
$v1 = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
$v2 = new Vozilo("Toyota", "Yaris", 2025, 40);
$kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);
$polaznik->dodajInstruktora("Ivan Ivić", $v1);
$polaznik->dodajInstruktora("Ana Anić", $v2);
$polaznik->dodajInstruktora("Pero Perić", $kamion); 
echo $polaznik->brojInstruktora();
echo "<br>";
print_r($polaznik->prikaziInstruktore());
echo $polaznik->najskupljiSat();
echo "<br>";    
$polaznik->ukloniInstruktora("Ana Anić");
echo $polaznik->brojInstruktora();
echo "<br>";
echo $polaznik->najskupljiSat();
?>
