<?php
require_once("Vozilo.php");
class Kamion extends Vozilo{
    private $nosivost;
    private $brojOsovina;
    public function __construct($marka,$model,$godiste,$cijenaPoSatu,$nosivost,$brojOsovina){
        parent::__construct($marka,$model,$godiste,$cijenaPoSatu);
         $this->nosivost=$nosivost;
        $this->brojOsovina=$brojOsovina;
    }
    public function getInfo(){
        return parent::getInfo() . " | "
        .$this->nosivost." "
        .$this->brojOsovina;
    }
    public function troskoviPolaganja(){
        return ($this->cijenaPoSatu*40)+($this->nosivost*100);
    }
}
?>