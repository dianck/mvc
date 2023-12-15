<?php

class mahasiswa extends Controller {
    public function index(){
        //echo '<br>home/index';
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    
    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaByid($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');       
    }
 
    public function tambah(){
        var_dump($_POST);
        
    }
}