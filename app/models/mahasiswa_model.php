<?php

class mahasiswa_model{

    private $table = 'penghuni';
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }
    
    public function getAllMahasiswa(){
        //return $this->mhs;
        
        $this->db->query('select * from ' . $this->table . ' order by id desc limit 3');
        
        return $this->db->resultSet();
    }
    

    public function getMahasiswaByid($id){
        //$this->db->query('select * from ' . $this->table . ' limit 1');
        $this->db->query('select * from ' . $this->table . ' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }    

    public function tambahDataPenghuni($data){
        $query = "insert into penghuni 
                    values
                    ('', :nama, :nama_panggilan, :tempat_kerja)";
        $this->db->query($query);
        $this->bind('nama', $data['nama']);
        $this->bind('nama_panggilan', $data['nama_panggilan']);
        $this->bind('tempat_kerja', $data['tempat_kerja']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}