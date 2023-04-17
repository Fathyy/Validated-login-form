<?php
function view(string $filename, array $data =[]): void 
{
    // create variables from the associative array
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require_once __DIR__. '/inc/' . $filename . '.php';
}

// if the request method is post
function is_post_request(): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';

}

// if the request method is get
function is_get_request(): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'GET';

}
// function below returns error class if there is an 
// error associated with a field
function error_class(array $errors, string $field): string  
{
    return isset($errors[$field]) ? 'error' : '';

}

// redirects to a page and then exits
function redirect_to(string $url): void 
{
    header('Location:' . $url);
    exit;
}

function redirect_with(string $url, array $items): void 
{
    foreach ($items as $key => $value) {
        $_SESSION['key'] = $value;
    }
    redirect_to($url);
}

// setting a flash message and redirecting to another page
function redirect_with_message(string $url, string $message, string $type = FLASH_SUCCESS)
{
    flash('flash_' . uniqid(), $message, $type);
    redirect_to($url);
}

// get the data from the session and remove it immediately
function session_flash(...$keys): array 
{
    $data = [];
    foreach ($keys as $key) {
        if (isset($_SESSION[$key])) {
            $data[] = $_SESSION[$key];
            unset($_SESSION[$key]);
        }
        else {
            $data[] = [];
        }
    }
    return $data;
}
?>