<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once "Vozilo.php";

    class Kamion extends Vozilo
    {
        private $nosivost;
        private $broj Osovine;

        public function __construct($marka,$model,$godiste,$cijenaPoSatu,$nosivost,$brojOsovina)
        {
            parent ::__construct($marka,$model,$godiste,$cijenaPoSatu)

            $this->nosivost = $nosivost;
            $this->brojOsovina = $brojOsovina;
            $this->cijenaPoSatu = $cijenaPoSatu;
        }

        public function getInfo()
        {
            return "{$this->marka} {$this->model}{$this->godiste} | {$this->cijenPoSatu} €/sat | {$this->nosivost}t, {$this->brojOsovina}"
        }

        public function troskoviPolaganja()
        {
            return ($this->cijenaPoSatu * 40) + ($this->nosivost * 100);
        }
    }

    $kamion = new Kamion("Scania", "R450", 2017, 40, 18, 2);
    echo $kamion->getInfo();
    echo $kamion->troskoviPolaganja();
    echo $kamion->jeNovo();

    ?>
</body>
</html>