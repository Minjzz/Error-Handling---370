<?php
require_once 'logger.php';

// Custom Error Handler
function customErrorHandler($errno, $errstr, $errfile, $errline) {

    $message = "Error [$errno] $errstr in $errfile on line $errline";

    log_error($message);

    echo "<h3>Something went wrong. Please try again later.</h3>";

    return true; // Prevent PHP default handler
}

// Custom Exception Handler
function customExceptionHandler($exception) {

    $message = "Uncaught Exception: " . $exception->getMessage();

    log_error($message);

    echo "<h3>A system error occurred.</h3>";
}

// Register Handlers
set_error_handler("customErrorHandler");
set_exception_handler("customExceptionHandler");
