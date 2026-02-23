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
        return $this->email;
    }
    public function dodajInstruktora($imeInstruktora,$vozilo){
       foreach($this->instruktori as $i){
      if($i['ime'] === $imeInstruktora){
          return false;
      }
  }
  $this->instruktori[]=['ime'=>$imeInstruktora, 'vozilo'=>$vozilo];
    return true;
    }
    
    public function ukloniInstruktora($imeInstruktora){
    foreach($this->instruktori as $index=>$i){
      if($i['ime'] === $imeInstruktora){
          unset($this->instruktori[$index]);
          $this->instruktori = array_values($this->instruktori);
        }
    }
    return false;
}
public function prikaziInstruktore(){
$rezultat = [];
  foreach($this->instruktori as $i){
      $rezultat[] = $i['ime'] . " - " . $i['vozilo']->marka . " " . $i['vozilo']->model;
  }
  return $rezultat;}

 /* public function brojInstruktora(){

  }

  public function najskupljiSat(){

  }*/

}
?>