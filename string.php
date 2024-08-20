<?php
$strings = ["Hello", "World", "PHP", "Programming"];
function totalVowels($string) {
    $vowels = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u'];
    $vowelSum = 0;
    for ($i = 0; $i < strlen($string); $i=$i+1) {
        if (in_array($string[$i], $vowels)) {
            $vowelSum++;
        }
    }
    return $vowelSum;
}

foreach ($strings as $string) {
    $vowelTotal = totalVowels($string);
    $reversed = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelTotal, Reversed String: $reversed<br>";
}

