<?php
function getSuperSeriesWinner($scores)
{
    $res = 0;
    foreach ($scores as $item)
        $res += $item[0] <=> $item[1];
    return $res === 0 ? null : ($res > 0 ? 'canada' : 'USSR');

}


$scores = [
    [3, 7], // Первая игра
    [4, 1], // Вторая игра
    [4, 4],
    [3, 5],
    [4, 5],
    [3, 2],
    [4, 3],
    [6, 5],
];

print_r(getSuperSeriesWinner($scores));