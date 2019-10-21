<?php

// Complete the repeatedString function below.
function repeatedString($s, $n) {
    $repeatCount = 0;
    $lastPart = '';
    $searchFor = 'a';

    $repeatCount = floor($n / strlen($s));
    
    $lastPart = substr($s, 0, $n - ($repeatCount * strlen($s)));


    return countChar($s, $searchFor) * $repeatCount + countChar($lastPart, $searchFor);

}

function countChar($st, $char) 
{
    $count = 0;
    for ($i = 0; $i < strlen($st); $i++) {
        if ($st[$i] == $char) {
            $count++;
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

fscanf($stdin, "%ld\n", $n);

$result = repeatedString($s, $n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
