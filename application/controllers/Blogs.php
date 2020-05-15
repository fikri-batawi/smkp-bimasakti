<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function index()
	{
                $data['title'] = 'Berita Terbaru';
        $this->load->view('temp/header', $data);
        $this->load->view('blogs');
        $this->load->view('temp/footer');
	}
}