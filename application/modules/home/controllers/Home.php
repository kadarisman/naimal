<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        $this->load->view('templates/home_header', $data);
        $this->load->view('home_page');
        $this->load->view('templates/home_footer');
    }
}
