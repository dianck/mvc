<?php

class mahasiswa_model{
    private $dbh; //database handler
    private $stmt;
    
    public function __construct(){
        //data source name
        $dsn = "mysql:host=localhost;dbname=dinar397_kost";
        
        try{
            $this->dbh = new PDO($dsn, 'dinar397_kost', 'dckkost1');
        }
    }
    
    private $mhs=[
        [
             "nama" => "Dian Candra Kusuma",
             "nrp" => "71247815",
             "email" => "jhkjfds@gmail.com",
             "jurusan" => "Teknik Elektro"
        ],    

        [
             "nama" => "Sandika Galih",
             "nrp" => "8798988",
             "email" => "abscd@gmail.com",
             "jurusan" => "Teknik Informatika"
        ]    

    ];
    
    public function getAllMahasiswa(){
        return $this->mhs;
    }
}