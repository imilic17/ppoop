<?php

require_once "Vozilo.php";
class Polaznik extends Vozilo {


    private array $ime = [];
    private array $email = [];
    private array $instruktori = [];
    
    public function __construct(array $ime, array $email, array $instruktori) {
        $this->ime = $ime;
        $this->email = $email;
        $this->instruktori = $instruktori;
    }

    public function setIme(array $ime): void {
        
            $this->ime = $ime;
        
    }

    public function getIme(): ?array {
        return $this->ime;
    }


    public function setEmail(array $email): void {
        
        $this->email = $email;
    
}

public function getEmail(): ?array {
    return $this->email;
}
public function dodajInstruktora($imeInstruktora, $vozilo) {
  
    if (!isset($this->instruktori[$imeInstruktora])) {
        $this->instruktori[$imeInstruktora] = $vozilo;
    }
}

public function ukloniInstruktora($imeInstruktora) {
    if (isset($this->instruktori[$imeInstruktora])) {
        unset($this->instruktori[$imeInstruktora]);
    }
}

}

?>