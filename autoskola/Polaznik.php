<?php

class Polaznik {
private $ime;
private $email;
private $instruktori = [];

public function __construct($ime, $email) {
$this->ime = $ime;
$this->email = $email;
}

public function getIme() {
return $this->ime;
}

public function getEmail() {
return $this->email;
}

public function dodajInstruktora($imeInstruktora, $vozilo) {
// sprječava duplikate
foreach ($this->instruktori as $inst) {
if ($inst['ime'] == $imeInstruktora) {
return;
}
}

$this->instruktori[] = [
"ime" => $imeInstruktora,
"vozilo" => $vozilo
];
}

public function ukloniInstruktora($imeInstruktora) {
foreach ($this->instruktori as $i => $inst) {
if ($inst['ime'] == $imeInstruktora) {
unset($this->instruktori[$i]);
}
}
}

public function prikaziInstruktore() {
$rez = [];
foreach ($this->instruktori as $inst) {
$v = $inst['vozilo'];
$rez[] = $inst['ime'] . " - " . $v->marka . " " . $v->model;
}
return $rez;
}

public function brojInstruktora() {
return count($this->instruktori);
}

public function najskupljiSat() {
if (empty($this->instruktori)) return 0;

$max = 0;
foreach ($this->instruktori as $inst) {
$cijena = $inst['vozilo']->getCijenaPoSatu();
if ($cijena > $max) $max = $cijena;
}
return $max;
}
}