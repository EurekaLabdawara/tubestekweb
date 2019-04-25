<?php
defined('BASEPATH') or exit('No direct script access allowed');

class customplace extends CI_Controller
{
	   public function index()
    {
        //function untuk masuk ke landing page
        $this->load->view('landingpage');
    }

}