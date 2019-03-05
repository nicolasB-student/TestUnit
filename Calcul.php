<?php

class Calcul {

    private $number1;
    private $number2;

    public function add($number1, $number2) {
        $somme;
        $somme = $number1 + $number2;
        return $somme;
    }

    public function susubtraction($number1, $number2) {
        $somme;
        $somme = $number1 - $number2;
        return $somme;
    }
}