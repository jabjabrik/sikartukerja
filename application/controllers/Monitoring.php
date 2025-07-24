<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('monitoring_model');
        $this->load->model('base_model');
        $this->load->library('Dompdf_lib');
        authorize_user(['pemohon', 'admin']);
    }

    public function index()
    {
        $data['title'] = 'Monitoring';
        $id_user = $this->session->userdata('id_user');
        $user_role = $this->session->userdata('user_role');
        $data['data_result'] = $this->monitoring_model->get_all($user_role, $id_user);
        $data['user_role'] = $user_role;
        $this->load->view('monitoring/index', $data);
    }

    public function insert()
    {
        $data = [
            'id_user' => $this->session->userdata('id_user'),
            'nopencaker' => trim($this->input->post('nopencaker', true)),
            'tanggal' => trim($this->input->post('tanggal', true)),
            'status_bekerja' => trim($this->input->post('status_bekerja', true)),
            'tempat_bekerja' => trim($this->input->post('tempat_bekerja', true)),
        ];

        $this->base_model->insert('monitoring', $data);
        redirect('monitoring');
    }

    public function edit()
    {

        $id_monitoring = trim($this->input->post('id_monitoring', true));

        $data = [
            'nopencaker' => trim($this->input->post('nopencaker', true)),
            'tanggal' => trim($this->input->post('tanggal', true)),
            'status_bekerja' => trim($this->input->post('status_bekerja', true)),
            'tempat_bekerja' => trim($this->input->post('tempat_bekerja', true)),
        ];

        $this->base_model->update('monitoring', $data, $id_monitoring);
        redirect('monitoring');
    }

    public function delete($id_monitoring = null)
    {
        if (is_null($id_monitoring)) redirect('monitoring');
        $this->base_model->delete('monitoring', $id_monitoring);
        redirect("monitoring");
    }

    public function report($status)
    {
        $status = urldecode($status);
        $data['data_result'] = $this->monitoring_model->get_all(null, null, $status);
        $data['status'] = $status;
        $html = $this->load->view('monitoring/report', $data, true);

        // Atur DOMPDF
        $this->dompdf_lib->loadHtml($html);
        $this->dompdf_lib->setPaper('A4', 'potrait');
        $this->dompdf_lib->render();

        // Output file PDF
        $this->dompdf_lib->stream("report-monitoring.pdf", array("Attachment" => 0));
    }
}
