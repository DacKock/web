<?php
function printArr($array) {
    echo "[ ";
    foreach ($array as $value) {
        echo $value . "; ";
    }
    echo "]";
}

$myArray = array();
for ($i = 0; $i < 10; $i++) {
    $myArray[] = rand(1, 100);
}
echo "Початковий масив: ";
printArr($myArray);
echo "<br>";

$maxValue = max($myArray);
$minValue = min($myArray);
echo "Максимальне значення: $maxValue<br>";
echo "Мінімальне значення: $minValue<br>";

$maxIndex = array_search($maxValue, $myArray);
$minIndex = array_search($minValue, $myArray);
$myArray[$maxIndex] = $minValue;
$myArray[$minIndex] = $maxValue;
echo "Масив після заміни максимального та мінімального значення: ";
printArr($myArray);
echo "<br>";
?>
