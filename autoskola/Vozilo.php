<?php
class Vozilo {
    public $marka;
    public $model;
    public $godiste;
    private $cijenaPosatu;

    public function __construct($marka, $model, $godiste, $cijenaPosatu) {
        $this->marka = $marka;
        $this->model = $model;
        $this->godiste = $godiste;

        if ($cijenaPosatu <= 0) {
            $cijenaPosatu = 30;
        }
        $this->cijenaPosatu = $cijenaPosatu;
    }

    public function getInfo(): string {
        return "Marka: " . $this->marka . ", Model: " . $this->model . ", Cijena po satu: " . $this->cijenaPosatu;
    }

    public function getCijenaPosatu() {
        return $this->cijenaPosatu;
    }

    public function setCijenaPosatu($cijenaPosatu): void {
        if ($cijenaPosatu > 0) {
            $this->cijenaPosatu = $cijenaPosatu;
        }
    }

    public function jeNovo(): bool {
        if ($this->godiste >= 2024) {
            return true;
        } else {
            return false;
        }
    }
}
?>