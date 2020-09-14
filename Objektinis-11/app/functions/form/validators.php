<?php

function validate_field_normal_age($field_value, &$field)
{
    if ($field_value < 18 || $field_value > 100) {
        $field['error'] = 'Amzius turi buti normalus';
    } else {
        return true;
    }
}

function validate_field_from_100_to_200($field_value, &$field)
{
    if ($field_value < 100 || $field_value > 200) {
        $field['error'] = 'Skaicius turi buti duotose ribose';
    } else {
        return true;
    }
}

function validate_field_from_50_to_100($field_value, &$field)
{
    if ($field_value < 50 || $field_value > 100) {
        $field['error'] = 'Skaicius turi buti duotose ribose';
    } else {
        return true;
    }
}

/**
 * Validates unique users
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool
{
    $users = file_to_array(DB_FILE) ?: [];  
    foreach ($users as $user) {
        if ($field_value === $user['username']) {
            $field['error'] = 'Toks useris jau egzistuoja';
            return false;
        }           
    }
    return true;    
}