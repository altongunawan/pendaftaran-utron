<?php

class Home extends Controller {

    public function index() {
        $data['title'] = 'Pendaftaran UTRON';
        $this->view('layout/header', $data);
        $this->view('home/index', $data);
    }

}