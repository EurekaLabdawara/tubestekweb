<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
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
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function Dashboard()
    {
        //function untuk menampilkan dashboard vendor / toko
        $this->load->view('Vendor/dashboard');
    }

    public function ViewCreateVendor()
    {
        # code...
    }

    public function Create()
    {
        //function untuk menmbuat / inisialisasi vendor/toko


    }

    public function Update()
    {
        //function untuk mengubah informasi toko
    }

    public function Pesanan()
    {
        //function untuk menampilkan list pesanan
    }

    public function UpdateStatusPesanan()
    {
        //function untuk mengupdate status pesanan
    }
}