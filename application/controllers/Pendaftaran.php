<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('base_model');
    }

    public function index()
    {
        authorize_user(['pemohon']);
        $data['title'] = 'Pendaftaran';
        $id_user = $this->session->userdata('id_user');
        $data['pendaftaran'] = $this->base_model->get_one_data_by('pendaftaran', 'id_user', $id_user);
        $data['id_user'] = $id_user;
        // dd($data);
        $this->load->view('pendaftaran/index', $data);
    }

    public function admin()
    {
        authorize_user(['admin']);
        $data['title'] = 'Pendaftaran';
        $id_user = $this->session->userdata('id_user');
        $data['data_result'] = $this->base_model->get_all('pendaftaran');
        $this->load->view('pendaftaran/admin', $data);
    }

    public function insert()
    {
        $data = [
            'id_user' => trim($this->input->post('id_user', true)),
            'nik' => trim($this->input->post('nik', true)),
            'nama' => trim($this->input->post('nama', true)),
            'tempat_lahir' => trim($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => trim($this->input->post('tanggal_lahir', true)),
            'jenis_kelamin' => trim($this->input->post('jenis_kelamin', true)),
            'status_perkawinan' => trim($this->input->post('status_perkawinan', true)),
            'agama' => trim($this->input->post('agama', true)),
            'no_telepon' => trim($this->input->post('no_telepon', true)),
            'pendidikan_terakhir' => trim($this->input->post('pendidikan_terakhir', true)),
            'pengalaman_kerja' => trim($this->input->post('pengalaman_kerja', true)),
        ];

        $this->load->library('upload');
        $data['pas_foto'] = upload_file('pas_foto');
        $data['foto_ktp'] = upload_file('foto_ktp');

        $this->base_model->insert('pendaftaran', $data);
        redirect('pendaftaran');
    }

    public function update()
    {
        $id_pendaftaran = trim($this->input->post('id_pendaftaran', true));

        $data = [
            'nik' => trim($this->input->post('nik', true)),
            'nama' => trim($this->input->post('nama', true)),
            'tempat_lahir' => trim($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => trim($this->input->post('tanggal_lahir', true)),
            'jenis_kelamin' => trim($this->input->post('jenis_kelamin', true)),
            'status_perkawinan' => trim($this->input->post('status_perkawinan', true)),
            'agama' => trim($this->input->post('agama', true)),
            'no_telepon' => trim($this->input->post('no_telepon', true)),
            'pendidikan_terakhir' => trim($this->input->post('pendidikan_terakhir', true)),
            'pengalaman_kerja' => trim($this->input->post('pengalaman_kerja', true)),
        ];

        $pendaftaran = $this->base_model->get_one_data_by('pendaftaran', 'id_pendaftaran', $id_pendaftaran);
        $pas_foto = $pendaftaran->pas_foto;
        $foto_ktp = $pendaftaran->foto_ktp;

        $this->load->library('upload');

        if ($_FILES['pas_foto']['name']) {
            unlink("./file/$pas_foto");
            $data['pas_foto'] = upload_file('pas_foto');
        }

        if ($_FILES['foto_ktp']['name']) {
            unlink("./file/$foto_ktp");
            $data['foto_ktp'] = upload_file('foto_ktp');
        }

        $this->base_model->update('pendaftaran', $data, $id_pendaftaran);
        redirect('pendaftaran');
    }



    public function upload()
    {
        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $data = [
            'status' => 'selesai',
        ];

        // ERROR
        $this->load->library('upload');
        $data['kartu_ak1'] = upload_file('kartu_ak1');

        $this->base_model->update('pendaftaran', $data, $id_pendaftaran);
        redirect('pendaftaran/admin');
    }
}
