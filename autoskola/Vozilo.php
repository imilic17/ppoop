<?php
class Vozilo{
    public $marka;
    public $model;
    public $godiste;
    protected $cijenaPoSatu;
    public function __construct($marka,$model,$godiste,$cijenaPoSatu){
        $this->marka=$marka;
        $this->model=$model;
        $this->godiste=$godiste;
        
        if($cijenaPoSatu<=0){
            $this->cijenaPoSatu=30;
        }
        else {
            $this->cijenaPoSatu=$cijenaPoSatu;
        }
    }
    public function setCijenaPoSatu($cijena){
        if($cijena>0){
             $this->cijenaPoSatu=$cijena;
                return true;
            }
            return false;
        }
    public function getCijenaPoSatu(){
        return $this->cijenaPoSatu;
    }
    public function getInfo(){
        return $this->marka." ".$this->model."(".$this->godiste.") | ".$this->cijenaPoSatu." €/sat";
    }
    public function jeNovo(){
        if($this->godiste >= 2024){
            return true;
        }
        return false;
    }
}

?>