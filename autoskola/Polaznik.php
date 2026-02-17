<?php

class Polaznik 
{
    private $ime;
    private $email;
    private $instruktori;

    public function __construct($ime, $email)
    {
        $this->ime = $ime;
        $this->email = $email;
        $this->instruktori = [];
    }

    public function getIme()
    {
        return $this->ime;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function dodajInstruktora($imeInstruktora, $vozilo)
    {
       
        foreach ($this->instruktori as $instruktor) {
            if ($instruktor['ime'] === $imeInstruktora) {
                return;
            }
        }

        $this->instruktori[] = [
            'ime' => $imeInstruktora,
            'vozilo' => $vozilo
        ];
    }

    public function ukloniInstruktora($imeInstruktora)
    {
        foreach ($this->instruktori as $index => $instruktor) {
            if ($instruktor['ime'] === $imeInstruktora) {
                unset($this->instruktori[$index]);
                // reindexiranje niza
                $this->instruktori = array_values($this->instruktori);
                return;
            }
        }
}

public function prikaziInstruktore()
{
    $rezultat = [];

    foreach ($this->instruktori as $instruktor) {
        $vozilo = $instruktor['vozilo'];
        $rezultat[] = "{$instruktor['ime']} - {$vozilo->marka} {$vozilo->model}";
    }

    return $rezultat;
}


public function brojInstruktora()
    {
        return count($this->instruktori);
    }

    public function najskupljiSat()
    {
        if (empty($this->instruktori)) {
            return 0;
        }

        $max = 0;

        foreach ($this->instruktori as $instruktor) {
            $cijena = $instruktor['vozilo']->getCijenaPoSatu();
            if ($cijena > $max) {
                $max = $cijena;
            }
        }

        return $max;
    }



}





















?>
