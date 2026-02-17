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
            private $cijenaPoSatu;

            public function __construct( $marka, $model, $godiste, $cijenaPoSatu){
                $this->marka = $marka;
                $this->model = $model;
                $this->godiste = $godiste;


                if ($cijenaPoSatu <= 0){
                    $this->cijenaPoSatu = 30;
                }else{
                    $this->cijenaPoSatu = $cijena;
                }
                }
            }
            
        }









    ?>

</body>
</html>