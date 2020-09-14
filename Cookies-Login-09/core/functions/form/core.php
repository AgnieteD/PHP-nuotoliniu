<?php

/**
 * Sanitizing $_POST request by form fields
 *
 * @param array $field_keys
 * @return array
 */
function sanitize_form_input_values(array $fields): array
{
    $filter_params = [];

    foreach ($fields['fields'] as $field_key => $field) {
        $filter_params[$field_key] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
        // var_dump($field_value);
    }

    return filter_input_array(INPUT_POST, $filter_params);
}

/**
 * Validates form
 *
 * @param array $form
 * @param array $form_values
 * @return bool
 */
function validate_form(array &$form, array $form_values): bool
{
    $success = true;
    foreach ($form['fields'] as $key => &$field) {
        // go through validators array

        foreach ($field['validators'] as $validator_key => $validator) {
            //check if validator is array
            if (is_array($validator)) {
                $function = $validator_key;
                $params = $validator;
            } else {
                $function = $validator;
            }

            if ($function($form_values[$key], $field, $params ?? null)) {
                $field['value'] = $form_values[$key];
            } else {
                $success = false;
                break;
            }
        }
    }

    foreach ($form['validators'] as $validator_key => $validator) {
        if (is_array($validator)) {
            $function = $validator_key;
            $params = $validator;
        } else {
            $function = $validator;
        }

        if (!$function($form_values, $form, $params ?? null)) {
            $success = false;
            break;
        }
    }
    return $success;
}