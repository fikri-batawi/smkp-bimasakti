<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('temp/admin_header', $data);
        $this->load->view('temp/admin_sidebar', $data);
        $this->load->view('temp/admin_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('temp/admin_footer');
    }

    public function editProfile()
    {
        $data['title'] = 'Edit profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('temp/admin_header', $data);
            $this->load->view('temp/admin_sidebar', $data);
            $this->load->view('temp/admin_topbar', $data);
            $this->load->view('user/editProfile', $data);
            $this->load->view('temp/admin_footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // Jika mengupload gambar
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/image/profile/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload',$config);

                if($this->upload->do_upload('image')){
                    $old_image = $data['user']['image'];
                    if($old_image != 'default.png'){
                        unlink(FCPATH . 'assets/image/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image',$new_image);
                }else{
                    echo $this->upload->display_error();
                }

            }


            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your profile has been updated!</div>');
            redirect('user');
        }
    }
}
