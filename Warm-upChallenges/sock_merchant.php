<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $pairCount = 0;
    $pairArray = [];

    for ($i = 0; $i < $n; $i++) {
        if (array_key_exists($ar[$i], $pairArray)) {
            $pairArray[$ar[$i]] += 1;
        } else {
            $pairArray[$ar[$i]] = 1;
        }
    }

    foreach ($pairArray as $pair) {
        if (floor($pair / 2) > 0) {
            $pairCount += floor($pair / 2);
        }
    }
    return $pairCount;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
