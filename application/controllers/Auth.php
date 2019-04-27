<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/method_name
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        //function untuk masuk ke landing page
        $this->load->view('landingpage');
    }

    public function login()
    {
        //function untuk pengecekan login
		$input = $this->input->post();
		$this->load->model('AuthModel');
		$email = $input['email'];
		$check = $this->AuthModel->get_user($email);
		//print_r($check);
		if($check){
			if ($input['password']===$check[0]->password){
			print_r("Anda telah masuk");			
			}
			else{
		print_r("Email atau Password anda salah");	
		}
		}
		else{
		print_r("Email atau Password anda salah");	
		}
	}

    public function register()
    {
        //function untuk registrasi
		
		$input = $this->input->post();
		$this->load->model('AuthModel');
		$this->AuthModel->create_user($input);
		redirect(base_url());
	}
}