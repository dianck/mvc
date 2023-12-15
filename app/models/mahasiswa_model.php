<?php

class mahasiswa_model{

    private $table = 'penghuni';
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }
    
    public function getAllMahasiswa(){
        //return $this->mhs;
        
        $this->db->query('select * from ' . $this->table . ' limit 3');
        
        return $this->db->resultSet();
    }
    

    public function getMahasiswaByid($id){
        //$this->db->query('select * from ' . $this->table . ' limit 1');
        $this->db->query('select * from ' . $this->table . ' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }    
}