<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');

	}

	public function index()
	{
		$this->load->view('auth/v_login');
	}

    public function prosesLogin()
    {
        $this->form_validation->set_rules('username', 'Nama', 'required', array('required' => 'Masukan Nama Anda'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Masukan Password Anda'));
        if($this->form_validation->run() == TRUE) {
            
            $nama     	= $this->input->post('username');
            $password = md5($this->input->post('password'));  // Enkripsi password dengan MD5

            $cekUser = $this->M_auth->cekUser($nama);

            if($cekUser){
                foreach ($cekUser as $row )
                if ($password === $row->password) {
                //if($password == $row->password){
                    $this->session->set_userdata('user_id',$row->id);
					$this->session->set_userdata('nama',$row->username);
					$this->session->set_userdata('password',$row->password);
                    $this->session->set_userdata('is_login', TRUE);
                    
                    $this->session->set_flashdata('success_login','Anda berhasil login');
                    redirect('admin/dashboard');
                } else {
                $this->session->set_flashdata('error','username & password yang anda masukan salah');
                redirect('auth');        
                } 
            } else {
            $this->session->set_flashdata('error','username yang anda masukan belum terdaftar');
			redirect('auth');
            }

        } else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('auth');
		}
    }

    public function logout()
	{
        $this->session->unset_userdata('user_id');
		$this->session->unset_userdata('nama');
        $this->session->unset_userdata('password');
		$this->session->unset_userdata('is_login');
		redirect('auth');
	}
}
