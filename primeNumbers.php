<?php
    $Primes = [];
    for ($i = 2; $i <= 100; ++$i){
        for ($j = 2; $j <= $i/2; $j++){
            if ($i%$j == 0) {
                break;
            }
        }
        if ($j > $i/2) {
            array_push($Primes, $i);
            echo "$i ";
        }
    }



