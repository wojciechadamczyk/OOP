<?php

class ElementKoszyka {

    public $name;
    public $liczba;
    public $cena;
    public $opis;
    public $id;

    public function __construct($name, $liczba, $cena, $opis, $id) {
        $this->name = $name;
        $this->liczba = $liczba;
        $this->cena = $cena;
        $this->opis = $opis;
        $this->id = $id;
    }

}

