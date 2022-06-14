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

    public function getDataUser($nrp) {
        $this->stmt = $this->conn->prepare('SELECT * FROM user WHERE nrp=:nrp');
        $this->stmt->execute([
            ":nrp" => $nrp
        ]);
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateProfilePicture($nrp) { 
        $this->stmt = $this->conn->prepare('UPDATE user SET foto_profil=:foto_profil WHERE nrp=:nrp');
        $this->stmt->execute([
            ":foto_profil" => $_SESSION['user'][0]['nrp'].".jpg",
            ":nrp" => $nrp
        ]);
    }

    public function insertUser($nama, $nrp, $program_studi, $nomor_telepon, $email_address,$password, $nama_kelompok, $bukti_pembayaran) {
        $this->stmt = $this->conn->prepare("SELECT EXISTS(SELECT * FROM user WHERE nrp=:nrp OR nama_kelompok=:nama_kelompok OR email_address=:email_address) AS result");
        $this->stmt->execute([
            ":nrp" => $nrp,
            ":email_address" => $email_address,
            ":nama_kelompok" => $nama_kelompok
        ]);
        $result = $this->stmt->fetch(PDO::FETCH_ASSOC);

        $enc_password = password_hash($password, PASSWORD_DEFAULT);

        if (!$result["result"]) {
            $sql = "INSERT INTO user (nama, nrp, program_studi, nomor_telepon, email_address, password, nama_kelompok, bukti_pembayaran)
                    VALUES ('$nama','$nrp','$program_studi', '$nomor_telepon', '$email_address', '$enc_password', '$nama_kelompok', '$bukti_pembayaran')";
            $this->conn->exec($sql);
            $this->conn = null;

            return true;
        } else return false;
    }

    public function authLogin($email_address, $password) {

        if (isset($email_address) && isset($password)) {
            $this->stmt = $this->conn->prepare("SELECT nrp, password FROM user WHERE email_address=:email_address");
            $this->stmt->execute([
                ":email_address" => $email_address
            ]);
            $result = $this->stmt->fetch(PDO::FETCH_ASSOC);

            if(!(password_verify($password, $result['password']))) {
                return false;
            }
            return $result['nrp'];
        }
    }

}