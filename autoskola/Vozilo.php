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
      
        }}
       

?>