<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
                $data['title'] = 'Tentang';
                $this->load->view('temp/header', $data);
                $this->load->view('about');
                $this->load->view('temp/footer');
	}
}