<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        authorize_user();
        $this->load->model('dashboard_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['total_pemohon'] = $this->dashboard_model->get_total_pemohon();
        $data['total_pengajuan'] = $this->dashboard_model->get_total_pengajuan();
        $data['total_loker'] = $this->dashboard_model->get_total_loker();

        $this->load->view('dashboard/index', $data);
    }
}
