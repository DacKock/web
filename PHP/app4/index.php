<?php
function printArr($array) {
    echo "[ ";
    foreach ($array as $value) {
        if(gettype($value) == "string") {
            echo "'" . $value . "'; ";
        } else {
            echo $value . "; ";
        }
    }
    echo "]";
}

function merge_arrays($arr1, $arr2) {
    $mergedArray = array();
    $count1 = count($arr1);
    $count2 = count($arr2);
    $maxLength = max($count1, $count2);
    for ($i = 0; $i < $maxLength; $i++) {
        if ($i < $count1) {
            $mergedArray[] = $arr1[$i];
        }
        if ($i < $count2) {
            $mergedArray[] = $arr2[$i];
        }
    }
    return $mergedArray;
}

$arr1 = array(1, 5, 2, 3);
$arr2 = array('a', 'b', 'c', 'd', 'e');
$merged = merge_arrays($arr1, $arr2);
printArr($merged);
?>
