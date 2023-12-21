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
        $query = "INSERT INTO `penghuni` (`nama`, `nama_panggilan`, `tempat_kerja`) VALUES ('" . $data['nama'] . "', '". $data['nama_panggilan'] ."', '". $data['tempat_kerja'] ."')";
        $this->db->query($query);
        //$this->bind('nama', $data['nama']);
        //$this->bind('nama_panggilan', $data['nama_panggilan']);
        //$this->bind('tempat_kerja', $data['tempat_kerja']);

        $this->db->execute();
        
        //return 1;
        return $this->db->rowCount();
    }

    public function hapusDataPenghuni($id){
        $query = "DELETE FROM `penghuni` WHERE id=".$id;
        echo "<br>SQL: ".$query;
        $this->db->query($query);
        //$this->bind('id', $id);
        $this->db->execute();

        
        return $this->db->rowCount();
    }   

    public function ubahDataPenghuni($data){
        $query= "UPDATE penghuni SET 
                 nama = '".$data['nama']."',
                 nama_panggilan = '".$data['nama_panggilan']."',
                 tempat_kerja = '".$data['tempat_kerja']."'
                 WHERE id = '".$data['id']."'";
        
        //var_dump($query);
        $this->db->query($query);
        $this->db->execute();
        /*
        $this->bind('nama', $data['nama']);
        $this->bind('nama_panggilan', $data['nama_panggilan']);
        $this->bind('tempat_kerja', $data['tempat_kerja']);
        $this->bind('id', $data['id']);

        */
        return $this->db->rowCount();
    }

    public function cariDataMahasiswa(){
        $keyword = $_POST['keyword'];

        $query = "SELECT * FROM PENGHUNI WHERE nama like '%".$keyword."%' ";
        //$query = "SELECT FROM PENGHUNI WHERE nama like :keyword ";

        var_dump($query);
        //$this->db->query($query);
        //$this->db->bind('keyword', "%$keyword%");

        //return $this->db->resultSet();
    }
}