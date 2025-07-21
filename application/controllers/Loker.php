<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('base_model');
        authorize_user(['pemohon', 'admin']);
    }

    public function info()
    {
        $data['title'] = 'Informasi Lowongan Kerja';
        $this->db->order_by('id_lowongan_kerja', 'DESC');
        $data['data_result'] =  $this->db->get('lowongan_kerja')->result();
        $this->load->view('loker/info', $data);
    }

    public function kelola()
    {
        $data['title'] = 'Kelola Lowongan Kerja';
        $this->db->order_by('id_lowongan_kerja', 'DESC');
        $data['data_result'] =  $this->db->get('lowongan_kerja')->result();
        $this->load->view('loker/kelola', $data);
    }

    public function insert()
    {
        $data = [
            'kriteria' => trim($this->input->post('kriteria', true)),
            'lulusan' => trim($this->input->post('lulusan', true)),
            'keterangan' => trim($this->input->post('keterangan', true)),
        ];

        $this->load->library('upload');
        $data['foto'] = upload_file('foto');

        $this->base_model->insert('lowongan_kerja', $data);
        redirect('loker/kelola');
    }

    public function edit()
    {
        $id_lowongan_kerja = trim($this->input->post('id_lowongan_kerja', true));

        $data = [
            'kriteria' => trim($this->input->post('kriteria', true)),
            'lulusan' => trim($this->input->post('lulusan', true)),
            'keterangan' => trim($this->input->post('keterangan', true)),
        ];

        $foto = $this->base_model->get_one_data_by('lowongan_kerja', 'id_lowongan_kerja', $id_lowongan_kerja)->foto;

        $this->load->library('upload');
        if ($_FILES['foto']['name']) {
            unlink("./file/$foto");
            $data['foto'] = upload_file('foto');
        }

        $this->base_model->update('lowongan_kerja', $data, $id_lowongan_kerja);
        redirect('loker/kelola');
    }

    public function delete($id_lowongan_kerja = null)
    {
        if (is_null($id_lowongan_kerja)) redirect('loker', 'refresh');

        $lowongan_kerja = $this->base_model->get_one_data_by('lowongan_kerja', 'id_lowongan_kerja', $id_lowongan_kerja);
        $foto = $lowongan_kerja->foto;

        $this->base_model->delete('lowongan_kerja', $id_lowongan_kerja);
        redirect("loker/kelola");
    }
}
