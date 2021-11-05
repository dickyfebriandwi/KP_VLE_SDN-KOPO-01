<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login_privilege();
        $this->load->model('Materi_model', '', true);
        $this->load->model('Penugasan_model', '', true);
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/index', $data);
        $this->loadtemplateslast();
    }

    #MateriBegin

    public function materi()
    {
        $data['title'] = 'Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/materi', $data);
        $this->loadtemplateslast();
    }
    public function tambah_materi()
    {
        $data['title'] = 'Unggah Materi Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_tambah_materi', $data);
        $this->loadtemplateslast();
    }
    public function buka_materi()
    {
        $data['title'] = 'Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/halaman_buka_materi', $data);
        $this->loadtemplateslast();
    }
    public function ubah_materi()
    {
        $data['title'] = 'Ubah Data Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_ubah_materi', $data);
        $this->loadtemplateslast();
    }
    public function hapus_materi()
    {
    }

    #MateriEnd

    #PenugasanBegin

    public function penugasan()
    {
        $data['title'] = 'Penugasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/penugasan', $data);
        $this->loadtemplateslast();
    }
    public function tambah_penugasan()
    {
        $data['title'] = 'Tambah Penugasan Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_tambah_penugasan', $data);
        $this->loadtemplateslast();
    }
    public function ubah_penugasan()
    {
        $data['title'] = 'Ubah Data Penugasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_ubah_penugasan', $data);
        $this->loadtemplateslast();
    }
    public function hapus_penugasan()
    {
    }
    public function buka_daftar_tugas()
    {
        $data['title'] = 'Daftar Tugas Siswa : *judul tugasnya apa*';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/halaman_daftar_tugas', $data);
        $this->loadtemplateslast();
    }

    #PenugasanEnd

    #KuisBegin

    public function kuis()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/kuis', $data);
        $this->loadtemplateslast();
    }

    #KuisEnd

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
