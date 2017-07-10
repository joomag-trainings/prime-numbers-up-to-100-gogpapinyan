<?php
    $Primes = [];
    for ($i = 2; $i <= 100; ++$i){
        $isPrime = true;
        for ($j = 2; $j <= $i/2; ++$j){
            if ($i%$j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            array_push($Primes, $i);
            echo "$i  ";
        }
    }
?>


