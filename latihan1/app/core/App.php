<?php

class App
{
    public function __construct()
    {
        var_dump($this->parseURL());
    }
    public function parseURL()
    {
        // code...
        // mengambil url
        if (isset($_GET['url'])) {
            // menghilangkan tanda slash di akhir url
            $url = rtrim($_GET['url']);
            // menghilangkan tanda slash di awal url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // menghilangkan tanda slash di awal dan akhir url
            $url = explode('/', $url);
            return $url;
        } else {
            $url = '';
        }
    }
}
