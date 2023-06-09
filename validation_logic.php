<?php
const REQUIRED_FIELD_ERROR = 'This field is required!';
$errors = [];

$username = '';
$email = '';
$password = '';
$password_repeat = '';
$cv_url = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = post_data('username');
    $email = post_data('email');
    $password = post_data('password');
    $password_repeat = post_data('password_repeat');
    $cv_url = post_data('cv_url');

    if (!$username) {
        $errors['username'] = REQUIRED_FIELD_ERROR;
    } else if (strlen($username) < 6 || strlen($username) > 16) {
        $errors['username'] = 'Incorrect username value';
    }
    if (!$email) {
        $errors['email'] = REQUIRED_FIELD_ERROR;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Incorrect E-mail value';
    }
    if (!$password) {
        $errors['password'] = REQUIRED_FIELD_ERROR;
    }
    if (!$password_repeat) {
        $errors['password_repeat'] = REQUIRED_FIELD_ERROR;
    }
    if ($password && $password_repeat && strcmp($password, $password_repeat) !== 0) {
        $errors['password_repeat'] = 'This must match the password field';
    }
    if ($cv_url && !filter_var($cv_url, FILTER_VALIDATE_URL)) {
        $errors['cv_url'] = 'Incorrect URL value';
    }

    if (empty($errors)) {
        // Everything is good
        echo 'Successfully registered!';
    }
}

function post_data($field): string
{
    $_POST[$field] ??= '';
    return htmlspecialchars(stripslashes($_POST[$field])); // protect from XXS attack
}