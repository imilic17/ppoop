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
}





















?>
