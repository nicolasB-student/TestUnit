<?php

class Calcul {

    private $number1;
    private $number2;

    /**
     * @return mixed
     */
    public function getNumber1()
    {
        return $this->number1;
    }

    /**
     * @param mixed $number1
     */
    public function setNumber1($number1)
    {
        $this->number1 = $number1;
    }

    /**
     * @return mixed
     */
    public function getNumber2()
    {
        return $this->number2;
    }

    /**
     * @param mixed $number2
     */
    public function setNumber2($number2)
    {
        $this->number2 = $number2;
    }


    public function add($number1, $number2) {
        $somme = 0;
        $somme = $number1 + $number2;
        return $somme;
    }

    public function subtraction($number1, $number2) {
        $somme = 0;
        $somme = $number1 - $number2;
        return $somme;
    }
}