<?php

function maxFreqSum($s) {


        $stringlength = strlen($s);

        $vowels = ['a', 'e', 'i', 'o', 'u'];

        $vowelcount = [];
        $consonantcount = [];

        for ($i=0; $i < $stringlength ; $i++) { 

            if ($s[$i] >= 'a' && $s[$i] <= 'z') {
                
                if (in_array($s[$i], $vowels)) {

                    if (!isset($vowelcount[$s[$i]])) {
                        $vowelcount[$s[$i]] = 0;
                    }

                    $vowelcount[$s[$i]]++;
                }

                else {

                    if (!isset($consonantcount[$s[$i]])) {
                        $consonantcount[$s[$i]] = 0;
                    }

                    $consonantcount[$s[$i]]++;
                }

            }
        }

        $maxvowelcount = 0;
        $maxconsonantcount = 0;

        foreach ($vowelcount as $vowel => $count) {
            if ($count > $maxvowelcount ) {
                $maxvowelcount = $count;
            }
        }



        foreach ($consonantcount as $consonant => $count) {
            if ($count > $maxconsonantcount ) {
                $maxconsonantcount = $count;
            }
        }

        $totalcount = $maxvowelcount + $maxconsonantcount;

        return $totalcount;

        
}

echo maxFreqSum("successes");
