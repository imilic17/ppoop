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

class Kamion extends Vozilo {
    private $nosivost;  

    private $brojOsovina;

    public function __construct($marka, $model, $godine, $cijenaPozatu, $nosivost, $brojOsovina) {
        
        parent::__construct($marka, $model, $godine, $cijenaPozatu);
        
        $this->nosivost = $nosivost;

        $this->brojOsovina = $brojOsovina;

    }



    public function troskoviPolaganja() {
        $osnovniSati = 40;
        $cijenaPoSatu = $this->getCijenaPozatu();
        $dodatakNosivost = $this->nosivost * 100;
        
        return ($cijenaPoSatu * $osnovniSati) + $dodatakNosivost;
    }

    public function getInfo() {
        
        $osnovniInfo = parent::getInfo();
        
        

        $troskovi = $this->troskoviPolaganja();
        
        return "{$this->marka} {$this->model} ({$this->godine}) | {$this->getCijenaPosatu()} €/sat | " .
               "{$this->nosivost}t, {$this->brojOsovina} osovina | Troškovi polaganja: {$troskovi}€";
    }
}
?>
</body>
</html>