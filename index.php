<?php
require_once 'config.php';
require_once 'error_handler.php';

// Example 1: Trigger Warning
echo $undefinedVariable;

// Example 2: Trigger Exception
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

echo divide(10, 0);
