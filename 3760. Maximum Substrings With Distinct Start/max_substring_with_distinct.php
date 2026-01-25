<?php

    function maxDistinct($s) {
        $distinctstring = count_chars($s, 3);
        $distinctnum = strlen($distinctstring);
        
        return $distinctnum;
    }

$firstdistinct = maxDistinct("abcd");
echo $firstdistinct;