<?php


    require_once "Vozilo.php";

    class Kamion extends Vozilo
    {
        private $nosivost;
        private $brojOsovina;
    
        public function __construct($marka, $model, $godiste,$cijenaposatu, $nosivost, $brojOsovina)
        {
            parent::__construct($marka, $model, $godiste, $cijenaposatu);
            $this->cijenaposatu = $cijenaposatu;
            $this->nosivost = $nosivost;
            $this->brojOsovina = $brojOsovina;
        }

        


        public function troskovipolaganja()
        {
            return ($this->cijenaposatu * 40) + ($this->nosivost * 100);
        }


    
        public function getInfo()
        {
            return "{$this->marka} {$this->model} ({$this->godiste}) | {$this->cijenaposatu} €/sat | {$this->nosivost}t, {$this->brojOsovina} osovina";
        }

    }

    $kamion = new Kamion("Volvo", "FH16", 2022, 40, 25, 3);
    echo $kamion->getInfo();
    echo "<br>";
    echo "Troškovi polaganja: " . $kamion->troskovipolaganja() . " €";







?>