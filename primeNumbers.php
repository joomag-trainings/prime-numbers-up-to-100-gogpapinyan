<?php
    $Primes = [];
    for ($i = 2; $i <= 100; ++$i){
        $k = 0;
        for ($j = 2; $j <= $i/2; ++$j){
            if ($i%$j == 0) {
                ++$k;
            }
        }
        if ($k == 0){
            array_push($Primes,$i);
            echo "$i  ";
        }
    }
?>


