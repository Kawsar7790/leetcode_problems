<?php

function defangIPaddr_1($address) {
        
    $char = "[.]";


    for($i=0; $i< strlen($address); $i++){
        if($address[$i] == "."){
        
        $newStr = str_replace($address[$i], $char, $address);


        }

    }
    return $newStr;
}

function defangIPaddr_2($address) {

    return str_replace(".", "[.]", $address);
        
}



