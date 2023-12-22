<?php

function checkIfBalanced($str)
{
    $stack = [];
    for ($i = 0; $i<strlen($str);$i++){
        if ($str[$i] === '('){
            $stack[] = $str[$i];
        }
        elseif ($str[$i] == ')'){
            $temp = array_pop($stack);
            $pair = "{$temp}{$str[$i]}";
            if ($pair !== '()'){
                return false;
            }
        }

    }
    return count($stack) === 0;
}

var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)')); // true; // false); // => bool(false)
var_dump(checkIfBalanced('(4 + 3))')); // => bool(false)