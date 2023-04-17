<?php

require_once __DIR__. '/helpers.php';

if (is_post_request()) {
    if (isset($_POST['signup'])) {

        // Filter the Full name
        $fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_STRING);
        $inputs['fname'] = $fname;
            if (!$fname && trim($fname) === '') {
                $errors['fname'] = 'Enter a valid Full name';   
        }
    
        // filter the username 
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $inputs['username'] = $username;
            if (!$username && trim($username) === '') {
                $errors['$username'] = 'Enter a valid username';   
        }
        
        // Filter the email
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $inputs['email'] = $email;
            if ($email) {
                $email  = filter_var($email, FILTER_VALIDATE_EMAIL);
            }
            if (!$email && trim($email) === '') {
                $errors['email'] = 'Enter a valid email';   
        }
        else {
            $errors['email'] = 'Please enter an email';
        }
        
    
        // filter the password
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $inputs['password'] = $password;
            if (!$password && trim($password) === '') {
                $errors['$password'] = 'Enter a valid password';   
        }
    
        // filter the confirm password
        $cpassword = filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING);
        $inputs['cpassword'] = $cpassword;
            if (!$cpassword && trim($cpassword) === '') {
                $errors['$cpassword'] = 'Enter a valid Confirm password ';   
        }
    
    }
    if ($errors) {
        // adding inputs and errors array to a session
        redirect_with('register.php', [
        'inputs' => $inputs,
        'errors' => $errors,
    ]);
    }  
}
elseif (is_get_request()) {
    [$errors, $inputs] = session_flash('errors', 'inputs');
}

?>
