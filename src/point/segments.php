<?php
function makeDecartPoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}
function makeSegment($pt1,$pt2)
{
    return ["begin" => $pt1, 'end'=>$pt2];
}

function getMidpointOfSegment($sgm)
{
    return ['x' => ($sgm['begin']['x'] +$sgm['end']['x'])/2, 'y'=>($sgm['begin']['y'] + $sgm['end']['y'])/2];
}
function getBeginPoint($sgm)
{
    return $sgm['begin'];
}
function getEndPoint($sgm)
{
    return $sgm['end'];
}
$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));

print_r(getMidpointOfSegment($segment)); // (1.5, 1)
print_r(getBeginPoint($segment)); // (3, 2)
print_r(getEndPoint($segment)); // (0, 0)