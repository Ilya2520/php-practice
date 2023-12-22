<?php
function without(array $items, ...$value)
{
    $filtered = array_filter($items, function ($item) use ($value) {
        return !in_array($item,$value);
    });
    // Сбрасываем ключи
    return array_values($filtered);
}

print_r(without([3, 4, 10, 4, 'true'], 4,10)); // [3, 10, 'true']
print_r(without(['3', 2], 0, 5, 11)); // ['3', 2]
print_r(without(['3', 2], 0,'3',2, 5, 11)); // ['3', 2]