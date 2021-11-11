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
        $this->load->model('Tugas_model', '', true);
        $this->load->model('Kuis_model', '', true);
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
        $data['subtitle'] = 'Daftar Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $data['tema'] = $this->Tema_model->getTema();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/materi', $data);
        $this->loadtemplateslast();
    }
    public function tambah_materi()
    {
        $data['title'] = 'Materi';
        $data['subtitle'] = 'Form Tambah Materi';
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
            "nama_file" => $this->input->post("nama_file"),
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
                $this->session->set_flashdata('error', 'File tidak sesuai. Masukkan file dengan format yang diterima');
                redirect(site_url("teacher/materi"));
            } else {
                $upload_data = $this->upload->data();
                $data['file_materi'] = base_url("assets/file/materi/") . $upload_data['file_name'];
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
    public function ubah_materi($id)
    {
        $data['title'] = 'Materi';
        $data['subtitle'] = 'Ubah Data Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();
        $data['materi'] = $this->Materi_model->getMateriById($id)->row();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $data['tema'] = $this->Tema_model->getTema();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_ubah_materi', $data);
        $this->loadtemplateslast();
    }

    public function proses_ubah_materi($id)
    {
        $data = array(
            "nama_file" => $this->input->post("nama_file"),
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
            if ($this->Materi_model->updateMateri($data, $id)) {
                $this->session->set_flashdata('success', 'Materi berhasil ditambahkan');
                redirect(site_url("teacher/materi"));
            } else {
                redirect(site_url("teacher/ubah_materi/" . $id));
            }
        } else {
            if (!$this->upload->do_upload('file_materi')) {
                $this->session->set_flashdata('error', 'File yang dinputkan tidak sesuai. Masukan file dengan format yang diterima');
                redirect(site_url("teacher/materi"));
            } else {
                $upload_data = $this->upload->data();
                $data['file_materi'] = base_url("assets/file/materi/") . $upload_data['file_name'];
                if ($this->Materi_model->updateMateri($data, $id)) {
                    $this->session->set_flashdata('success', 'Materi berhasil ditambahkan');
                    redirect(site_url("teacher/materi"));
                } else {
                    redirect(site_url("teacher/ubah_materi/" . $id));
                }
            }
        }
    }

    public function hapus_materi($id)
    {
        $this->Materi_model->deleteMateri($id);
        redirect(site_url("teacher/materi"));
    }

    #MateriEnd

    #PenugasanBegin

    public function penugasan()
    {
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Daftar Penugasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();
        $data['tema'] = $this->Tema_model->getTema();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/penugasan', $data);
        $this->loadtemplateslast();
    }

    public function tambah_penugasan()
    {
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Form Tambah Penugasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();
        $data['tema'] = $this->Tema_model->getTema();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_tambah_penugasan', $data);
        $this->loadtemplateslast();
    }

    public function proses_tambah_penugasan()
    {
        if ($this->Penugasan_model->insertPenugasan()) {
            redirect(site_url("teacher/penugasan"));
        } else {
            redirect(site_url("teacher/tambah_tugas"));
        }
    }

    public function ubah_penugasan($id)
    {
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Ubah Data Penugasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();
        $data['penugasan'] = $this->Penugasan_model->getPenugasanById($id)->row();
        $data['tema'] = $this->Tema_model->getTema();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_ubah_penugasan', $data);
        $this->loadtemplateslast();
    }

    public function proses_ubah_penugasan($id)
    {
        if ($this->Penugasan_model->updatePenugasan($id)) {
            redirect(site_url("teacher/penugasan"));
        } else {
            redirect(site_url("teacher/ubah_penugasan/" . $id));
        }
    }

    public function hapus_penugasan($id)
    {
        $this->Penugasan_model->deletePenugasan($id);
        redirect(site_url("teacher/penugasan"));
    }

    public function buka_daftar_tugas($id)
    {
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Penugasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->User_model->getUserSiswa();
        $data['penugasan'] = $this->Penugasan_model->getPenugasanById($id)->row();
        $data['tugas'] = $this->Tugas_model->getTugas();
        $data['tema'] = $this->Tema_model->getTema();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/halaman_daftar_tugas', $data);
        $this->loadtemplateslast();
    }

    public function buka_detail_tugas($id)
    {
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Tugas Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->User_model->getUserSiswa();
        $data['tugas'] = $this->Tugas_model->getTugasById($id)->row_array();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/halaman_buka_tugas', $data);
        $this->loadtemplateslast();
    }

    public function buka_tabel_nilai_tugas()
    {
        $data['title'] = 'Penugasan';
        $data['subtitle'] = 'Tabel Nilai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->User_model->getUserSiswa();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $data['penugasan'] = $this->Penugasan_model->getAllPenugasan();
        $data['tugas'] = $this->Tugas_model->getTugas();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/halaman_tabel_nilai_tugas', $data);
        $this->loadtemplateslast();
    }

    public function proses_nilai_tugas($id)
    {
        if ($this->Tugas_model->updateNilai($id)) {
            redirect(site_url("teacher/buka_detail_tugas/$id"));
        } else {
            redirect(site_url("teacher/buka_detail_tugas/$id"));
        }
    }

    #PenugasanEnd

    #KuisBegin

    public function kuis()
    {
        $data['title'] = 'Kuis';
        $data['subtitle'] = 'Daftar Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kuis'] = $this->Kuis_model->getAllKuis();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/kuis', $data);
        $this->loadtemplateslast();
    }

    public function tambah_kuis()
    {
        $data['title'] = 'Kuis';
        $data['subtitle'] = 'Form Tambah Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kuis'] = $this->Kuis_model->getAllKuis();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/form_tambah_kuis', $data);
        $this->loadtemplateslast();
    }

    public function buka_daftar_kuis()
    {
    }

    public function ubah_kuis()
    {
    }

    public function hapus_kuis()
    {
    }

    public function buka_detail_kuis()
    {

    }

    public function buka_tabel_nilai_kuis()
    {
        $data['title'] = 'Kuis';
        $data['subtitle'] = 'Tabel Nilai Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->User_model->getUserSiswa();
        $data['kelas'] = $this->Kelas_model->getKelasASC();
        $data['kuis'] = $this->Kuis_model->getAllKuis();
        $this->loadtemplatesfirst($data);
        $this->load->view('teacher/halaman_tabel_nilai_kuis', $data);
        $this->loadtemplateslast();
    }

    public function buat_soal_kuis()
    {

    }

    public function ubah_soal_kuis()
    {
        
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
