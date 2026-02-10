<?php

    require_once "Vozilo.php";

    class Polaznik extends Vozilo
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

        public function dodajInstruktora($instruktor, $vozilo)
        {
            $this->instruktori[] = [
                'instruktor' => $instruktor,
                'vozilo' => $vozilo
            ];
        }

        public function ukloniInstruktora($instruktor)
        {
            foreach ($this->instruktori as $key => $pair) {
                if ($pair['instruktor'] === $instruktor) {
                    unset($this->instruktori[$key]);
                    return true;
                }
            }
            return false;
        }

        public function prikaziInstruktore()
        {
            if (empty($this->instruktori)) {
                return "Nema dodijeljenih instruktora.";
            }

            $output = "Instruktori za polaznika {$this->ime}:\n";
            foreach ($this->instruktori as $pair) {
                $output .= "- Instruktor: {$pair['instruktor']}, Vozilo: {$pair['vozilo']->getInfo()}\n";
            }
            return $output;
        }

        public function brojInstruktora()
        {
            return count($this->instruktori);
        }

        


    }

    $polaznik = new Polaznik("Marko Marić", "marko@email.com");
    echo "Polaznik: " . $polaznik->getIme() . ", Email: " . $polaznik->getEmail();
    echo "<br>";
    $v1 = new Vozilo("Volkswagen", "Golf 8", 2023, 35); 
    $v2 = new Vozilo("Toyota", "Yaris", 2025, 40);
    $polaznik ->dodajInstruktora("Ivan Horvat", $v1);
    $polaznik ->dodajInstruktora("Ana Kovač", $v2);
    echo $brojPolaznika = $polaznik->brojInstruktora();
    echo "<br>";
    print_r($polaznik->prikaziInstruktore());
    $polaznik->ukloniInstruktora("Ivan Horvat");
   










?>