<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlte extends CI_Controller {
    function index()
    {
       $this->load->view('adminlte',false);
    }

    function test_url()
    {
      echo base_url();
    }

    function test2()
    {
       /* $data['nis'] = '2526001';
        $data['nama'] = 'Herman';*/

        $data = array(
            'nis'  => '2526001',
            'nama'  => 'Herman',
        );

        //$this->load->view('test',$data);
        //echo print_r($data);
        echo json_encode($data);
    }
}