<?php

class FileDB
{

    private string $file_name;
    private array $data;

    public function __construct(string $file_name)
    {
        $this->file_name = $file_name;
        $this->data = [];
    }

    /**
     * Sets temporary data ($this->data) to passed array
     * 
     * @param array $data_array
     */
    public function setData(array $data_array)
    {
        $this->data = $data_array;
    }

     /**
     * Returns temporary data
     * 
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Saves temporary data array to file as json-encoded string
     *
     * @return bool
     */
    public function save(): bool
    {
        $string = json_encode($this->data);
        $bytes_written = file_put_contents($this->file_name, $string);
        if ($bytes_written === false) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Sets temporary data to decoded json file
     *
     */
    public function load()
    {
        if (file_exists($this->file_name)) {
            $data = file_get_contents($this->file_name);
            $decoded = json_decode($data, true);
            $this->data = $decoded;
        } else {
            $this->data = [];
        }
    }  
}