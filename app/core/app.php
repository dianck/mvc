<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct() {
        //echo 'OK <br>';
        
        $url = $this->parseURL();
        //var_dump($url);  
        
        // CONTROLLER
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
            // Pindahkan indeks array ke depan agar indeks numerik dimulai dari 0
            $url = array_values($url);
        } else {
            // Tambahkan penanganan kesalahan jika file controller tidak ditemukan
            //echo '<br>Controller file not found';
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;
 
        // METHOD
        if (isset($url[0])) {
            if (method_exists($this->controller, $url[0])) {
                $this->method = $url[0];
                unset($url[0]);
            }else{
                //echo "<br>Method doesn't Exist<br>";
            }
        }


        // PARAMS
        if (!empty($url)) {
            $this->params = array_values($url);
            //var_dump( $this->params);
        }
        

        //Jalankan Controller & Method, serta kirimkan params
        call_user_func_array([$this->controller, $this->method], $this->params);


    }
    
    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
