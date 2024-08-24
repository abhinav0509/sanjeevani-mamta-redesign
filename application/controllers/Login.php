<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

public function index()
{
	/*$this->load->library('encryption');
    $key = $this->encryption->create_key(16);
    $key = bin2hex($this->encryption->create_key(16));
	echo $key; die();*/
	$this->load->view('cms/login');
}
public function cmslogin()
{
	// $key = $this->encryption->create_key(16);
	// echo $key;
	$this->load->Model('Login_mod');
	$data=array();
	$data = $this->Login_mod->loginadmin();
	 //print_r($data[0]); die("DS");
	if($data!=null)
		{
			$this->session->set_userdata('login_user', $data[0]);			
			redirect('Admin');
		}
	else
		{
			$data['message'] = "Username And Password is incorrect "; 
			$this->load->view('cms/login',$data);
		}
}
public function admin_login()
{
	$this->load->Model('Login_mod');
	$data=array();
	 $data = $this->Login_mod->login_admin($_POST);
	 //print_r($data[0]); die("DS");
	 if($data!=null)
		{
		
			$this->session->set_userdata('login_user', $data[0]);
			//redirect('https://www.medicohelpline.com/HospitalLogin?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&urltab=Home');
			//print_r($this->session->userdata); 
			redirect('Admin');			
		}
	 else
	 {
			$data['message'] = "Username And Password is incorrect "; 
			$this->load->view('cms/login',$data);
	 }
}

public function Logout()
{
	$this->session->unset_userdata('login_user');	
	redirect('Login');
}

}