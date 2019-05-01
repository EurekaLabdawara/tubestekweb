<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
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
        $this->load->view('Client/dashboard');
    }

    public function UserSettings()
    {
        $this->load->view('Client/usersettings');
    }

    public function SaveUserSettings()
    {
        //function untuk mengupdate perubahan pada user settings
    }

    public function Wishlist()
    {
        $this->load->view('Client/view_wishlist');
    }

    public function Tagihan()
    {
        $this->load->view('Client/tagihan');
    }

    public function DetilTagihan()
    {
        //function untuk melihat detil tagihan
    }

    public function Keranjang()
    {
        $this->load->view('Client/keranjang');
    }

    public function Pembelian()
    {
        $this->load->view('Client/pembelian');
    }
	public function Konfirmasi()
    {
        $this->load->view('Client/konfirmasi_pembayaran');
    }
}