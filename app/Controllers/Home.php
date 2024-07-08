<?php

namespace App\Controllers;

use App\Models\Kecamatan;
use CodeIgniter\Controller;

class Home extends BaseController
{
    protected $kecamatanModel;

    public function __construct()
    {
        $this->kecamatanModel = new Kecamatan();
    }

    public function index()
    {
        $session = session();
        $isAdmin = $session->get('username') !== null;
        $data['is_admin'] = $isAdmin;
      
        return view('home', $data);
    }

    public function get_kecamatan()
    {
        $data_kecamatan = $this->kecamatanModel->getRecords();
        return $this->response->setContentType('application/json')->setJSON($data_kecamatan);
    }

    public function get_kecamatan_by_name($nama)
    {
        $koordinat_kecamatan = null;
        $data_kecamatan = $this->kecamatanModel->getRecords();

        foreach ($data_kecamatan as $kecamatan) {
            if ($kecamatan['nama'] === $nama) {
                $koordinat_kecamatan = $kecamatan['koordinat'];
                break;
            }
        }

        return $this->response->setContentType('application/json')->setJSON($koordinat_kecamatan);
    }
}
