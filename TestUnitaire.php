<?php

class TestUnitaire {


    function checkSup($nb1, $nb2){
        if ($nb1 > $nb2){
            return true;
        }
    }

    function checkTypeSum($n1, $n2) {
        include_once 'Calcul.php';

        $addCalcul = new Calcul();

        return is_int($addCalcul->add($n1, $n2));
    }

    

}