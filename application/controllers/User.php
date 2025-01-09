<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('base_model');
        authorize_user();
    }

    public function index()
    {
        $data['title'] = 'Informasi User';
        $data['data_result'] = $this->base_model->get_all('user', true);
        $this->load->view('user/index', $data);
    }
}
