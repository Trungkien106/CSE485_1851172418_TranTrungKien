<?php
function validateUser($user)
{
    
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }
    if (empty($user['emailConf'])) {
        array_push($errors, 'Password is required');
    }
    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Password do not match');
    }
    $existingUser = selectOne('user', ['email' => $user['email']]);
    if (isset($existingUser)) {
        array_push($errors, 'Email already exists');
    }

    return $errors;
}