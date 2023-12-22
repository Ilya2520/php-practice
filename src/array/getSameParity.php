<?php

function getSameParity($arr)
{
    $res = [];
    if ($arr) {
        $res[]= $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] % 2 === $arr[0] % 2) {
                $res[] = $arr[$i];
            }
        }
    }
    return $res;
}

print_r(getSameParity([]));        // []
print_r(getSameParity([1, 2, 3])); // [1, 3]
print_r(getSameParity([1, 2, 8])); // [1]
print_r(getSameParity([2, 2, 8])); // [2, 2, 8]