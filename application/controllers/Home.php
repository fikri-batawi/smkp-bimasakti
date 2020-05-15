<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

        public function index()
        {
                // title
                $data['title'] = 'Beranda';

                //content
                $data['slider'] = $this->db->get_where('content',['type'=>'slider'])->result_array();
                $data['about'] = $this->db->get_where('content',['type' => 'about'])->row_array();
                $data['galery'] = $this->db->get_where('content',['type' => 'galery'])->result_array();

                // course
                $data['course'] = $this->db->get('course')->result_array();

                // News
                $data['news'] = $this->db->get('news')->result_array();

                $this->load->view('temp/header', $data);
                $this->load->view('home', $data);
                $this->load->view('temp/footer', $data);
        }
}