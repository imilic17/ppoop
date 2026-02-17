<?php

require_once 'Vozilo.php';

class kamion extends Vozilo 
{
    private $nosivost;
    private $brojOsovina;

    public function _construct($marka, $model, $godiste, $cijenaPoSatu, $nosivost, $brojOsovina)
    {
        parent::_construct($marka, $model, $godiste, $cijenaPoSatu);

        $this->nosivost = $nosivost;
        $this->brojOsovina = $brojOsovina;
    }

    public function getInfo() {
        return "{$this->marka} {$this->model} ({$this->godiste}) | "
        ."{$this->getCijenaPoSatu()} €/sat | "
        ."{$this->nosivost}t, {$this->brojOsovina} osovina";
    }

    public function troskoviPolaganja()
    {
        return ($this->getCijenaPoSatu() * 40) + ($this->nosivost * 100);
    }

}

?>