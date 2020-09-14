<?php

function validate_field_not_empty($field_value, &$field)
{
    if ($field_value === '') {
        $field['error'] = 'Laukelis tuscias';
    } else {
        return true;
    }
}

function validate_field_is_number($field_value, &$field)
{
    if (!is_numeric($field_value)) {
        $field['error'] = 'Laukelio vertė privalo būti skaičius';
    } else {
        return true;
    }
}


//  --------------------VALIDATE SPACE & AGE----------------------- 


function validate_field_has_space_between($field_value, &$field)
{
    $has_space = strpos($field_value, ' ');

    if ($has_space === false) {
        $field['error'] = 'Privalo buti tarpas';
    } elseif ($field_value != trim($field_value)) {
        $field['error'] = 'Neturi buti tarpo pradzioje ar pabaigoje';
    } else {
        return true;
    }
}

/**
 * validate if number is in range
 *
 * @param string $field_value
 * @param array $field
 * @param array $params
 * @return bool or null
 */
function validate_field_range(string $field_value, array &$field, array $params): ?bool
{
    if (($field_value < $params['min']) || ($field_value > $params['max'])) {
        $field['error'] = strtr('Laukelio vertė turi būti @from iki @to', [
            '@from' => $params['min'],
            '@to' => $params['max']
        ]);
        return false;
    } else {
        return true;
    }
}

/**
 * validates matching fields
 *
 * @param string $field_value
 * @param array $form
 * @param array $params
 * @return bool
 */
function validate_fields_match(array $form_values, array &$form, array $params): bool
{
    // var_dump(['form_values' => $form_values, 'params' => $params]);
    $reference_value = $form_values[$params['fields'][0]];
    foreach ($params['fields'] as $param) {
        $field_value = $form_values[$param];
        if ($field_value !== $reference_value) {
            $form['error'] = $params['error'] ?? 'Slaptazodziai turi sutapti';
            return false;
        }
    }
    return true;
}