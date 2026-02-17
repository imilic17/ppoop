<?php
class Polaznik{
    private $ime;
    private $email;
    private $instruktori;
    public function __construct($ime,$email,array $instruktori=[]){
        $this->ime=$ime;
        $this->email=$email;
        $this->instruktori=$instruktori;
    }
    public function getIme(){
        return $this->ime;
    }
    public function getEmail(){
        return $this->ime;
    }
    public function dodajInstruktora($imeInstruktora,$vozilo){
       foreach($this->instruktori as $i){
        if($i->ime === $imeInstruktora->ime){
            return false;
        }
    }
    $this->instruktori[]=$imeInstruktora;
    return true;
    }
    public function ukloniInstruktora($imeInstruktora){
    foreach($this->instruktori as $index=>$imeInstruktora){
        if($imeInstruktora->ime === $ime){
            unset ($this ->instruktori[$index]);
            $this->instruktori ==array_values($this->instruktori);
            return true;
        }
    }
    return false;
}
}
?>