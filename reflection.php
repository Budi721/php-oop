<?php

require_once "exception/validation_exception.php";
require_once "data/login_request.php";
require_once "helper/validation_util.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;

//ValidationUtil::validate($request);
ValidationUtil::validateReflection($request);


class ValidateUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new ValidateUserRequest();
ValidationUtil::validateReflection($register);
