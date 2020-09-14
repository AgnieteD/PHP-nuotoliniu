<?php

/**
 * convert array to json and write to file
 *
 * @param $array
 * @param $file_name
 * @return bool
 */
function array_to_file(array $array, string $file_name): bool
{
    $string = json_encode($array);
    // var_dump($string);   
    $bytes_written = file_put_contents($file_name, $string);
    // var_dump($bytes_written);    
    if ($bytes_written === false) {
        return false;
    } else {
        return true;
    }

    //arba
    // $array_json = json_encode($array);
    // return file_put_contents($file_name, $array_json) !== false;
}

/**
 * convert json file to array
 *
 * @param $file_name
 * @return array or bool
 */
function file_to_array(string $file_name)
{
    if (file_exists($file_name)) {
        $data = file_get_contents($file_name);
        $decoded = json_decode($data, true);
        return is_array($decoded) ? $decoded : [];
    } else {
        return false;
    }
    // $data = file_get_contents($file_name);
    // if ($data) {
    //     $decoded = json_decode($data, true);
    //     return $decoded;
    // } else if ($data === '') {
    //     return [];
    // } else {
    //     return false;
    // }
}

/**
 * saves arrays of text to database
 *
 * @param $input
 * @param $form
 * @return string
 */
function save_data($input, array $form)
{
    $database = file_to_array(DB_FILE);
    $database[] = $input;

    return array_to_file($database, DB_FILE);
}