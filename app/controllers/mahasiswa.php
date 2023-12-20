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
        
        if($this->model('mahasiswa_model')->tambahDataPenghuni($_POST)>0){
            flasher::setFlash(' berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;            
        }
        
    }

    public function hapus($id){
        
        if($this->model('mahasiswa_model')->hapusDataPenghuni($id)>0){
            flasher::setFlash(' berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;            
        }
        
    }

    public function getUbah(){

       echo json_encode($this->model('mahasiswa_model')->getMahasiswaByid($_POST['id']));
    }

}