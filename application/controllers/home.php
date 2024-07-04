<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('kecamatan');

    }

    public function index()
    {
        $isAdmin = $this->session->userdata('username') != null;
        $data['is_admin'] = $isAdmin;
        $data['title'] = 'Home Page';
        $data['kecamatan'] = $this->kecamatan->get_records();
        $data['content'] = $this->load->view('home', $data, TRUE);
        $this->load->view('layouts/main', $data);
    }

    public function get_kecamatan()
    {
        $data_kecamatan = $this->kecamatan->get_records();
        $this->output->set_content_type('application/json')->set_output(json_encode($data_kecamatan));
    }

    public function get_kecamatan_by_name($nama)
    {
        $koordinat_kecamatan = null;
        $data_kecamatan = $this->kecamatan->get_records();

        foreach ($data_kecamatan as $kecamatan) {
            if ($kecamatan['nama'] === $nama) {
                $koordinat_kecamatan = $kecamatan['koordinat'];
                break;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($koordinat_kecamatan));
    }
}
?>
