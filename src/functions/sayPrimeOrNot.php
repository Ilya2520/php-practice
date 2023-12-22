<?php
function sayPrimeOrNot($n)
{
    print_r(isPrime($n) ? "yes\n" : "no\n");
}

function isPrime($n)
{
    for ($i = 2; $i < $n ** 0.5 + 1; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

sayPrimeOrNot(5); // yes
sayPrimeOrNot(4); // no