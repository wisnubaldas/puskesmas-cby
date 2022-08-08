<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {

        if ($this->session->userdata('user_login')) {
            redirect('C_dashboard');
        }
        if ($this->session->userdata('pasien_login')) {
            redirect('C_pasien');
        }

        $this->load->view('V_login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $pasien = $this->db->get_where('pasien', ['username' => $username])->row_array();

        if ($user) {
            if ($password == $user['password'] && $user['role'] == 'admin') {
                $data = [
                    'user_login' => $user['username'],
                    'status' => "login"
                ];
                $this->session->set_userdata($data);
                redirect('C_dashboard');
            } else if ($password == $user['password'] && $user['role'] == 'gizi') {
                $data = [
                    'user_login' => $user['username'],
                    'status' => "login"
                ];
                $this->session->set_userdata($data);
                redirect('gizi/C_dashgizi');
            } else if ($password == $user['password'] && $user['role'] == 'umum') {
                $data = [
                    'user_login' => $user['username'],
                    'status' => "login"
                ];
                $this->session->set_userdata($data);
                redirect('umum/C_dashumum');
            } else if ($password == $user['password'] && $user['role'] == 'gigi') {
                $data = [
                    'user_login' => $user['username'],
                    'status' => "login"
                ];
                $this->session->set_userdata($data);
                redirect('gigi/C_dashgigi');
            } else if ($password == $user['password'] && $user['role'] == 'kia') {
                $data = [
                    'user_login' => $user['username'],
                    'status' => "login"
                ];
                $this->session->set_userdata($data);
                redirect('kia/C_dashkia');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah! </div>');
                redirect(base_url());
            }
        } else if ($pasien) {
            if ($password == $pasien['password']) {
                $data = [
                    'pasien_login' => $pasien['username'],
                    'status' => "login"
                ];
                $this->session->set_userdata($data);
                redirect('C_pasien');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah! </div>');
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun tidak terdaftar! </div>');
            redirect(base_url());
        }
    }



    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('C_login'));
    }
}
