<?php

include("ImageFilter.php");

class User extends Controller {

    public function index() {
        $data['title'] = 'U-TRON';
        $this->view('layout/header', $data);
        $this->view('user/index', $data);
    }

    public function filterImg() {
        $img = $_FILES["photo"];
        $type = $_POST['filter-type'];
        
        new ImageFilter($img["tmp_name"], $type);
        $nrp = $_SESSION['user'][0]['nrp'];
        $this->model('UserModel')->updateProfilePicture($nrp);

        $this->redirect('user');
    }

    public function insertUser() {
        
        if (isset($_POST['btn-submit'])) {
            $nama               = $_POST['nama'];
            $nrp                = $_POST['nrp'];
            $program_studi      = $_POST['program-studi'];
            $nomor_telepon      = $_POST['nomor-telepon'];
            $email_address      = $_POST['email-address'];
            $password           = $_POST['password'];
            $nama_kelompok      = $_POST['nama-kelompok'];
            $nama_kelompok      = $_POST['nama-kelompok'];

            $ext         = pathinfo($_FILES["bukti-pembayaran"]["name"])['extension'];
            $target_dir  = $_SERVER['DOCUMENT_ROOT'] . '/pendaftaran-utron/public/uploads/';
            $target_file = $target_dir . $nrp . '.' . $ext;

            $bukti_pembayaran = 'bukti_' . $nrp . '.' . $ext;
            
            $result = $this->model('UserModel')->insertUser($nama, $nrp, $program_studi, $nomor_telepon, $email_address, $password, $nama_kelompok, $bukti_pembayaran);

            if ($result) {
                move_uploaded_file($_FILES["bukti-pembayaran"]["tmp_name"], $target_file);
                Flash::setFlash('success', 'Berhasil Mendaftar U-TRON');
            } else {
                Flash::setFlash('danger', 'Gagal Mendaftar U-TRON');
            }
            
            header('Location: ' . BASE_URL . '/home');
            
        } else header('Location: ' . BASE_URL . '/home');
    }

}