<?php
function union(...$arr)
{
    $res = [];
    foreach ($arr as $item) {
        if (is_array($item)) {
            foreach ($item as $it) {
                if (!in_array($it, $res))
                    $res[] = $it;
            }
        } else
            if (!in_array($item, $res)) {
                $res[] = $item;
            }
    }
    return $res;
}





print_r(union([3]));
print_r(union([3, 2], [2, 2, 1]));
print_r(union(['a', 3, false], [true, false, 3], [false, 5, 8]));