<?php

class TestUnitaire {

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

    function __construct($nb1, $nb2)
    {
        $this->number1 = $nb1;
        $this->number2 = $nb2;
    }

    function checkSup($nb1, $nb2){
        if ($nb1 > $nb2){
            return true;
        }
    }
}