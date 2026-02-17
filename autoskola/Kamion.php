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

    
}