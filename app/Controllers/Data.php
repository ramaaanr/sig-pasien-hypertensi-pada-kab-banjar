<?php

namespace App\Controllers;

use App\Models\Kecamatan;
use CodeIgniter\Controller;

class Data extends BaseController
{
    protected $kecamatanModel;

    public function __construct()
    {
        $this->kecamatanModel = new Kecamatan();
        helper(['url', 'form']);
    }

    public function index()
    {
        $session = session();
        $isAdmin = $session->get('username') !== null;
        $data['is_admin'] = $isAdmin;
        $data['title'] = 'Home Page';
        $data['data'] = $this->kecamatanModel->get_records();
        $data['content'] = view('data', $data);

        return view('layouts/main', $data);
    }

    public function get_kecamatan()
    {
        $data = $this->kecamatanModel->findAll();
        return $this->response->setJSON($data);
    }

    public function get_kecamatan_by_id($id)
    {
        $data = $this->kecamatanModel->find($id);
        return $this->response->setJSON($data);
    }

    public function update()
    {
        $input = $this->request->getJSON(true);
        $id = $input['id'];
        $data = $input['data'];

        $result = $this->kecamatanModel->update($id, $data);
        if ($result) {
            return $this->response->setJSON("Update sukses!");
        } else {
            return $this->response->setJSON("Update gagal.");
        }
    }
}
