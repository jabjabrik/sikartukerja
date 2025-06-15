<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('base_model');
    }

    public function index()
    {
        $data['loker'] = $this->base_model->get_all('lowongan_kerja');
        $this->load->view('home/index', $data);
    }
}
