<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login_privilege();
        $this->load->model('Kelas_model', '', true);
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/index', $data);
        $this->loadtemplateslast();
    }

    #AkunBegin

    public function akun()
    {
        $data['title'] = 'Akun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/akun', $data);
        $this->loadtemplateslast();
    }

    public function buka_halaman_akun_guru()
    {
        $data['title'] = 'Akun Guru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/halaman_akun_guru', $data);
        $this->loadtemplateslast();
    }

    public function tambah_akun_guru()
    {
        $data['title'] = 'Form Tambah Akun Guru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/form_tambah_akun_guru', $data);
        $this->loadtemplateslast();
    }

    public function buka_detail_akun_guru()
    {
        $data['title'] = 'Data Akun Guru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/halaman_detail_akun_guru', $data);
        $this->loadtemplateslast();
    }

    public function buka_halaman_akun_siswa()
    {
        $data['title'] = 'Akun Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/halaman_akun_siswa', $data);
        $this->loadtemplateslast();
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar!!',
            'valid_email' => 'Alamat Email tidak benar!!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'password tidak sama!!',
            'min_length' => 'password harus minimal 8 karakter!!'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Akun';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Akun berhasil dibuat!!! </div>');
            redirect('auth');
        }
    }

    #AkunEnd

    #KelasBegin

    public function kelas()
    {
        $data['title'] = 'Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Kelas_model->getKelas();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/kelas', $data);
        $this->loadtemplateslast();
    }

    public function tambah_kelas()
    {
        $data['title'] = 'Kelas';
        $data['subtitle'] = 'Tambah Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->loadtemplatesfirst($data);
        $this->load->view('admin/tambah_kelas', $data);
        $this->loadtemplateslast();
    }

    public function proses_tambah_kelas()
    {
        if ($this->Kelas_model->insertKelas()) {
            redirect(site_url("admin/kelas"));
        } else {
            redirect(site_url("admin/tambah_kelas"));
        }
    }

    #KelasEnd

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
