<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
    }

    public function index()
    {
        if ($this->session->has_userdata('pelanggan_login')) {
            redirect(base_url());
        }

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('ecom/template/header');
            $this->load->view('ecom/pelanggan/login');
            $this->load->view('ecom/template/footer');
        }
        else
        {
            $this->__login();
        }
    }

    private function __login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $pelanggan = $this->pelanggan_model->get_by_email($email);

        if ($pelanggan)
        {
            if (password_verify($password, $pelanggan->password))
            {
                $session_data = array(
                    'id' => $pelanggan->id,
                    'email' => $pelanggan->email
                );

                $this->session->set_userdata('pelanggan_login', $session_data);

                redirect(base_url());
            }
            else
            {
                $this->session->set_flashdata('error', 'Email atau password salah');
                redirect('login');
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'Email atau password salah');
            redirect('login');
        }
    }
}