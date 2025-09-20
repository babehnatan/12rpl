<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup_model extends CI_Model {

    var $table = 'backups';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->dbforge();
    }

    function showTables()
    {
        //$query = $this->dbforge->drop_database('albahri');
        //$query = $this->dbforge->create_database('albahri');
        return $this->db->query("show tables")->result();
    }

    public function get_by_all()
    {       
        $this->db->from('backups');
        $this->db->order_by('tgl_backup','Desc');
        $query = $this->db->get();

        return $query->result(); 
    }

    public function get_by_id($id)
    {
        $this->db->from('backups');
        $this->db->where('id',$id);
        $query = $this->db->get();

        return $query->row();
    }


    public function tampiltabel()
    {
       return $this->db->query("show tables")->result();
    }

    public function save($data)
    {
        $this->db->insert('backups', $data);
        return $this->db->insert_id();
    }

    public function delete_by_id($id)
    {
        $this->db->where('backup', $id);
        $this->db->delete('backups');
    }
}
