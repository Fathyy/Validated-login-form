<?php
$inputs =[];
$errors =[];

const NAME_REQUIRED ="please enter your name";
const PASS_REQUIRED="Please enter password";
const EMAIL_INVALID="Enter a valid email";

// Login sanitization and validation
if (isset($_POST['login'])) {
    //sanitize the username
    $username = filter_input(INPUT_POST, 'lusername', FILTER_SANITIZE_STRING);
    $inputs['lusername'] = $name;
    if ($name) {
        $name=trim($name);
        if ($name === '') {
            $errors['name'] = NAME_REQUIRED;
        }
    }

    // sanitise the password
    $password=filter_input(INPUT_POST, 'lpassword', FILTER_SANITIZE_STRING);
    $inputs['lpassword'] = $password;
}
?>
