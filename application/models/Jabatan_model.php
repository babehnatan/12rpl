<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jabatan_model extends CI_Model {

    public function findData($id_data = "")
    {

        return $id_data;

    }

    function simpan_data($data)
    {
        $query  = $this->db->insert('kategori_jabatan',$data);

        return $query;
    }

    function find()
    {
        $this->db->from('kategori_jabatan');
        $query =  $this->db->get()->result();

        return $query;
    }

    function findById($id)
    {
        $this->db->from('kategori_jabatan');
        $this->db->where('id', $id);
        $query =  $this->db->get();

        return $query;
    }

    function update($id, $data)
    {
        $this->db->where('id',$id);
        $query = $this->db->update('kategori_jabatan',$data);

        return $query;
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->delete('kategori_jabatan');

        return $query;
    }
}