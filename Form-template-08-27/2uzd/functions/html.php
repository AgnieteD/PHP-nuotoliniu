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