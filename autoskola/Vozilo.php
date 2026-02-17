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

        private $cijenaPoSatu;
    
        public function __construct($marka,$model,$godiste){
            $this -> marka = $marka;
            $this -> model = $model;
            $this -> godiste = $godiste;

            $this -> cijenaPoSatu = 30;
        }

        public function setcijenaPoSatu($cijenaPoSatu){
            if ($cijenaPoSatu>0){
                $this -> cijenaPoSatu = $cijenaPoSatu;
                return true;
        }
        return false;
        }

        public function getcijenaPoSatu($cijenaPoSatu){
            return $this -> cijenaPoSatu;
        }
        
        public function getInfo(){
            return $this -> marka . $this -> model. " (" .$this -> godiste   . ") -" . $this -> cijenaPoSatu;
        }


        public function jeNovo($godiste){
            if($godiste>=2024){
                $this -> godiste = $godiste;
                return true;
            }
            return false;
        }
    }


?>

</body>
</html>