<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('base_model');
    }

    public function index()
    {
        $is_login = $this->session->userdata('is_login');
        if ($is_login) redirect('dashboard');

        $this->form_validation->set_rules('email', 'Email', 'trim|callback_validate_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|callback_validate_password');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            $email = $this->input->post('email');
            $this->_login($email);
        }
    }

    public function validate_email($email)
    {
        if (empty($email)) {
            $this->form_validation->set_message('validate_email', 'Silahkan masukan email');
            return FALSE;
        }

        $user = $this->db->get_where('user', ['email' => $email]);

        if ($user->num_rows() === 0) {
            $this->form_validation->set_message('validate_email', 'Email tidak ditemukan');
            return FALSE;
        }
        return TRUE;
    }

    public function validate_password($password)
    {
        if (empty($password)) {
            $this->form_validation->set_message('validate_password', 'Silahkan masukan password');
            return FALSE;
        }

        $email = $this->input->post('email');
        $user = $this->db->get_where('user', ['email' => $email]);

        if ($user->num_rows() == 0) {
            $this->form_validation->set_message('validate_password', '');
            return FALSE;
        }

        if (password_verify($password, $user->row('password'))) {
            return TRUE;
        } else {
            $this->form_validation->set_message('validate_password', 'Password salah');
            return FALSE;
        }
    }

    private function _login($email)
    {
        $user = $this->db->get_where('user', ["email" => $email])->row();

        $data = [
            'is_login' => TRUE,
            'email' => $user->email,
            'id_user' => $user->id_user,
            'user_role' => $user->role,
            'nama_user' => $user->nama,
        ];
        $this->session->set_userdata($data);

        if ($user->role == 'admin') {
            redirect('dashboard');
        } else {
            redirect('loker/info');
        }
    }

    public function register()
    {
        $is_login = $this->session->userdata('is_login');
        if ($is_login) redirect('dashboard');

        $this->form_validation->set_rules('nama', 'Nama', 'trim|callback_validate_nama_regis');
        $this->form_validation->set_rules('email', 'email', 'trim|callback_validate_email_regis');
        $this->form_validation->set_rules('password', 'Password', 'trim|callback_validate_password_regis');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('auth/register', $data);
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->_register($nama, $email, $password);
        }
    }

    public function validate_nama_regis($nama)
    {
        if (empty($nama)) {
            $this->form_validation->set_message('validate_nama_regis', 'Silahkan masukan nama lengkap');
            return FALSE;
        }

        return TRUE;
    }

    public function validate_email_regis($email)
    {
        if (empty($email)) {
            $this->form_validation->set_message('validate_email_regis', 'Silahkan masukan email');
            return FALSE;
        }

        $user = $this->db->get_where('user', ['email' => $email]);

        if ($user->num_rows()) {
            $this->form_validation->set_message('validate_email_regis', 'Email telah terpakai');
            return FALSE;
        }
        return TRUE;
    }

    public function validate_password_regis($password)
    {
        if (empty($password)) {
            $this->form_validation->set_message('validate_password_regis', 'Silahkan masukan password');
            return FALSE;
        }

        if (strlen($password) < 8) {
            $this->form_validation->set_message('validate_password_regis', 'Password harus minimal 8 karakter.');
            return FALSE;
        }

        return TRUE;
    }

    private function _register($nama, $email, $password)
    {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password_hashed,
        ];

        $this->base_model->insert('user', $data);
        redirect('auth', 'refresh');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
