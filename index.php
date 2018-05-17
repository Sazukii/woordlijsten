<?php

$data = file_get_contents('OpenTaal-210G-basis-ongekeurd.txt');

$words  = explode(' ', $data);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
    if (strlen($word) > $longestWordLength) {
        $longestWordLength = strlen($word);
        $longestWord = $word;
    }
}

echo $longestWord;


