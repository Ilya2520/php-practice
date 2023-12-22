<?php
$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

function takeOldest($users, $n=1)
{
    $res = function ($arr, $n) {
        $result = [];
        $i = 0;
        while ($i < $n) {
            $result[] = $arr[$i];
            $i += 1;
        }
        return $result;
    };
    $fn = function ($a, $b) {
        return date($a['birthday']) <=> date($b['birthday']);
    };
    usort($users, $fn);
    return $res($users, $n);
}

print_r(takeOldest($users));
print_r(takeOldest($users,2));
print_r(takeOldest($users, 3));