<?php
class Login extends CI_Controller 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
	}
	
	function index()
	{
		if($this->session->userdata('user'))	redirect(base_url());
		$data['tab'] = 'LOGIN';
		$this->load->view('header',$data);
		$this->load->view('login');
	}
	
	function verify_login()
	{	
		$email = $this->security->xss_clean($this->input->post('l_email'));
		$password = md5(md5($this->security->xss_clean($this->input->post('l_password'))));
		$where = array('email'=>$email,'password'=>$password);
		$res= $this->user_model->verify_login($where);
		if($res)
		{
			$this->session->set_userdata('user',$res);
			if($this->session->userdata('redirectTo'))
			{	
				$re = $this->session->userdata('redirectTo');
				$this->session->unset_userdata('redirectTo');
				redirect($re);				
			}
			else
				redirect(base_url());
		}
		else
		{
			$this->session->set_userdata('login_status','failed');
			redirect('login');
		}	 
	}
	/*New user registration*/
	function register()
	{
		date_default_timezone_set("Asia/Kolkata"); 
		$name = $this->security->xss_clean($this->input->post('r_name'));
		$email = $this->security->xss_clean($this->input->post('r_email'));
		$password = md5(md5($this->security->xss_clean($this->input->post('r_pass'))));
		$data = array('name'=>$name,'email'=>$email,'password'=>$password,'date_created'=>date('Y-m-d H:i:s'));
		$res= $this->user_model->register($data);
		if($res)
		{
			$this->session->set_userdata('login_status','register_success');
			redirect('login');
		}
	}	
	/*Avoid email duplication while registration*/
	function check_email()
	{
		if($this->user_model->check_email($_POST['email'])>0)
			echo json_encode(false);
		else
			echo json_encode(true);
	}
	
	function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url());
	}	
}
?>