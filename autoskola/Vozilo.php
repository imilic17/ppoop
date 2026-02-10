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
            return "Marka: " . $this->marka . ", Model: " . $this->model . ", Godište: " . $this->godiste . ", Cijena po satu: " . $this->cijenaposatu;
        }

        public function jeNovo()
        {
            return $this->godiste >= 2024;
        }

    }

    $vozilo = new vozilo("Toyota", "Corolla", 2023, 25);
    echo $vozilo->getInfo();
    echo "<br>";
    $vozilo = new vozilo("Honda", "Civic", 2025, -10);
    echo $vozilo->getInfo();
    echo "<br>";
    











?>