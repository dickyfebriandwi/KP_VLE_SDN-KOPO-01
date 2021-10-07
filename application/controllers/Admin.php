<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login_privilege();
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/index', $data);
        $this->loadtemplateslast();
    }

    public function akun()
    {
        $data['title'] = 'Akun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/akun', $data);
        $this->loadtemplateslast();
    }

    public function kelas()
    {
        $data['title'] = 'Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/kelas', $data);
        $this->loadtemplateslast();
    }

    public function loadtemplatesfirst($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
    }
    public function loadtemplateslast()
    {
        $this->load->view('templates/footer');
    }
}
