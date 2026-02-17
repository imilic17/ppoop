<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamion</title>
</head>
<body>
    
    <?php

        class Kamion extends Vozilo{

            private $osivost;
            private $brojOsovina;


            public function __construct($marka,$model,$godiste, $cijenaPoSatu, $nosivost, $brojOsovina){
                parent::__construct($marka, $model, $godiste, $cijenaPoSatu);
                $this -> nosivost = $nosivost;
                $this -> brojOsovina = $brojOsovina;
            }
    
            public function getInfo(){
                return $this -> marka . $this -> model. " (" .$this -> godiste   . ") -" . $this -> cijenaPoSatu. " €/sat ". $this -> nosivost. " t ". $this -> brojOsovina. " osovina." ;
            }

            public function troskoviPolaganja(){
                return($this -> cijenaPoSatu * 40) + ($this -> nosivost * 100);

            }


    }
    ?>

</body>
</html>