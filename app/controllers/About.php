<?php

class About extends Controller
{
    function index($nama = 'Alfian', $status = 'manusia')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['css'] = 'about.css';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
