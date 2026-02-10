<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Vozilo{
        public $marka;
        public $model;
        public $godiste;
        private $cijenaPosatu;

        

        public function __construct($marka, $model, $cijenaPosatu){
            $this->marka = $marka;
            $this->model = $model;
            $this->godiste = $godiste;
            $this->cijenaPosatu = $cijenaPosatu;

            if($cijenaPosatu<=0){
                $cijenaPosatu=30;
            }
        }

        public function getInfo(): string{
            return "Marka:" .$this->marka .",Model:" . $this->model . ",cijena po satu:" .$this->cijenaPosatu;


        }

        public function getcijenaPosatu(): mixed{
            return $this->cijenaPosatu=$cijena;

        }

        public function setcijenaPosatu($cijena): void{
            if($cijena>0){
                $this->cijenaPosatu=$cijena;
            }

        }

        public function jeNovo(): bool{
            if($godiste>=2024){
                return true;
            }
            else{
                return false;
            }
        }

    }  


    ?>
</body>
</html>