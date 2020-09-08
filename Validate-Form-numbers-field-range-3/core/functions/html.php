<?php

/**
 * Generates tag attributes
 * 
 * @param $attrs
 * @return string
 */
function html_attr(array $attrs): string
{
    // $innerForm = '';
    $innerForm = [];
    foreach ($attrs as $key => $attr) {
        // $innerForm .= "$atributes=\"$value\" ";
        $innerForm[] = "$key=\"$attr\"";
    }
    // return $innerForm;
    return implode(' ', $innerForm);
}

/**
 * Generating new input field from given array
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */
function input_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        'type' => $field['type'],
        'value' => $field['value'] ?? ''
    ];
    $attributes += $field['extra']['attr'] ?? [];
    return html_attr($attributes);
}

/**
 * Generates select tag attributes
 * 
 * @param string $field_id
 * @param array $field
 * @return string
 */
function select_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        // 'id' => $field['id'] ?? '',
    ];
    $attributes += $field['extra']['attr'] ?? [];
    return html_attr($attributes);
}

/**
 * Generates option tag attributes
 * 
 * @param string $option_id
 * @param array $field
 * @return string
 */
function option_attr(string $option_id, array $field): string
{
    $attributes = [
        'value' => $option_id,
    ];

    $option = $field['options'][$option_id];
    if ($field['value'] == $option_id) $attributes['selected'] = true;
    if (is_array($option)) $attributes += $option['attr'];

    return html_attr($attributes);
}

/**
 * Generating buttons from given array
 *
 * @param string $button_id
 * @param array $button
 * @return string
 */
function button_attr(string $button_id, array $button): string
{
    $attributes = [
        'name' => 'action',
        'value' => $button_id,
    ];
    $attributes += $button['extra']['attr'] ?? [];
    return html_attr($attributes);
}

// /**
//  * Sanitizing $_POST request by fixed fields
//  *
//  * @param array $field_keys
//  * @return array
//  */
// function sanitize_post(array $field_keys): array
// {
//     $filter_params = [];

//     foreach ($field_keys as $field_key) {
//         $filter_params[$field_key] = FILTER_SANITIZE_SPECIAL_CHARS;
//     }

//     return filter_input_array(INPUT_POST, $filter_params);
// }

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


//  -----------------------------------VALIDATE SPACE & AGE----------------------- 


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

    return $success;
}


// function validate_form(&$form, $form_values)
// {
//     $success = true;    
//     foreach ($form['fields'] as $field_key => &$field) {
//         $field_value = $form_values[$field_key];              
//         foreach ($field['validators'] as $validator) {            
//             if (is_callable($validator) && !is_array($validator)) {
//                 if ($validator($field_value, $field)) {
//                     $field['value'] = $field_value;
//                 } else {
//                     $success = false;
//                     break;
//                 }
//             } 
//             elseif (is_callable($validator) && is_array($validator)) {
//                 foreach ($validator as $params) {
//                     if ($validator($field_value, $field, $params)) {
//                         $field['value'] = $field_value;
//                      } else {
//                          $success = false;
//                          break;
//                     }
//                 }               
//             }
//             // var_dump($validator['validate_field_range']);
//             // var_dump($params);
//             //  var_dump($field['value']);
//             //  var_dump($validator);  
//         }
//      }
//     return $success;     
// }