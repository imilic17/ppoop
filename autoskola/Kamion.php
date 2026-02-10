<?php

require_once "Vozilo.php";

class Kamion extends Vozilo
{
    private $nosivost;
    private $brojOsovina;

    public function __construct($marka, $model, $godiste, $cijenaPoSatu, $nosivost, $brojOsovina)
    {
        
        parent::__construct($marka, $model, $godiste, $cijenaPoSatu);

        $this->nosivost = $nosivost;
        $this->brojOsovina = $brojOsovina;
        $this->cijenaPoSatu = $cijenaPoSatu;
    }

    public function getInfo()
    {
        return "{$this->marka} {$this->model} ({$this->godiste}) | {$this->cijenaPoSatu} €/sat | {$this->nosivost}t, {$this->brojOsovina} osovina";
    }

    public function troskoviPolaganja()
    {
        return ($this->cijenaPoSatu * 40) + ($this->nosivost * 100);
    }
}

$kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);
echo $kamion->getInfo();
echo "<br>";
echo $kamion->troskoviPolaganja();
echo "<br>";
echo $kamion->jeNovo();

?>
