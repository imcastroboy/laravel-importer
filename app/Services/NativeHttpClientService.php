<?php
namespace App\Services;

use App\Contracts\HttpClient;

class NativeHttpClientService implements HttpClient
{
    public $data;

    public function __construct($source)
    {
        $this->data = file_get_contents($source);
    }

    public function get()
    {
        $data = json_decode($this->data);
        
        return $data->elements;
    }
}