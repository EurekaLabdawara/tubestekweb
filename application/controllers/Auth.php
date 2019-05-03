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
        // print_r($this->session->userdata());
        $this->load->view('landingpage');
    }

    public function login()
    {
        //function untuk pengecekan login
        $input = html_escape($this->input->post());
        // print_r($input);
        $this->load->model('AuthModel');
        $email = $input['email'];
        // print_r($email);
        $check = $this->AuthModel->check_user($email);
        // print_r($check);

        if ($check) {
            if (sha1($input['password']) === $check[0]->password) {
                print_r("Anda telah masuk");
                $user = $this->AuthModel->get_user($email)[0];
                // print_r($user);
                $this->session->userID = $user->userID;
                $this->session->email = $user->email;
                $this->session->namaLengkap = $user->namaLengkap;
                $this->session->username = $user->username;
                $this->session->vendorID = $user->vendorID;
                $this->session->alamat = $user->alamat;
                $this->session->nohp = $user->nohp;
                $this->session->profPic = $user->profPic;
                // print_r($this->session->userdata());
                redirect(base_url());
            } else {
                echo "<script>
                var r = confirm('Email atau Password anda salah');
                if (r == true) {
                    window.location.assign('" . base_url() . "');
                }
                </script>";
            }
        } else {
            echo "<script>
                var r = confirm('Email atau Password anda salah');
                if (r == true) {
                    window.location.assign('" . base_url() . "');
                }
                </script>";
        }
    }

    public function register()
    {
        //function untuk registrasi

        $input = html_escape($this->input->post());
        $input['password'] = sha1($input['password']);
        // print_r($input);
        $this->load->model('AuthModel');
        $this->AuthModel->create_user($input);
        $_POST['register'] = 'success';
        echo "<script>
            var r = confirm('Registrasi Berhasil!\nSilahkan masuk dengan menggunakan akun baru anda!');<script>');
            if (r == true) {
                window.location.assign('" . base_url() . "');
            }
            </script>";
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}