<?php
defined('BASEPATH') or exit("No Direct Script blbl");

class Data extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('kecamatan');
    
    $this->load->library('session');
   
  }
  public function index()
  {
    $isAdmin = $this->session->userdata('username') != null;
        $data['is_admin'] = $isAdmin;
    $data['title'] = 'Home Page';
    $data['data'] = $this->kecamatan->get_records();
    $data['content'] = $this->load->view('data', $data, TRUE);
    $this->load->view('layouts/main', $data);
  }

  public function get_kecamatan()
  {
    // return json_encode($koordinat_kecamatan);
    $this->output->set_content_type('application/json')->set_output(json_encode($this->kecamatan->get_records())); // untuk mengambil semua data kecamatan di models
  }
  public function get_kecamatan_by_id($id)
  {
    // return json_encode($koordinat_kecamatan);
    $this->output->set_content_type('application/json')->set_output(json_encode($this->kecamatan->find_record_by_id($id)));
  }

  public function update()
  {
    $input = json_decode($this->input->raw_input_stream, true);
    $id = $input['id'];
    $data = $input['data'];

    $result = $this->kecamatan->update($data, $id);
    if ($result) {
      $this->output->set_content_type('application/json')->set_output(json_encode("Update sukses!"));
    } else {
      $this->output->set_content_type('application/json')->set_output(json_encode("Update gagal."));
    }
  }
}