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
            private $instruktori;
        
        
            public function __construct($ime, $email){
            $this -> ime = $ime;
            $this -> email = $email;

            $this -> instruktori = [];
            }
               
            
            public function getIme($ime){
                return $this -> ime;
            }


            public function getEmail($email){
                return $this -> getEmail;
            }

            public function dodajInstruktora($imeInstruktora, $vozilo){
                if ($this->instruktori[$imeInstruktora]) {
                $this->instruktori[$imeInstruktora] = $vozilo;
                }
            }

            public function ukloniInstruktora($imeInstruktora){
                unset($this->instruktori[$imeInstruktora]);
            }

            public function prikaziInstruktore(){
                $rezultat = [];

                foreach ($this->instruktori as $ime => $vozilo) {
                    $rezultat[] = "{$ime} - {$vozilo->getMarka()} {$vozilo->getModel()}";
                    }

                return $rezultat;
            }


            public function brojInstruktora(){
                return count($this->instruktori);
            }

        }  
    ?>

</body>
</html>