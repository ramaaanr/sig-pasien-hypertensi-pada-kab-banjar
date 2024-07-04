<?php
defined('BASEPATH') or exit("No direct script access allowed");

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        
    }

    public function index()
    {
        $isAdmin = $this->session->userdata('username') != null;
        if ($isAdmin) {
            redirect('home');
        }
        $this->load->view('login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username === 'admin_sig' && $password === 'admin_sig_123') {
            $this->session->set_userdata('username', $username);;

            echo json_encode(['success' => true, 'message' => 'Username and Password Valid']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('home');
    }
}
