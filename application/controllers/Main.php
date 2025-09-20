<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function index()
    {
        $this->load->library('template_adminlte');
        $data = array(
          'content'     => 'layout/home',
      	);
        $this->template_adminlte->display('index',$data);
        
    }
}