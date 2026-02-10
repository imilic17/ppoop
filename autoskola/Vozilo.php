<?php

class Vozilo
{
    public $marka;
    public $model;
    public $godiste;

    private $cijenaPoSatu;

    public function __construct($marka, $model, $godiste, $cijenaPoSatu)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->godiste = $godiste;

        if ($cijenaPoSatu > 0) {
            $this->cijenaPoSatu = $cijenaPoSatu;
        } else {
            $this->cijenaPoSatu = 30;
        }
    }

    public function setCijenaPoSatu($cijena)
    {
        if ($cijena > 0) {
            $this->cijenaPoSatu = $cijena;
        }
    }

    public function getCijenaPoSatu()
    {
        return $this->cijenaPoSatu;
    }

    public function getInfo()
    {
        return $this->marka . ' ' . $this->model . ' (' . $this->godiste . ') | ' . $this->cijenaPoSatu . ' €/sat';
    }

    public function jeNovo()
    {
        return $this->godiste >= 2024;
    }
}

$vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35); echo $vozilo->getInfo(); 
echo $vozilo->getCijenaPoSatu();
echo "<br>";
echo $vozilo->jeNovo();
echo "<br>";
$vozilo->setCijenaPoSatu(-10);
echo $vozilo->getCijenaPoSatu();
echo "<br>";
$novo = new Vozilo("Toyota", "Yaris", 2025, 40);
echo $novo->jeNovo();
echo "<br>";
$greska = new Vozilo("Opel", "Corsa", 2020, -5);
echo $greska->getCijenaPoSatu();

?>
