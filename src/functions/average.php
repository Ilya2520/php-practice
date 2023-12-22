<?php
function average(...$num)
{
    return $num ? array_sum($num)/count($num) : null;
}
print_r(average(0) . "\n");
print_r(average(0,10) . "\n");
print_r(average(-3,4,2,10) . "\n");
print_r(average() . "\n");