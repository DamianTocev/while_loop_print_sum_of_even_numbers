<?php
$elements = [1, 2, 3, 4, 5, 6];

$sum = 0;
$count = count($elements);
$i = 0;

while ($i < $count) {
    $element = $elements[$i];
    if (is_int($element) && $element % 2 == 0) {
        $sum += $element;
    }
    $i++;
}

echo "<p>The sum of even numbers in the array is {$sum}</p>";
?>