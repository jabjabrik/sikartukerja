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
        $this->db->order_by('id_lowongan_kerja', 'DESC');
        $data['loker'] =  $this->db->get('lowongan_kerja')->result();
        $this->load->view('home/index', $data);
    }
}
