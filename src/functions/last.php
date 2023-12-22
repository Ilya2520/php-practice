<?php
$last = function ($str){
    return $str !== '' ? $str[-1] : null;
};
print_r($last('') . "\n");
print_r($last('0')  . "\n");    // 0
print_r($last('210')  . "\n");  // 0
print_r($last('pow')  . "\n");  // w
print_r($last('kids')  . "\n"); // s
