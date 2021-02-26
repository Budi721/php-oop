<?php

require_once "exception/validation_exception.php";
require_once "helper/validation.php";
require_once "data/login_request.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
    validateLoginRequest($loginRequest);
    echo "VALID" .PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Error atau engga, akan dieksekusi" . PHP_EOL;
}

