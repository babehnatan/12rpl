<?php
class Template_adminlte {
	protected $_ci; 
	     
	function __construct()
	{
		$this->_ci =&get_instance();  //Membuat CI Super Object
	}
	 
	function display($admin,$data=null)
	{
		$data['__header']=$this->_ci->load->view('back-end/layout/header',$data, true);
		$data['__menu']=$this->_ci->load->view('back-end/layout/menu',$data, true);
		$data['__content']=$this->_ci->load->view('back-end/layout/content',$data, true);		
		$data['__footer']=$this->_ci->load->view('back-end/layout/footer',$data, true);
		$this->_ci->load->view('back-end/layout/main.php',$data);
	}
}