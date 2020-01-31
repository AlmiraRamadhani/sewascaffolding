<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required', [
            'required' => 'Username harus diisi!',
            'valid_username' => 'Format username harus valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->login();
        }
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min-length:8');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() != false) {
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );
            $cek = $this->crud->cek_login("admin", $where)->num_rows();
            if ($cek > 0) {
                $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                );
                $this->session->set_userdata($data_session);
                redirect(base_url() . 'admin');
            } else {
                redirect(base_url() . 'welcome?pesan=gagal');
            }
        } else {
            echo "Username dan password salah !";
        }
    }
}
