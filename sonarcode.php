<?php
// File: src/Example.php
function exampleFunction() {
    $a = 1;
    $b = 2;
    $result = 0;
    
    // Adding unnecessary conditions to increase complexity
    if ($a > 0) {
        $result += $a;
    }
    if ($b > 0) {
        $result += $b;
    }
    return $result;
}
