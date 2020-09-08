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