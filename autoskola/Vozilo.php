<?php   

    class vozilo 
    {
        public $marka;
        public $model;
        public $godiste;

        private $cijenaposatu;

        public function __construct($marka, $model, $godiste, $cijenaposatu)
        {
            $this->marka = $marka;
            $this->model = $model;
            $this->godiste = $godiste;

            if ($cijenaposatu <= 0) {
                $this->cijenaposatu = 30;
            }  else {
                $this->cijenaposatu = $cijenaposatu;
            }
        }

        public function getInfo()
        {
            return "marka: " . $this->marka . ", model: " . $this->model . ", godiste: " . $this->godiste . ", cijena po satu: " . $this->cijenaposatu;
        }

        public function jeNovo()
        {
            if ($godiste>=2024){
                return $this->godiste;
            }else{
                return false;
            }
        }

        private $cijena;  
        public function getCij() { 
            return $this->cijena; 
        } 
        public function setCij($cijena) { 
            if ($cijena > 0 ) { 
            $this->dob = $dob; 
            return true; 
        } 
        return false; 
        } 

            


    }

   


?>