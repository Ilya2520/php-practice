<?php

function buildDefinitionList($arr)
{
    $res = []  ;
    if ($arr)
    {
        foreach ($arr as $item) {
            $res[] = "<dt>{$item[0]}</dt><<dd>{$item[1]}</dd>";
        }
        return "<dl>" . implode("\n", $res) . "</dl>;";
    }
    return '';
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

print_r(buildDefinitionList($definitions));