<?php
function toWeirdCase($string) {
    $words = explode(' ',$string);
    $result =[];
    foreach ($words as $it){
        $res = '';
        for ($i=0;$i<strlen($it);$i++){
            if ($i%2==0){
                $let = strtoupper($it[$i]);
                $res = "{$res}{$let}";
            }
            else{
                $let = strtolower($it[$i]);
                $res = "{$res}{$let}";
            }
        }
        $result []= $res;
    }
    return implode(' ',$result);
}


function camel_case( $s){
    $words = explode(' ',$s);
    $result =[];
    foreach ($words as $it){
        $res = '';
        for ($i=0;$i<strlen($it);$i++){
            if ($i==0){
                $let = strtoupper($it[$i]);
                $res = "{$res}{$let}";
            }
            else{
                $let = ($it[$i]);
                $res = "{$res}{$let}";
            }
        }
        $result []= $res;
    }
    return implode('',$result);

}


function smallEnough($a, $limit)
{
    $d = array_filter($a,
        function ($value) use($limit) {
            return ($value>$limit);
        });
    return empty($d);
}

function binaryArrayToNumber($arr) {
    $sum = 0;
    for($i=0 ; $i<count($arr);$i++){
        $sum += $arr[$i] * 2**(count($arr) - $i - 1);
    }
    return $sum;
}

print_r(binaryArrayToNumber([1,1,1,1]));