<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undian extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('undian');
        $this->load->view('templates/footer');
    }

    public function tambahNama()
    {
        $this->load->view('templates/header');
        $this->load->view('newNama');
        $this->load->view('templates/footer');
    }
}
