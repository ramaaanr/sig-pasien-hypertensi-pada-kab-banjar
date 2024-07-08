<?php

namespace App\Controllers;

use App\Models\Kecamatan;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class DataKecamatan extends BaseController
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

        return view('data-kecamatan', $data);
    }

    public function get_kecamatan()
    {
        try {
            //code...
            $data = $this->kecamatanModel->findAll();
        return $this->response->setJSON($data);
        } catch (\Throwable $th) {
            //throw $th;
            
        return $this->response->setJSON(['error' => $th->getMessage()]);
        }
    }

    public function get_kecamatan_by_id($id)
    {
        $data = $this->kecamatanModel->find($id);
        return $this->response->setJSON($data);
    }

    public function edit_kecamatan()
    {
        $session = session();
        $isAdmin = $session->get('username') !== null;
        if ($isAdmin) {
            $data['title'] = 'Home Page';
            $data['is_admin'] = true;

            return view('edit-kecamatan', $data);
        } else {
            return redirect()->to('/home');
        }
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
