<?php

function log_error($message) {

    $logFile = __DIR__ . "/logs/error.log";

    $date = date("Y-m-d H:i:s");
    $formattedMessage = "[$date] $message" . PHP_EOL;

    file_put_contents($logFile, $formattedMessage, FILE_APPEND);
}
