<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status')!= "login") {
            redirect(base_url().'welcome?pesan=belumlogin');
        }
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function indexProduct()
    {
        $data['product'] = $this->CRUD->tampildata()->result();
        $this->load->view['product/index',$data];
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'welcome?pesan=logout');
    }
    function ganti_password()
    {
        
    }
    function aksi_ganti()
    {
        $pass_baru=$this->input->post('pass_baru');
        $ulang_pass=$this->input->post('ulang_pass');
        $this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
        $this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');
        if ($this->form_validation->run() != false) {
            $data=array(
                'admin_password' => md5($pass_baru)
            );
            $w = array(
                
            )
        }
    }
}
