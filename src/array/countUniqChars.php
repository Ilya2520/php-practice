<?php
function countUniqChars($str)
{
    $res = [];
    for ($i = 0; $i<strlen($str); $i++){
        in_array($str[$i], $res) ? $res[$str[$i]] +=1 : $res[$str[$i]] = 1;
    }
    return count($res);
}

$text1 = 'yyab';
print_r(countUniqChars($text1) . "\n"); // 3

$text2 = 'You know nothing Jon Snow';
print_r(countUniqChars($text2) . "\n"); // 13

$text3 = '';
print_r(countUniqChars($text3)  . "\n"); // 0