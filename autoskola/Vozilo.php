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
        private $cijenaPosatu;

        public function __construct($marka, $model, $cijenaPosatu) {
            $this->marka = $marka;
            $this->model = $model;
            $this->cijenaPosatu = $cijenaPosatu;

            if($cijenaPosatu<=0){
                $cijenaPosatu=30;
            }
        }
        


       
    }
    
    
    
    
    ?>
    
</body>
</html>