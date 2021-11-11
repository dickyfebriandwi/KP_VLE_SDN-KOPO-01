<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
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
        $this->load->model('Tugas_model', '', true);
        $this->load->model('Status_Tugas_model', '', true);
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/index', $data);
        $this->loadtemplateslast();
    }

    #MateriBegin

    public function materi()
    {
        $data['title'] = 'Materi';
        $data['subtitle'] = 'Daftar Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();
        $data['tema'] = $this->Tema_model->getTema();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/materi', $data);
        $this->loadtemplateslast();
    }

    public function buka_materi($id)
    {
        $data['title'] = 'Materi';
        $data['subtitle'] = 'Buka Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getMateriById($id)->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/halaman_buka_materi', $data);
        $this->loadtemplateslast();
    }

    #MateriEnd

    #TugasBegin

    public function tugas()
    {
        $data['title'] = 'Tugas';
        $data['subtitle'] = 'Daftar Tugas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();
        $data['tugas'] = $this->Tugas_model->getTugas();
        $data['tema'] = $this->Tema_model->getTema();
        $data['status'] = $this->Status_Tugas_model->getStatusTugas();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/tugas', $data);
        $this->loadtemplateslast();
    }

    public function detail_tugas($id)
    {
        $data['title'] = 'Tugas';
        $data['subtitle'] = 'Form Unggah Tugas';
        $data['id'] = $id;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getPenugasanById($id)->row();
        $data['tugas'] = $this->Tugas_model->getTugas();
        $data['tema'] = $this->Tema_model->getTema();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/form_unggah_tugas', $data);
        $this->loadtemplateslast();
    }

    public function proses_unggah_tugas($id)
    {
        $data = array(
            "user_id" => $this->input->post("user_id"),
            "tema_id" => $this->input->post("tema_id"),
            "kelas_id" => $this->input->post("kelas_id"),
            "penugasan_id" => $this->input->post("penugasan_id"),
            "nilai" => $this->input->post("nilai")
        );

        $idPenugasan = $this->input->post("penugasan_id");
        #config file upload
        $config['upload_path'] = './assets/file/tugas';
        $config['allowed_types'] = 'jpg|png|jpeg|mp4|docx|pptx|ppt|mkv|doc|pdf';

        $this->load->library('upload', $config);
        if (empty($_FILES['url']['name'])) {
            //
            if ($this->Tugas_model->insertTugas($data)) {
                $this->session->set_flashdata('success', 'Tugas berhasil diunggah');

                redirect(site_url("student/tugas"));
            } else {
                redirect(site_url("student/unggah_tugas/$idPenugasan"));
            }
        } else {
            if (!$this->upload->do_upload('url')) {
                $this->session->set_flashdata('error', 'File tidak sesuai. Masukkan file dengan format yang diterima');
                redirect(site_url("teacher/materi"));
            } else {
                $upload_data = $this->upload->data();
                $data['url'] = base_url("assets/file/tugas/") . $upload_data['file_name'];
                if ($this->Tugas_model->insertTugas($data)) {
                    $this->session->set_flashdata('success', 'Tugas berhasil diunggah');
                    redirect(site_url("student/tugas"));
                } else {
                    redirect(site_url("student/unggah_tugas/$idPenugasan"));
                }
            }
        }
    }

    public function buka_tugas()
    {
        $data['title'] = 'Tugas';
        $data['subtitle'] = 'Daftar Tugas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();

        $this->loadtemplatesfirst($data);
        $this->load->view('student/halaman_buka_tugas', $data);
        $this->loadtemplateslast();
    }

    #TugasEnd

    #KuisBegin
    public function kuis()
    {
        $data['title'] = 'Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('student/kuis', $data);
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
