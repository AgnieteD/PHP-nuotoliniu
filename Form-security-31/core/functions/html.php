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

    foreach ($fields['fields'] as $field_key => $field) 
    {
        $filter_params[$field_key] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
        // var_dump($field_value);
    }

    return filter_input_array(INPUT_POST, $filter_params);
}