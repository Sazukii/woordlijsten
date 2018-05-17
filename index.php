<?php
<<<<<<< HEAD

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


=======
?>
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Woord Lijsten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
</body>
</html>
>>>>>>> f47f83288a77c162ac5866cc459670a0787033c5
