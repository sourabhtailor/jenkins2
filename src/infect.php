<?php
// File: src/Example.php

// This function has high cyclomatic complexity with nested conditions
function complexFunction($a, $b, $c, $d, $e, $f, $g) {
    if ($a > 0) {
        if ($b > 0) {
            if ($c > 0) {
                if ($d > 0) {
                    if ($e > 0) {
                        if ($f > 0) {
                            if ($g > 0) {
                                return true;
                            } else {
                                return false;
                            }
                        } else {
                            return false;
                        }
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// A long function with many lines of redundant operations
function redundantLongFunction($x, $y) {
    $a = $x * $y;
    $b = $x + $y;
    $c = $x - $y;
    $d = $x * $y;
    $e = $x + $y;
    $f = $x - $y;
    $g = $x * $y;
    $h = $x + $y;
    $i = $x - $y;

    // More redundant operations
    $result = $a + $b + $c + $d + $e + $f + $g + $h + $i;

    return $result;
}

// Example of duplicate code (this is similar code repeated multiple times)
function duplicateCodeExample($a, $b) {
    return $a + $b;
}

function duplicateCodeExample2($a, $b) {
    return $a + $b;
}

function duplicateCodeExample3($a, $b) {
    return $a + $b;
}

function duplicateCodeExample4($a, $b) {
    return $a + $b;
}

// Unused variables triggering code smell
function unusedVariableExample($a) {
    $unusedVariable = 100; // This is not used anywhere
    return $a + 10;
}
