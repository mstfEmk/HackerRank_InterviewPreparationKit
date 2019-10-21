<?php

// Complete the countingValleys function below.
function countingValleys($n, $s) {
    $level = 0;
    $inValley = false;
    $valleyCount = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        $step = $s[$i];
        if ($step == 'U') {
            $level++;
        } else if ($step == 'D') {
            $level--;
        }
        if ($level < 0) {
            $inValley = true;
        }
        if ($inValley) {
            if ($level == 0) {
                $inValley = false;
                $valleyCount++;
            }
        }
    }
    
    return $valleyCount;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
