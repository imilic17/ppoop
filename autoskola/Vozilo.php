<?php

    class Vozilo{
    public $marka;
    public $model;
    public $godiste;

    private $cijenaPoSatu;

    public function __construct($marka, $model, $godiste, $cijenaPoSatu)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->godiste = $godiste;
        $this->getCijenaPoSatu = $cijenaPoSatu;
    

        /*if (cijenaPoSatu > 0){
            $this->cijenaPoSatu = $cijenaPoSatu;
        }
        else{
            $this->cijenaPoSatu = $cijena;
        }*/
    }
        public function setCijenaPoSatu($cijena)
        {
            if ($cijena > 0){
                $this->cijenaPoSatu = $cijena;
            }
        }

        public function getCijenaPoSatu()
        {
            return $this->cijenaPoSatu;
        }

        public function getInfo()
        {
            return $this->marka . '' . $this->model . ' (' . $this->godiste . ') | ' . $this->cijenaPoSatu . '€/sat';
        }

        public function jeNovo()
        {
            return $this->godiste >= 2024;
        }

}


?>