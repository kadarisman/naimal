<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => 'Index',
        ];
        $this->load->view('templates/auth_header', $data);
        $this->load->view('login_page');
        $this->load->view('templates/auth_footer');
    }
}
