<?php
function findDelayedArrivalTime($arrival_time, $delayed_time){
    $total_time = $arrival_time + $delayed_time;

    if ($total_time == 24) {
        $total_time = 0;
    }
    elseif ( $total_time > 24) {
        $total_time = $total_time - 24;
    }
    else{
        $total_time = $total_time;
    }

    return $total_time;
}

findDelayedArrivalTime(13, 11);