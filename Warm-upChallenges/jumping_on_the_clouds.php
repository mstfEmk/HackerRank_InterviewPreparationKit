<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c) {
    $steps = 0;
    for($i = 0; $i < count($c) - 1; $i++) { // don't need to check last cloud. If loop run for last one steps will be 1 more.
        if (isset($c[$i+2]) && $c[$i+2] == 0) {
            $i++;
        }
        $steps++;
    }
    
    return $steps;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
