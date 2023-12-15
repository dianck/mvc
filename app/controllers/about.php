<?php

class About extends Controller {
    public function index($nama='Dck', $pekerjaan='Karyawan', $umur='30'){
        //echo '<br>home/index';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        //echo '<br>home/index';
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    
}