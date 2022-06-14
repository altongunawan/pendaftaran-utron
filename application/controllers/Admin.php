<?php

class Admin extends Controller {

    public function index() {
        $data['title'] = 'Data Pendaftaran U-TRON';
        $data['user'] = $this->model('UserModel')->getAllUser();
        $this->view('layout/header', $data);
        $this->view('admin/index', $data);
    }

}