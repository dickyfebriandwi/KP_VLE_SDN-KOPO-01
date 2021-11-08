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
        $this->load->model('Kelas_model', '', true);
        $this->load->model('User_model', '', true);
        $this->load->model('Tema_model', '', true);
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
        $data['title'] = 'Materi';
        $data['subtitle'] = 'Unggah Materi Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $data['tema'] = $this->Tema_model->getTema();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_tambah_materi', $data);
        $this->loadtemplateslast();
    }

    public function proses_tambah_materi()
    {
        $data = array(
            "user_id" => $this->input->post("user_id"),
            "tema_id" => $this->input->post("tema_id"),
            "kelas_id" => $this->input->post("kelas_id"),
            "is_active" => 1
        );

        #config file upload
        $config['upload_path'] = './assets/file/materi';
        $config['allowed_types'] = 'jpg|png|jpeg|mp4|docx|pptx|ppt|mkv|doc|pdf';

        $this->load->library('upload', $config);
        if (empty($_FILES['file_materi']['name'])) {
            //
            if ($this->Materi_model->insertMateri($data)) {
                $this->session->set_flashdata('success', 'Materi berhasil ditambahkan');
                redirect(site_url("teacher/materi"));
            } else {
                redirect(site_url("teacher/tambah_materi"));
            }
        } else {
            if (!$this->upload->do_upload('file_materi')) {
                $this->session->set_flashdata('error', 'File yang dinputkan tidak sesuai. Masukan file dengan format yang diterima');
                redirect(site_url("teacher/materi"));
            } else {
                $upload_data = $this->upload->data();
                $data['fiel_materi'] = base_url("assets/file/materi/") . $upload_data['file_name'];
                if ($this->Materi_model->insertMateri($data)) {
                    $this->session->set_flashdata('success', 'Materi berhasil ditambahkan');
                    redirect(site_url("teacher/materi"));
                } else {
                    redirect(site_url("teacher/tambah_materi"));
                }
            }
        }
    }
    public function buka_materi($id)
    {
        $data['title'] = 'Materi';
        $data['subtitle'] = 'Buka Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getMateriById($id)->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/halaman_buka_materi', $data);
        $this->loadtemplateslast();
    }
    public function ubah_materi()
    {
        $data['title'] = 'Materi';
        $data['subtitle'] = 'Ubah Data Materi';
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
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Tambah Penugasan Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();

        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_tambah_penugasan', $data);
        $this->loadtemplateslast();
    }

    public function ubah_penugasan()
    {
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Ubah Data Penugasan';
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
