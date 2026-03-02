<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Polaznik{
        private $ime;
        private $email;
        private $instruktori=[];

        public function __construct($ime, $email, $instruktori=[]) {
            $this->ime = $ime;
            $this->email = $email;
            $this->instruktori = $instruktori;
        }

        public function getIme() {
            return $this->ime;
        }

        public function getEmail() {
            return $this->email;
        }

        public function dodajInstruktora($imeInstruktora, $vozilo){
            
            foreach ($this->instruktori as $instruktor) {
                if ($instruktor['ime'] === $imeInstruktora) {
                    return;
                }
            }
        
            
            $this->instruktori[] = ['ime' => $imeInstruktora, 'vozilo' => $vozilo];
        }

        public function ukloniInstruktora($imeInstruktora){
            foreach ($this->instruktori as $key => $instruktor) {
                if ($instruktor['ime'] === $imeInstruktora) {
                    unset($this->instruktori[$key]); 
                    return; 
                }
            }

        }

        public function prikaziInstruktora(){
            foreach ($this->instruktori as $instruktor) {
                echo  $instruktor['ime'] . " - " . $instruktor['marka'] ."  " . $instruktor['model']. "<br>";
            }
        }

        public function brojInstruktora(){
            return count($this->instruktori);
        }

        public function najskupljiSat(){
            $najskupljiSat = 0;
            foreach ($this->instruktori as $instruktor) {
                if ($instruktor['vozilo']->getCijenaPoSatu() > $najskupljiSat) {
                    $najskupljiSat = $instruktor['vozilo']->getCijenaPoSatu();
                }
            }
            return $najskupljiSat;
        }


    }
    
    ?>
</body>
</html>