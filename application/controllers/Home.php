<?php
class Home extends CI_Controller 
{
	public function __Construct()
	{	error_reporting(-1);
		parent:: __construct();
	}
	
	function index()
	{
		$data['tab'] = 'HOME';
		$this->load->view('header',$data);
		$this->load->view('home');
	}
}
?>