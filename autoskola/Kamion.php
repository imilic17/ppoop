<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Kamion extends Vozilo{

        private $nosivost;

        private $brojOsovina;

        public function __construct($marka, $model, $godiste ,$cijenaPosatu, $nosivost, $brojOsovina) {
            parent::__construct($marka, $model, $godiste ,$cijenaPosatu);
            $this->nosivost = $nosivost;
            $this->brojOsovina = $brojOsovina;
        }

            public function getInfo(){
                return parent::getInfo() . ", Nosivost: " . $this->nosivost . ", Broj osovina: " . $this->brojOsovina;
            }

            public function troskoviPolaganja(){
                return $this->getCijenaPoSatu() * 40 + $this->nosivost * 100;
            }


    }
    
    ?>
</body>
</html>