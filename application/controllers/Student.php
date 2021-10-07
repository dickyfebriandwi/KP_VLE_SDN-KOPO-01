<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
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
        $this->load->view('student/index', $data);
        $this->loadtemplateslast();
    }

    public function materi()
    {
        $data['title'] = 'Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/materi', $data);
        $this->loadtemplateslast();
    }

    public function tugas()
    {
        $data['title'] = 'Tugas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/tugas', $data);
        $this->loadtemplateslast();
    }

    public function kuis()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/kuis', $data);
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
