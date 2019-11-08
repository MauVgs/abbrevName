<?php 

    $string = "Patrick Feenan";


    $resultado = abbrevName($string);
    print_r($resultado);

    function abbrevName($string){
        
        $string = explode(" ", $string);
        $primA = $string[0];
        $seguA = $string[1];

        $primA = str_split($primA);
        $seguA = str_split($seguA);

        $primA = $primA[0];
        $seguA = $seguA[0];

        $abrev = $primA . '.' . $seguA;

        return $abrev;
    }

?>