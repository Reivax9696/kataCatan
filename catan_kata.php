<?php

class Jugador {
    
    public $nom;
    public $fusta;
    public $llana;
    public $cereals;
    public $argila;
    public $metall;

    public function __construct($nom, $fusta, $llana, $cereals, $argila, $metall) {
        $this->nom = $nom;
        $this->fusta = $fusta;
        $this->llana = $llana;
        $this->cereals = $cereals;
        $this->argila = $argila;
        $this->metall = $metall;
    }

    public function construirCarretera() {
        if ($this->fusta >= 1 && $this->argila >= 1) {
            echo $this->nom ." ha construit una carretera! Ha costat 1 de fusta i 1 de argila. <br>";
            $this->fusta -= 1;
            $this->argila -= 1;
        } else {
            echo $this->nom ." no tens recursos per construir la carta de desenvolupament. <br>";
        }
    }

    public function construirPoblat() {
        if ($this->fusta >= 1 && $this->argila >= 1 && $this->cereals >= 1 && $this->metall >= 1) {
            echo $this->nom ." ha construit un poblat! Ha costat 1 de fusta, 1 d'argila, 1 de cereals i 1 de metall <br>";
            $this->fusta -= 1;
            $this->argila -= 1;
            $this->cereals -= 1;
            $this->metall -= 1;
        } else {
            echo $this->nom ." no tens recursos per construir la carta de desenvolupament. <br>";
        }
    }

    public function construirCiutat() {
        if ($this->cereals >= 2 && $this->metall >= 3) {
            echo $this->nom ." ha construit una ciutat! Ha costat 2 de cereals i 3 de metall <br>";
            $this->cereals -= 2;
            $this->metall -= 3;
        } else {
            echo $this->nom ." no tens recursos per construir la carta de desenvolupament. <br>";
        }
    }

    public function construirCartaDesenvolupament() {
        if ($this->cereals >= 1 && $this->metall >= 1 && $this->llana >= 1) {
            echo $this->nom . "ha construit una carta de desenvolupament! Ha costat 1 de cereals, 1 de metall i de llana. <br>";
            $this->llana -= 1;
            $this->cereals -= 1;
            $this->metall -= 1;
        } else {
            echo $this->nom ." no tens recursos per construir la carta de desenvolupament. <br>";
        }
    }
}


$jugador1 = new Jugador ("Alba", 3, 1, 1, 1, 2);
$jugador1->construirPoblat();
$jugador1->construirCarretera();
$jugador1->construirCiutat();
$jugador1->construirCartaDesenvolupament();
$jugador2 = new Jugador ("Xavier", 10, 10, 10, 10, 10);
$jugador2->construirCarretera();
$jugador2->construirCiutat();




















?>