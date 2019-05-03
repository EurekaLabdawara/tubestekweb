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
        $this->load->view('vendor/dashboard');
    }

    public function ViewCreateVendor()
    {
        # code...
    }

    public function Create()
    {
        //function untuk menmbuat / inisialisasi vendor/toko
        $input = html_escape($this->input->post());
        // print_r($input);
        $this->load->model('VendorModel');
        $this->session->vendorID = $this->VendorModel->create_toko($input['userID'], $input);
        $this->session->toko = $this->VendorModel->get_toko($this->session->vendorID);
        echo "<script>
        var r = confirm('Toko Berhasil dibuat! Silahkan atur ulang toko anda pada menu Toko Saya');
        if (r == true) {
            window.location.assign('" . base_url() . "');
        }
        </script>";
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
    public function ViewMyItem()
    {
        $this->load->model('ItemModel');
        $items = $this->ItemModel->search_item_byVendor($this->session->userdata('vendorID'));
        foreach ($items as $item) {
            $itemCoverImage[$item->idBarang] = $this->ItemModel->get_item_coverimages($item->idBarang);
            $itemPresetImage[$item->idBarang] = $this->ItemModel->get_item_presetimages($item->idBarang);
            $itemFrameImage[$item->idBarang] = $this->ItemModel->get_item_frameimages($item->idBarang);
        }

        $itemData = (object)array(
            'items' => $items,
            'itemCoverImage' => $itemCoverImage,
            'itemPresetImage' => $itemPresetImage,
            'itemFrameImage' => $itemFrameImage
        );

        print_r($itemData);
        $this->load->view('vendor/item_saya', $itemData);
    }
    public function ViewPesanan()
    {
        $this->load->view('vendor/pesanan');
    }
    public function Pengaturan()
    {
        $this->load->view('vendor/pengaturan');
    }
}