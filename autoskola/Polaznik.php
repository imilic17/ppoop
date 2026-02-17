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
    
}





















?>
