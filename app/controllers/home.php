<?php

class home extends Controller {
    public function index(){
        //echo '<br>home/index';
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('user_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}