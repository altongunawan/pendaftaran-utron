<?php

class Koneksi {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    protected $conn;

    public function __construct() {    
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=pendaftaran-utron", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Koneksi Gagal : " . $e->getMessage();
        }
    }

}