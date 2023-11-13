<?php

class Mahasiswa extends Controller
{
    function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMhs();
        $data['css'] = 'mahasiswa.css';
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $data['css'] = 'mahasiswa.css';
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    function tambah()
    {
        if ($this->model('mahasiswa_model')->tambahMahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
