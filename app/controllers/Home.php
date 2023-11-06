<?php

class Home extends Controller
{
    function index()
    {
        $data['judul'] = 'Home';
        $data['css'] = 'home.css';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
