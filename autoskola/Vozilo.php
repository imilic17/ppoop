<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Vozilo {
        public $marka;
        public $model;
        public $godiste;
        private $cijenaPosatu;

        public function __construct($marka, $model, $godiste ,$cijenaPosatu) {
            $this->marka = $marka;
            $this->model = $model;
            $this->godiste = $godiste;
            $this->cijenaPosatu = $cijenaPosatu;

            if($cijenaPosatu<=0){
                $cijenaPosatu=30;
            }
        }

        public function setCijenaPoSatu($cijena){
            if($cijena>0){
                $this->cijenaPosatu=$cijena;
            }
        }

        public function getCijenaPoSatu(){
            return $this->cijenaPosatu;
        }

        public function getInfo(){
            return "Marka: " . $this->marka . ", Model: " . $this->model . ", Cijena po satu: " . $this->cijenaPosatu;
        }

        public function jeNovo(){
            if ($this->godiste >= 2024) {
                return true;
            } else {
                return false;
            }
        }


       
    }
    
    
    
    
    ?>
    
</body>
</html>