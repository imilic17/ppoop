<?php
require_once 'Vozilo.php';

class Kamion extends Vozilo {
    private $nosivost;
    private $brojOsovina;

    public function __construct($marka, $model, $godiste, $cijenaPosatu, $nosivost, $brojOsovina) {
        parent::__construct($marka, $model, $godiste, $cijenaPosatu);
        $this->nosivost = $nosivost;
        $this->brojOsovina = $brojOsovina;
    }

    public function troskoviPolaganja() {
        $osnovniSati = 40;
        $cijenaPoSatu = $this->getCijenaPosatu();
        $dodatakNosivost = $this->nosivost * 100;
        return ($cijenaPoSatu * $osnovniSati) + $dodatakNosivost;
    }

    public function getInfo(): string {
        $troskovi = $this->troskoviPolaganja();
        return "Marka: " . $this->marka . ", Model: " . $this->model . 
               ", Godiste: " . $this->godiste . 
               ", Cijena po satu: " . $this->getCijenaPosatu() . " €/sat" .
               ", Nosivost: " . $this->nosivost . "t" .
               ", Broj osovina: " . $this->brojOsovina .
               ", Troskovi polaganja: " . $troskovi . "€";
    }
}
?>