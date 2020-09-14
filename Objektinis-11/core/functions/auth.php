<?php

/**
 * Verifying if user is logged in
 *
 * @return bool 
 */
function is_logged_in(): bool
{
    $users = file_to_array(DB_FILE) ?? [];
    if (empty($_SESSION)) {
        return false;
    } else {
        foreach ($users as $user) {
            if (isset($_SESSION['username']) === isset($user['username']) && isset($_SESSION['password']) === isset($user['password'])) {
                return true;
            }
        }
    }
    return false;
}

function logout($redirect = false)
{
    setcookie('PHPSESSID', null, -1);
    session_destroy();
    $_SESSION = [];
    if ($redirect) {
        header('Location: login.php');
        exit;
    }   
}