<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'comment' => $this->input->post('comment')
        ];
        $this->M_User->add($data);
        redirect('home');
    }
}
