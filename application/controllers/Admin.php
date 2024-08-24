<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	var $globaldata;
	function __construct()
     {
           parent::__construct();
			$this->load->helper("url");
           $var=$this->session->userdata;
			//print_r($this->session->userdata); die();
           if(isset($var['login_user']))
           {
			  $this->globaldata=array(
				'userdata'=>$var['login_user']
			  );
		   }
     }
	
	public function index()
	{
	$this->load->Model('Display_mod');
		if($this->session->userdata('msg')){
			$session_data = $this->session->userdata('msg');
			$data1['message']=$session_data;
			$this->session->unset_userdata('msg');
		}
		
		
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/index";
		$config['total_rows']=$this->Display_mod->aboutus_count($title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->aboutus_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->aboutus_get($config['per_page'],$pageindex,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/home',$data1);
		$this->load->view('cms/footer');
	}
	public function aboutus()
	{
		{
			$session_data = $this->session->userdata('msg');
			$data1['message']=$session_data;
			$this->session->unset_userdata('msg');
			
			$this->load->Model('Display_mod');
			$data1['dt']=array(
			'pindex'=>$this->input->post('pindex'),
			'page'=>$this->input->post('page')
			);
			$pageindex=$this->input->post('pindex');
			if($pageindex=="")
			{
				$pageindex=0;
			}
			else if($pageindex==1)
			{
				$pageindex=0;
			}
			else if($pageindex >=1)
			{
				$pageindex = intval(($pageindex-1)*6);
			}
			$title = $this->input->post('page');
			$config=array();
			$config['base_url']=base_url()."index.php/Admin/index";
			$config['total_rows']=$this->Display_mod->about_count($title);
			$config['per_page']=6;
			$config['uri_segment']=$pageindex;
			$this->pagination->initialize($config);
			$data1['rowcount']=$this->Display_mod->about_count($title);
			$data1['links']=$this->pagination->create_links();
			$data1['result']=$this->Display_mod->about_get($config['per_page'],$pageindex,$title);
			$data['user']=$this->globaldata['userdata'];
			$data['id']=$this->Display_mod->get_hosid();

		$this->load->view('cms/header',$data);
		$this->load->view('cms/aboutus',$data1);
		$this->load->view('cms/footer');
	}
    // public function Login()
	// {
	// 	$this->load->view('cms/header');
	// 	$this->load->view('cms/login');
	// 	$this->load->view('cms/footer');
	// }
}
 public function mission_vission()
 {
	$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'type1'=>$this->input->post('type1')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*10);
		}
		$page=$this->input->post('page');
		$title=$this->input->post('type1');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/mission_vission";
		$config['total_rows']=$this->Display_mod->vission_count($page,$title);
		$config['per_page']=10;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->vission_count($page,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_vission($config['per_page'],$pageindex,$page,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/mission_vission',$data1);
		$this->load->view('cms/footer');
 }
 public function banner()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*5);
		}
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/banner";
		$config['total_rows']=$this->Display_mod->banner_count();
		$config['per_page']=5;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->banner_count();
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_banner($config['per_page'],$pageindex);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/banner',$data1);
		$this->load->view('cms/footer');
	}
	public function medicalfacilities()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1'),
		'storeArrayvalue'=>$this->input->post('storeArrayvalue')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/index";
		$config['total_rows']=$this->Display_mod->medicalfacility_count($type,$title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->medicalfacility_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['facility']=$this->Display_mod->get_facilitytype();
		$data1['result']=$this->Display_mod->get_medicalfacility($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/medicalfacilities',$data1);
		$this->load->view('cms/footer');
	}
	
// public function diagnostics()
// 	{
// 		$session_data = $this->session->userdata('msg');
// 		$data1['message']=$session_data;
// 		$this->session->unset_userdata('msg');
		
// 		$this->load->Model('Display_mod');
// 		$data1['dt']=array(
// 		'pindex'=>$this->input->post('pindex'),
// 		'page'=>$this->input->post('page'),
// 		'title1'=>$this->input->post('title1')
// 		);

// 		$pageindex=$this->input->post('pindex');
// 		if($pageindex=="")
// 		{
// 			$pageindex=0;
// 		}
// 		else if($pageindex==1)
// 		{
// 			$pageindex=0;
// 		}
// 		else if($pageindex >=1)
// 		{
// 			$pageindex = intval(($pageindex-1)*6);
// 		}

// 		$type = $this->input->post('page');
// 		$title = $this->input->post('title1');
		
// 		$config=array();
// 		$config['base_url']=base_url()."index.php/Admin/diagnostics";
// 		$config['total_rows']=$this->Display_mod->diagnosticsdesc_count($type,$title);
// 		$config['per_page']=6;
// 		$config['uri_segment']=$pageindex;
// 		$this->pagination->initialize($config);
// 		$data1['rowcount']=$this->Display_mod->diagnosticsdesc_count($type,$title);
// 		$data1['links']=$this->pagination->create_links();
// 		$data1['facility']=$this->Display_mod->get_diagnostics();
// 		$data1['result']=$this->Display_mod->get_diagnosticsdesc($config['per_page'],$pageindex,$type,$title);
// 		$data['user']=$this->globaldata['userdata'];
// 		$data['id']=$this->Display_mod->get_hosid();
		
// 		$this->load->view('cms/header', $data);
// 		$this->load->view('cms/diagnostics', $data1);
// 		$this->load->view('cms/footer');
// 	}


	public function department()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'type1'=>$this->input->post('type1'),
		'doc1'=>$this->input->post('doc1')
		);
		$pageindex = $this->input->post('pindex');
		$dept = $this->input->post('page');
		$type1 = $this->input->post('type1');
		$doc1 = $this->input->post('doc1');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/department";
		$config['total_rows']=$this->Display_mod->department_count($dept);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->department_count($dept,$type1,$doc1);
		$data1['links']=$this->pagination->create_links();
		$data1['dept']=$this->Display_mod->get_dept();
		// $data1['dr']=$this->Display_mod->get_dr();
		$data1['result']=$this->Display_mod->get_department($config['per_page'],$pageindex,$dept);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/department',$data1);
		$this->load->view('cms/footer');
	}
	public function founder()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$title = $this->input->post('page');
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/founder";
		$config['total_rows']=$this->Display_mod->founder_count($title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->founder_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->founder_get($config['per_page'],$pageindex,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header', $data);
		$this->load->view('cms/founder', $data1);
		$this->load->view('cms/footer');
	}
    public function newsevents(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex=intval(($pageindex-1)*5);
		}
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/newsevents";
		$config['total_rows']=$this->Display_mod->news_count();
		$config['uri_segment']=$pageindex;
		$config['per_page']=5;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->news_count();
		$data1['links']=$this->pagination->create_links();
		$data1['albumlist']=$this->Display_mod->get_allalbum();
		$data1['newss']=$this->Display_mod->get_news1();
		$data1['result']=$this->Display_mod->get_news($config['per_page'],$pageindex);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/newsevents',$data1);
		$this->load->view('cms/footer');
	}
		public function imagegallery(){
		$session_data = $this->session->userdata('msg');
		
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*5);
		}
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/imagegallery";
		$config['total_rows']=$this->Display_mod->gallery_count();
		$config['uri_segment']=$pageindex;
		$config['per_page']=5;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->gallery_count();
		$data1['links']=$this->pagination->create_links();
		$data1['dept']=$this->Display_mod->get_dept();
		$data1['album']=$this->Display_mod->get_album();
		$data1['result']=$this->Display_mod->get_gallery($config['per_page'],$pageindex);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/imagegallery',$data1);
		$this->load->view('cms/footer');
	}
	public function contactus(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*10);
		}
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/contactus";
		$config['total_rows']=$this->Display_mod->contacts_count();
		$config['uri_segment']=$pageindex;
		$config['per_page']=10;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->contacts_count();
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_contacts($config['per_page'],$pageindex);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/contactus',$data1);
		$this->load->view('cms/footer');
	}
	public function detail_mail()
	{
	   $urll=urldecode($this->uri->segment(3));
       $this->load->Model('Display_mod');
       $data1['result']=$this->Display_mod->get_mail_details($urll);
	   $data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
       $this->load->view('cms/header',$data);
       $this->load->view('cms/detail_mail',$data1);
       $this->load->view('cms/footer');
	}
	public function mail_config()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*5);
		}
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/mail_config";
		$config['total_rows']=$this->Display_mod->mail_count();
		$config['per_page']=5;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->mail_count();
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_mail($config['per_page'],$pageindex);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/mail_config',$data1);
		$this->load->view('cms/footer');
	}	
	public function speciality()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/speciality";
		$config['total_rows']=$this->Display_mod->spedesc_count($type,$title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->spedesc_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['facility']=$this->Display_mod->get_speciality();
		$data1['result']=$this->Display_mod->get_spedesc($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/speciality',$data1);
		$this->load->view('cms/footer');
	}
	public function opd()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$name = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/opd";
		$config['total_rows']=$this->Display_mod->opd_count($name);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->opd_count($name);
		$data1['links']=$this->pagination->create_links();
		$data1['dr']=$this->Display_mod->get_dr();
		$data1['opd']=$this->Display_mod->get_opdetail();
		$data1['result']=$this->Display_mod->get_opd($config['per_page'],$pageindex,$name);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/opd',$data1);
		$this->load->view('cms/footer');
	}
	public function camp(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex=intval(($pageindex-1)*5);
		}
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/camp";
		$config['total_rows']=$this->Display_mod->camp_count();
		$config['uri_segment']=$pageindex;
		$config['per_page']=5;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->camp_count();
		$data1['links']=$this->pagination->create_links();
		$data1['albumlist']=$this->Display_mod->get_allalbum();
		$data1['newss']=$this->Display_mod->get_news1();
		$data1['result']=$this->Display_mod->get_camp($config['per_page'],$pageindex);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/camp',$data1);
		$this->load->view('cms/footer');
	}
	public function smssh(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/smssh";
		$config['total_rows']=$this->Display_mod->mission_count($title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->mission_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_mission($config['per_page'],$pageindex,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/mission',$data1);
		$this->load->view('cms/footer');
	}
		public function More_upload()
	{
		$id = $_POST['id'];
		$this->load->Model('Display_mod');
		$data = $this->Display_mod->upload_more($id);
		print_r(json_encode($data));
	}
	public function Technical_Team()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		$dept = $this->input->post('page');
		$staff = $this->input->post('page2');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/Technical_Team";
		$config['total_rows']=$this->Display_mod->team_count($title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->team_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['dept']=$this->Display_mod->get_department($config['per_page'],$pageindex,$staff);
		$data1['result']=$this->Display_mod->get_team($config['per_page'],$pageindex,$dept,$staff);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/technical_staff',$data1);
		$this->load->view('cms/footer');
	}
	public function diagnostics()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/diagnostics";
		$config['total_rows']=$this->Display_mod->diagnosticsdesc_count($type,$title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->diagnosticsdesc_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['facility']=$this->Display_mod->get_diagnostics();
		$data1['result']=$this->Display_mod->get_diagnosticsdesc($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/diagnostics',$data1);
		$this->load->view('cms/footer');
	}
	public function packegecategory(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/packegecategory";
		$config['total_rows']=$this->Display_mod->category_count($type,$title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->category_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['category']=$this->Display_mod->category();
		$data1['result']=$this->Display_mod->get_category($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/packegecategory',$data1);
		$this->load->view('cms/footer');
	}
	public function packagedescription(){
		$this->load->view('cms/header');
		$this->load->view('cms/packagedescription');
		$this->load->view('cms/footer');
	}
	public function patientresponsibility(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$title =$this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/patientresponsibility";
		$config['total_rows']=$this->Display_mod->response_count($title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->response_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_response($config['per_page'],$pageindex,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/patientresponsibility',$data1);
		$this->load->view('cms/footer');
	}

	public function centerofexcellence(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/centerofexcellence";
		$config['total_rows']=$this->Display_mod->hospitals_count($title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->hospitals_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_hospitals($config['per_page'],$pageindex,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/centerofexcellence',$data1);
		$this->load->view('cms/footer');
	}
	public function alliances(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/alliances";
		$config['total_rows']=$this->Display_mod->alliances_count($type,$title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->alliances_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_alliances($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/alliances',$data1);
		$this->load->view('cms/footer');
	}
	
		public function patienteducation(){
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/patienteducation";
		$config['total_rows']=$this->Display_mod->education_count($title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->education_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_education($config['per_page'],$pageindex,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/patientEducation',$data1);
		$this->load->view('cms/footer');
	}
	public function announcement()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'type1'=>$this->input->post('type1'),
		'doc1'=>$this->input->post('doc1')
		);
		$pageindex = $this->input->post('pindex');
		$dept = $this->input->post('page');
		$type1 = $this->input->post('type1');
		$doc1 = $this->input->post('doc1');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/announcement";
		$config['total_rows']=$this->Display_mod->announcement_count($dept);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->announcement_count($dept,$type1,$doc1);
		$data1['links']=$this->pagination->create_links();
		$data1['dept']=$this->Display_mod->get_dept();
		// $data1['dr']=$this->Display_mod->get_dr();
		$data1['result']=$this->Display_mod->get_announcement($config['per_page'],$pageindex,$dept);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/announcement',$data1); 
		$this->load->view('cms/footer');
	}
	
	public function cashless_facility()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/cashless_facility";
		$config['total_rows']=$this->Display_mod->cashless_facility_count($type,$title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->cashless_facility_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_cashless_facility($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/cashless_facility',$data1);
		$this->load->view('cms/footer');
	}
	


	public function testimonial()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1')
		);
		$pageindex = $this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex > 1)
		{
			$pageindex=intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/testimonial";
		$config['total_rows']=$this->Display_mod->testimonial_count($type,$title);
		$config['uri_segment']=$pageindex;
		$config['per_page']=6;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->testimonial_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_testimonial($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/testimonial',$data1);
		$this->load->view('cms/footer');
	}
	public function career()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/career";
		$config['total_rows']=$this->Display_mod->career_count($title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->career_count($title);
		$data1['links']=$this->pagination->create_links();
		$data1['result']=$this->Display_mod->get_career($config['per_page'],$pageindex,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/career',$data1);
		$this->load->view('cms/footer');
	}
	public function camp_data()
	{
		$session_data = $this->session->userdata('msg');
		$data1['message']=$session_data;
		$this->session->unset_userdata('msg');
		
		$this->load->Model('Display_mod');
		$data1['dt']=array(
		'pindex'=>$this->input->post('pindex'),
		'page'=>$this->input->post('page'),
		'title1'=>$this->input->post('title1')
		);
		$pageindex=$this->input->post('pindex');
		if($pageindex=="")
		{
			$pageindex=0;
		}
		else if($pageindex==1)
		{
			$pageindex=0;
		}
		else if($pageindex >=1)
		{
			$pageindex = intval(($pageindex-1)*6);
		}
		$type = $this->input->post('page');
		$title = $this->input->post('title1');
		$config=array();
		$config['base_url']=base_url()."index.php/Admin/camp_data";
		$config['total_rows']=$this->Display_mod->campdesc_count($type,$title);
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data1['rowcount']=$this->Display_mod->campdesc_count($type,$title);
		$data1['links']=$this->pagination->create_links();
		$data1['facility']=$this->Display_mod->get_campdata();
		$data1['result']=$this->Display_mod->get_campdesc($config['per_page'],$pageindex,$type,$title);
		$data['user']=$this->globaldata['userdata'];
		$data['id']=$this->Display_mod->get_hosid();
		
		$this->load->view('cms/header',$data);
		$this->load->view('cms/camp_data',$data1);
		$this->load->view('cms/footer');
	}
}