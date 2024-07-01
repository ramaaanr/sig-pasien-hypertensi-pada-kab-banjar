<?php
defined('BASEPATH') or exit("No Direct Script blbl");

class DataMasyarakat extends CI_Controller
{

  function __construct()                                       
  {
    parent::__construct();
    $this->load->model('kecamatan');
    $this->load->model('masyarakat');
  }
  public function index()
  {
    $data['title'] = 'Home Page';
    $data['content'] = $this->load->view('data-masyarakat', $data, TRUE);
    $this->load->view('layouts/main', $data);
  }
  public function showInputMasyarakat()
  {
    $data['title'] = 'Input Masyrakat';
    $data['content'] = $this->load->view('input-masyarakat', $data, TRUE);
    $this->load->view('layouts/main', $data);
  }

  public function get_masyarakat()
  {
    // return json_encode($koordinat_kecamatan);
    $this->output->set_content_type('application/json')->set_output(json_encode($this->masyarakat->get_masyarakat_with_kecamatan()));
  }
  public function insert()
  {
    // Buat array data untuk dimasukkan ke database]
    $data_insert = array(
      'nama' => $this->input->post('nama'),
      'umur' => $this->input->post('umur'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'suku_bangsa' => $this->input->post('suku_bangsa'),
      'agama' => $this->input->post('agama'),
      'status' => $this->input->post('status'),
      'pendidikan' => $this->input->post('pendidikan'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'suku' => $this->input->post('suku'),
      'q1' => $this->input->post('q1'),
      'q2' => $this->input->post('q2'),
      'q3' => $this->input->post('q3'),
      'q4' => $this->input->post('q4'),
      'q5' => $this->input->post('q5'),
      'q6' => $this->input->post('q6'),
      'q7' => $this->input->post('q7'),
      'q8' => $this->input->post('q8'),
      'q9' => $this->input->post('q9'),
      'q10' => $this->input->post('q10'),
      'q11' => $this->input->post('q11'),
      'q12' => $this->input->post('q12'),
      'q13' => $this->input->post('q13'),
      'q14' => $this->input->post('q14'),
      'q15' => $this->input->post('q15'),
      'id_kecamatan' => $this->input->post('kecamatan')
    );

    $result = $this->masyarakat->insert($data_insert);
    $this->kecamatan->increment_jumlah_populasi($this->input->post('kecamatan'), $this->input->post('penderita'));

    if ($result) {
      $this->output->set_content_type('application/json')->set_output(json_encode("Berhasil sukses!"));
    } else {
      $this->output->set_content_type('application/json')->set_output(json_encode("Gagal gagal."));
    }
  }
}