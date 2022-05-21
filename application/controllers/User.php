<?php

class User extends Controller {

    public function __construct() {}

    public function index() {

        $data['title'] = 'Pendaftaran UTRON';

		$this->view('templates/header', $data);
		$this->view('home/index', $data);

    }

}