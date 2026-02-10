<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once 'Vozilo.php';

require_once 'Kamion.php';

class Polaznik {
    private $ime;
    private $email;
    private $instruktori;

    public function __construct($ime, $email) {

        $this->ime = $ime;
        $this->email = $email;

        $this->instruktori = array(); 
    }

    public function getIme() {
        return $this->ime;
    }

    public function getEmail() {
        return $this->email;
    }

    public function dodajInstruktora($imeInstruktora, $vozilo) {
        if (!array_key_exists($imeInstruktora, $this->instruktori)) {

            $this->instruktori[$imeInstruktora] = $vozilo;
            return true;
        }
        return false;
    }

    public function ukloniInstruktora($imeInstruktora) {
        if (array_key_exists($imeInstruktora, $this->instruktori)) {
            
            unset($this->instruktori[$imeInstruktora]);
            return true;
        }
        return false;
    }

    public function prikaziInstruktore() {
        $result = array();
        
        foreach ($this->instruktori as $imeInstruktora => $vozilo) {
            
            $result[] = $imeInstruktora . " - " . $vozilo->marka . " " . $vozilo->model;
        }
        
        return $result;
    }

    public function brojInstruktora() {
        return count($this->instruktori);
    }

    public function najskupljiSat() {
        if (empty($this->instruktori)) {
            return 0;
        }
        
        $maxCijena = 0;
        
        foreach ($this->instruktori as $vozilo) {
            $cijena = $vozilo->getCijenaPozatu();
            if ($cijena > $maxCijena) {
                $maxCijena = $cijena;
            }
        }
        
        return $maxCijena;
    }

    
    public function getInstruktori() {
        return $this->instruktori;
    }
}
?>
</body>
</html>