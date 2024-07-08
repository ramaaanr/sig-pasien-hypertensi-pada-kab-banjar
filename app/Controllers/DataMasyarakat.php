<?php

namespace App\Controllers;

use App\Models\Kecamatan;
use App\Models\Masyarakat;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class DataMasyarakat extends BaseController
{
    protected $kecamatanModel;
    protected $masyarakatModel;

    public function __construct()
    {
        $this->kecamatanModel = new Kecamatan();
        $this->masyarakatModel = new Masyarakat();
        helper(['url', 'form']);
    }

    public function index()
    {
        $session = session();
        $isAdmin = $session->get('username') !== null;
        $data['is_admin'] = $isAdmin;

        return view('data-masyarakat', $data);
    }

    public function remove_masyarakat($id, $id_kecamatan, $penderita)
    {
        $this->masyarakatModel->delete($id);
        
$this->kecamatanModel->kurangJumlahPopulasi($id_kecamatan, $penderita == 1 ? true : false);
        return redirect()->to('/DataMasyarakat');
    }

    public function showInputMasyarakat()
    {
        $session = session();
        $isAdmin = $session->get('username') !== null;
        $data['is_admin'] = $isAdmin;

        return view('input-masyarakat', $data);
    }

    public function get_masyarakat()
    {
        try {
            //code...
            $data = $this->masyarakatModel->getMasyarakatWithKecamatan();
            return $this->response->setJSON($data);
        } catch (\Throwable $th) {
            return $this->response->setJSON($th->getMessage());
            //throw $th;
        }
    }

    public function insert()
    {
        // Buat array data untuk dimasukkan ke database
        $data_insert = [
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'suku_bangsa' => $this->request->getPost('suku_bangsa'),
            'agama' => $this->request->getPost('agama'),
            'status' => $this->request->getPost('status'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'suku' => $this->request->getPost('suku'),
            'q1' => $this->request->getPost('q1'),
            'q2' => $this->request->getPost('q2'),
            'q3' => $this->request->getPost('q3'),
            'q4' => $this->request->getPost('q4'),
            'q5' => $this->request->getPost('q5'),
            'q6' => $this->request->getPost('q6'),
            'q7' => $this->request->getPost('q7'),
            'q8' => $this->request->getPost('q8'),
            'q9' => $this->request->getPost('q9'),
            'q10' => $this->request->getPost('q10'),
            'q11' => $this->request->getPost('q11'),
            'q12' => $this->request->getPost('q12'),
            'q13' => $this->request->getPost('q13'),
            'q14' => $this->request->getPost('q14'),
            'q15' => $this->request->getPost('q15'),
            'penderita' => $this->request->getPost('penderita') == 'true'? 1 : 0,
            'id_kecamatan' => $this->request->getPost('kecamatan')
        ];

        $result = $this->masyarakatModel->insert($data_insert);
        $kecamatan = intval($this->request->getPost('kecamatan'));
$penderita = $this->request->getPost('penderita') == 'true';


$this->kecamatanModel->tambahJumlahPopulasi($kecamatan, $penderita);


if ($result) {
    return $this->response->setJSON(['status' => 'success', 'message' => 'Berhasil sukses!', ]);
} else {
    return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal gagal.']);
}
    }
}
