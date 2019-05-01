<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
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
    public function index()
    {
        //function untuk mendapatkan semua barang
    }

    public function Get()
    {
		$this->load->view('view_item');
        //function untuk mendapatkan barang dengan filter tertentu
    }
	public function Search()
    {
		$this->load->view('view_search');
        //function untuk mendapatkan barang dengan filter tertentu
    }

    public function Create()
    {
        //function untuk membuat barang (di toko)
    }
    public function Update()
    {
        //function untuk mengupdate barang (di toko)
    }
    public function Delete()
    {
        //function untuk menghilangkan barang
    }
}