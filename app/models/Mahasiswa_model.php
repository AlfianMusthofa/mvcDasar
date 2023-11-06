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
}
