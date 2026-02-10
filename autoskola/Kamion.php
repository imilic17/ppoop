<?php
require_once "Vozilo.php";

class Kamion extends Vozilo
{
    private $nosivost;
    private $brojOsovina;

    public function __construct(
        string $marka,
        string $model,
        int $godiste,
        float $cijenaPoSatu,
        float $nosivost,
        int $brojOsovina
    ) {
       
        parent::__construct($marka, $model, $godiste, $cijenaPoSatu);
        $this->nosivost = $nosivost;
        $this->brojOsovina = $brojOsovina;
    }

    
    public function getInfo(): string {
       
        return "{$this->marka} {$this->model} ({$this->godiste}) | " . $this->getCijenaPoSatu() . " €/sat | {$this->nosivost}t, {$this->brojOsovina} osovina";
    }

    
    public function troskoviPolaganja(): float {
        return ($this->getCijenaPoSatu() * 40) + ($this->nosivost * 100);
    }
}

$kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);
echo $kamion->getInfo();
echo $kamion->troskoviPolaganja();
echo $kamion->jeNovo();