<?php

class UserModel extends Koneksi {


    public function __construct() {
        parent::__construct();
    }

    public function getAllUser() {
        $this->stmt = $this->conn->prepare('SELECT * FROM user');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUser($nama, $nrp, $program_studi, $nomor_telepon, $email_address, $nama_kelompok, $bukti_pembayaran) {
        $this->stmt = $this->conn->prepare("SELECT EXISTS(SELECT * FROM user WHERE nrp=:nrp OR nama_kelompok=:nama_kelompok) AS result");
        $this->stmt->execute([
            ":nrp" => $nrp,
            ":nama_kelompok" => $nama_kelompok
        ]);
        $result = $this->stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result["result"]) {
            $sql = "INSERT INTO user 
                    VALUES ('$nama', '$nrp', '$program_studi', '$nomor_telepon', '$email_address', '$nama_kelompok', '$bukti_pembayaran')";
            $this->conn->exec($sql);
            $this->conn = null;

            return true;
        } else return false;
    }

}