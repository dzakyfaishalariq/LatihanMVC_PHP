<?php

class App
{
    //property
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();
        // mengambil isi file controllers
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            // menghapus isi file controller
            unset($url[0]);
        }
        // memanggil isi folder controllers
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // methodnya
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // kelola parameternya
        if (!empty($url)) {
            $this->params = array_values($url);
        }
        // jalankan controlelr dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
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
