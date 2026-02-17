<?php

class Autoskola
{
    private $naziv;
    private $vozniPark;   
    private $polaznici;   

    public function __construct($naziv)
    {
        $this->naziv = $naziv;
        $this->vozniPark = [];
        $this->polaznici = [];
    }

    public function getNaziv()
    {
        return $this->naziv;
    }

    public function dodajVozilo($vozilo)
    {
        $this->vozniPark[] = $vozilo;
    }

    public function registrirajPolaznika($polaznik)
    {
        $this->polaznici[] = $polaznik;
    }

    public function pretraziPoMarki($marka)
    {
        $rezultat = [];

        foreach ($this->vozniPark as $vozilo) {
            if (strcasecmp($vozilo->marka, $marka) === 0) {
                $rezultat[] = $vozilo;
            }
        }

        return $rezultat;
    }

    public function najjeftinijiSat($n)
    {
        
        $vozila = $this->vozniPark;

        usort($vozila, function($a, $b) {
            return $a->getCijenaPoSatu() <=> $b->getCijenaPoSatu();
        });

        return array_slice($vozila, 0, $n);
    }

    public function statistika()
    {
        $brojVozila = 0;
        $brojKamiona = 0;
        $ukupnaCijena = 0;

        foreach ($this->vozniPark as $vozilo) {
            if ($vozilo instanceof Kamion) {
                $brojKamiona++;
            } else {
                $brojVozila++;
            }

            $ukupnaCijena += $vozilo->getCijenaPoSatu();
        }

        $ukupno = count($this->vozniPark);
        $prosjek = $ukupno > 0 ? $ukupnaCijena / $ukupno : 0;

        return [
            'ukupno_vozila' => $brojVozila,
            'ukupno_kamiona' => $brojKamiona,
            'ukupno_polaznika' => count($this->polaznici),
            'prosjecna_cijena_sata' => $prosjek
        ];
    }
}

?>