<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
function getMidpoint(Point $pt1, Point $pt2): Point
{
    $midPt = new Point();
    $midPt->setX(($pt1->getX()+$pt2->getX())/2);
    $midPt->setY(($pt1->getY()+$pt2->getY())/2);
    return $midPt;
}
$pt1 = new Point();
$pt1->setX(1);
$pt1->setY(10);
$pt2 = new Point();
$pt2->setX(10);
$pt2->setY(1);
$midpoint = getMidpoint($pt1, $pt2);
print_r($midpoint->getX() . "\n"); // 5.5
print_r($midpoint->getY()); // 5.5