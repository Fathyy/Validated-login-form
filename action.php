<?php
// Registration sanitization and validation

    $inputs =[];
    $errors =[];

if (isset($_POST['signup'])) {
    //sanitize the Full name
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $inputs['fname'] = $fname;

        if (!$fname && trim($fname) === '') {
            $errors['fname'] = 'Enter a valid Full name';   
    }

    //sanitize the username
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $inputs['username'] = $username;

        if (!$username && trim($username) === '') {
            $errors['$username'] = 'Enter a username';
        }
    
    // Sanitize the email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $inputs['email'] = $email;
    if ($email) {
        $email  = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email && trim($email) === '') {
            $errors['email'] = 'Please enter a valid email';
        }
        else {
            $errors['email'] = 'Please enter an email';
        }
    }

    // sanitise the password
    $password= filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $inputs['password'] = $password;
    if (!$password && trim($password) === '') {
        $errors['password'] = 'Enter your password';   
    }

    // sanitise the Confirm password
    $cpassword= filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING);
    $inputs['cpassword'] = $cpassword;
    if (!$cpassword && trim($password) === '') {
        $errors['cpassword'] = 'Invalid cpassword';   
    }

echo htmlspecialchars($fname);
echo htmlspecialchars($username);
echo htmlspecialchars($email);
echo htmlspecialchars($password);
echo htmlspecialchars($cpassword);
}

?>
