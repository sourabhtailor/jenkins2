<?php
// File: src/Example.php

function longFunction() {
    $result = 0;
    for ($i = 0; $i < 1000; $i++) {
        $result += $i;
    }
    $result = $result * 2;
    $result = $result - 500;
    $result = $result / 2;
    $result = $result + 1000;
    return $result;
}
