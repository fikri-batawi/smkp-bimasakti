<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function index()
    {
        // title
        $data['title'] = 'Home';

        //user
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // content
        $data['slider'] = $this->db->get_where('content', ['type' => 'slider'])->result_array();
        $data['about'] = $this->db->get_where('content', ['type' => 'about'])->row_array();
        $data['galery'] = $this->db->get_where('content', ['type' => 'galery'])->result_array();

        // course
        $data['course'] = $this->db->get('course')->result_array();

        //news
        $data['news'] = $this->db->get('news')->result_array();

        // view
        $this->load->view('temp/admin_header', $data);
        $this->load->view('temp/admin_sidebar', $data);
        $this->load->view('temp/admin_topbar', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('temp/admin_footer');
    }
    public function news()
    {
        $data['id'] = 0;
        if($this->input->get('id')){
            $data['id'] = $this->input->get('id');
            $data['news'] = $this->db->get_where('news',['id'=>$data['id']])->row_array();
        }
        $data['title'] = 'News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // set rules
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('temp/admin_header', $data);
            $this->load->view('temp/admin_sidebar', $data);
            $this->load->view('temp/admin_topbar', $data);
            $this->load->view('pages/news', $data);
            $this->load->view('temp/admin_footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'sub_title' => $this->input->post('sub_title'),
                'content' => $this->input->post('content'),
                'date' => time(),
                'image' => 'default_news.jpg'
            ];
            // Jika mengupload gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/news/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $data['image'] = $new_image;
                } else {
                    echo $this->upload->display_error();
                }
            }

            //send database
            $this->db->insert('news', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">News has been created!</div>');
            redirect('admin');
        }
    }




    // About
    public function editAbout()
    {
        $data['about'] = $this->db->get_where('content', ['type' => 'about'])->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('sub_title', 'Subtitle', 'required');


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, edit about!</div>');
            redirect('pages');
        } else {
            $title = $this->input->post('title');
            $sub_title = $this->input->post('sub_title');

            // Jika mengupload gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/about/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['about']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/image/about/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_error();
                }
            }

            $this->db->set('title', $title);
            $this->db->set('sub_title', $sub_title);
            $this->db->where('type', 'about');
            $this->db->update('content');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success, edit about!</div>');
            redirect('pages');
        }
    }

    // Slider
    public function editSlider()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('sub_title', 'Subtitle', 'required');


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, edit slider!</div>');
            redirect('pages');
        } else {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $sub_title = $this->input->post('sub_title');

            $slide = $this->db->get_where('content', ['id' => $id])->row_array();

            // Jika mengupload gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/slider/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $slide['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/image/slider/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_error();
                }
            }

            $this->db->set('title', $title);
            $this->db->set('sub_title', $sub_title);
            $this->db->where('id', $id);
            $this->db->update('content');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success, edit slider!</div>');
            redirect('pages');
        }
    }

    // Course
    public function addCourse()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('teacher', 'Teacher', 'required');


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, added course!</div>');
            redirect('pages');
        } else {
            $data = [
                'title'   => $this->input->post('title'),
                'teacher' => $this->input->post('teacher'),
                'image'   => 'default_course.png'
            ];

            // Jika mengupload gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/course/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $data['image'] = $new_image;
                } else {
                    echo $this->upload->display_error();
                }
            }

            
            $this->db->insert('course',$data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success, Added course!</div>');
            redirect('pages');
        }
    }
    public function editCourse()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('teacher', 'Teacher', 'required');


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, edit course!</div>');
            redirect('pages');
        } else {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $teacher = $this->input->post('teacher');

            $course = $this->db->get_where('course', ['id' => $id])->row_array();

            // Jika mengupload gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/course/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $course['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/image/course/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_error();
                }
            }

            $this->db->set('teacher', $teacher);
            $this->db->set('title', $title);
            $this->db->where('id', $id);
            $this->db->update('course');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success, edit course!</div>');
            redirect('pages');
        }
    }
    public function deleteCourse()
    {
        $id = $this->input->post('id');
        $course = $this->db->get_where('course', ['id' => $id])->row_array();

        unlink(FCPATH . 'assets/image/course/' . $course['image']);

        $this->db->where('id', $id);
        $this->db->delete('course');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Course deleted!</div>');
        redirect('pages');
    }

    // News
    public function editNews(){
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, edit news!</div>');
            redirect('pages/news?id='.$this->input->post('id'));
        } else {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $sub_title = $this->input->post('sub_title');
            $content = $this->input->post('content');

            $news = $this->db->get_where('news', ['id' => $id])->row_array();

            // Jika mengupload gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/news/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $news['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/image/news/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_error();
                }
            }

            $this->db->set('content', $content);
            $this->db->set('sub_title', $sub_title);
            $this->db->set('title', $title);
            $this->db->where('id', $id);
            $this->db->update('news');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success, edit news!</div>');
            redirect('pages');
        }
    }
    public function deleteNews()
    {
        $id = $this->input->post('id');
        $news = $this->db->get_where('news', ['id' => $id])->row_array();

        unlink(FCPATH . 'assets/image/news/' . $news['image']);

        $this->db->where('id', $id);
        $this->db->delete('news');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">News deleted!</div>');
        redirect('pages');
    }

    // Galery
    public function editGalery()
    {
        $id = $this->input->post('id');
        $galery = $this->db->get_where('content', ['id' => $id])->row_array();

        // Jika mengupload gambar
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['upload_path'] = './assets/image/galery/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $galery['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/image/galery/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
                $this->db->where('id', $id);
                $this->db->update('content');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success, edit galery!</div>');
            } else {
                echo $this->upload->display_error();
            }
        }
        redirect('pages');
    }
}
