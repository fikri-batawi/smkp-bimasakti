<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{

        public function index()
        {
                $data['title'] = 'Alumni';
                $data['alumni_laut'] = $this->db->get_where('alumni', ['profesi'=>'pelaut'])->result_array();

                $this->load->view('temp/header',$data);
                $this->load->view('alumni', $data);
                $this->load->view('temp/footer');
        }
}
