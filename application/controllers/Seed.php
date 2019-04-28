<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seed extends CI_Controller
{
    public function index()
    {
        $this->load->model('SeedModel');
        $this->SeedModel->SeedUsers();
        // $this->SeedModel->SeedVendors();
    }
}