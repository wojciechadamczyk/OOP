<?php

class FizKalk {
    const PI = 3.14;
    public $name;
    static public $numerKalkulatora;
    
    public function poleKola($promien) {
        return self::PI * pow($promien, 2);
    }
    public function jakSieNazywasz() {
        return $this->name;
    }
}

$calc = new FizKalk();
$calc->poleKola(12);
$calc->name = "Nazwa kalkulatora";
echo $calc->jakSieNazywasz();
echo FizKalk::PI;