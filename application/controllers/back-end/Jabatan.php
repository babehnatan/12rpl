<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jabatan_model','jbt');

    }

    function index()
    {
        $this->load->library('template_adminlte');
        $data = array(
          'content'     => 'form/jabatan',
      	);
        $this->template_adminlte->display('index',$data);
        
    }

    function test()
    {
        echo $this->jbt->findData('1234');
    }

    function save()
    {
        $data = array(
            'nm_jabatan' => 'aaaaaaa', 
        );

        $query = $this->jbt->simpan_data($data);
        if($query)
        {
            echo 'Data telah tersimpan';
        }else{
            echo 'Data gaga disimpan';
        }

    }

    function view()
    {
        $result = $this->jbt->find();

        foreach ($result as $rs) {
            echo $rs->nm_jabatan.'<br>';
        }
    }


    function viewById()
    {
        $temukan = $this->jbt->findById('1');

        if($temukan->num_rows() > 0)
        {
            $row = $temukan->row();
            echo 'Nama Jabatan: '.$row->nm_jabatan;
        }else{
            echo 'Data tidak ditemukan';
        }
    }

    function update()
    {
        $data = array(
            'nm_jabatan'  => 'Cleaning',
        );

        $query = $this->jbt->update('6', $data);
        if($query)
        {
            echo 'Data berhasil dirubah';
        }else{
            echo 'Data gagal dirubah';
        }
    }

    function delete()
    {
        $query = $this->jbt->delete('6');
        if($query)
        {
            echo 'Data berhasil dihapus';
        }else{
            echo 'Data gagal dihapus';
        }
    }
}

