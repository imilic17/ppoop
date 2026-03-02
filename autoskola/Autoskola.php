<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Autoskola{

        private $naziv;
        private $vozniPark=[vozila];

        private $polaznici=[];

        public function __construct($naziv, $vozniPark=[], $polaznici=[]) {
            $this->naziv = $naziv;
            $this->vozniPark = $vozniPark;
            $this->polaznici = $polaznici;
        }

        public function getNaziv() {
            return $this->naziv;
        }

        public function dodajVozilo($vozilo){
            $this->vozniPark[]=$vozilo;
        }

        public function registrirajPolaznika($polaznik){
            $this->polaznici[]=$polaznik;
        }

        public function pretraziPoMarki($marka){
            $rezultat=[];
            foreach($this->vozniPark as $vozilo){
                if($vozilo->marka==$marka){
                    $rezultat[]=$vozilo;
                }
            }
            return $rezultat;
        }

        public function najjeftinijiSat($n){

        }

        

    }
    
    ?>
</body>
</html>