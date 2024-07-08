<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        $session = session();
        $isAdmin = $session->get('username') !== null;

        if ($isAdmin) {
            return redirect()->to('/home');
        }

        return view('login');
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'admin_sig' && $password === 'admin_sig_123') {
            $session->set('username', $username);
            return $this->response->setJSON(['success' => true, 'message' => 'Username and Password Valid']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid username or password']);
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('username');
        return redirect('Home');
    }
}
