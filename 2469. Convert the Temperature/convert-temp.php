<?php
class Solution {

    /**
     * @param Float $celsius
     * @return Float[]
     */
    function convertTemperature($celsius) {
        $temparature = [];
        $kelvin = $celsius + 273.15;
        $fahrenheit = $celsius * 1.80 + 32.00;
        array_push($temparature, $kelvin, $fahrenheit);

        return $temparature;

    }
    
}