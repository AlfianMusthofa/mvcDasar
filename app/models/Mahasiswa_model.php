<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function getMhs()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->result_set();
    }

    function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->result_single();
    }

    function tambahMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
