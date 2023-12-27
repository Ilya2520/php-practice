<?php
function getMidpoint($pt1, $pt2): array
{
    return ['x' => ($pt1['x'] + $pt2['x'])/2, 'y'=>($pt1['y'] + $pt2['y'])/2];
}

$point1 = ['x' => 0, 'y' => 0];
$point2 = ['x' => 4, 'y' => 4];
$point3 = getMidpoint($point1, $point2);
print_r($point3);