<?php

function buildDefinitionList($arr)
{
    $res = [];
    if ($arr)
    {
        foreach ($arr as $item) {
            $res[] = "<dl><dt>{$item[0]}</dt><<dd>{$item[0]}</dd>/dl>";
        }
        return implode("\n", $res) . ";";
    }
    return '';
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

print_r(buildDefinitionList($definitions));