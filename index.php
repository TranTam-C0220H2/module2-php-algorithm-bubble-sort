<?php
function sortOfMe($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $count = 0;
        for ($j = 0; $j < count($array) - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $valueSwap = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $valueSwap;
                $count++;
            }
        }
        if ($count == 0) {
            break;
        }
    }
    return $array;
}
function bubbleSort($array) {
    for ($i = 0; $i < count($array)-1; $i++) {
        for ($j = $i+1; $j < count($array); $j++) {
            if ($array[$i] < $array[$j]) {
                $valueSwap = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $valueSwap;
            }
        }
    }
    return $array;
}
$arrayInitialization = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
var_dump(bubbleSort($arrayInitialization));
var_dump(sortOfMe($arrayInitialization));
