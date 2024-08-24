<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	

public function update_founder_status()
	{
		$id=$_POST['id'];
		$str=$_POST['str'];
		$this->load->Model('Status_mod');
		$res=$this->Status_mod->founder_status($id,$str);
		if($res){
			$data['message']="Status Changed Successfully!";
			print_r(json_encode($data));
		}
		else{
			$data['message']="Cannot hide single record!";
			print_r(json_encode($data));
		}
	}
	public function aboutus()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->aboutus_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Cannot hide single record!";
		print_r(json_encode($data));
	}
}
public function mission()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->mission_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function patrons()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->patrons_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function management()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->management_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function medicalfacility()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->medicalfacility_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function alliances()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->alliances_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function hospitals()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->hospitals_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function gallery()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->gallery_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function news()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->news_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function contacts()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->contacts_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function responsibility()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->responsibility_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function education()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->education_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function academics()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->academics_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
// public function diagnostics()
// {
// 	$id=$_POST['id'];
// 	$str=$_POST['str'];
// 	$this->load->Model('Status_mod');
// 	$res=$this->Status_mod->diagnostics_status($id,$str);
// 	if($res){
// 		$data['message']="Status Changed Successfully!";
// 		print_r(json_encode($data));
// 	}
// 	else{
// 		$data['message']="Error Please Try Again!";
// 		print_r(json_encode($data));
// 	}
// }
// public function diagnostics()
// 	{
// 		$id=$_POST['id'];
// 		$str=$_POST['str'];
// 		$this->load->Model('Status_mod');
// 		$res=$this->Status_mod->diagnostics_status($id,$str);
// 		if($res){
// 			$data['message']="Status Changed Successfully!";
// 			print_r(json_encode($data));
// 		}
// 		else{
// 			$data['message']="Cannot hide single record!";
// 			print_r(json_encode($data));
// 		}
// 	}
public function infra()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->infra_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function speciality()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->speciality_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function technology()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->technology_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function testimonial()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->testimonial_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function banner_status()
{
	$id=$_POST['id'];
    $oldseq=$_POST['oldseq'];
    $newseq=$_POST['newseq'];

    $this->load->model('Status_mod');
    $res=$this->Status_mod->set_banner_status($id,$oldseq,$newseq);
    if($res){
      $data['message']="success";
      print_r(json_encode($data));
    }
    else{
      $data['message']="Error";
      print_r(json_encode($data));
    }
}
public function vission()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->vission_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function career()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->career_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function mail_config()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->mailconfig_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function opd()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->opd_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function about1()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->about1_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function charity()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->charity_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function highlights()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->highlights_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function aboutacade()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->aboutacade_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function library()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->library_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function director()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->director_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function sv()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->sv_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function rev()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->rev_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function vaswanimission()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->vaswanimission_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function inlaks()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->inlaks_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function cancer()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->cancer_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function teamstatus()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->team_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function camp()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->camp_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
public function diagnostics()
{
	$id=$_POST['id'];
	$str=$_POST['str'];
	$this->load->Model('Status_mod');
	$res=$this->Status_mod->diagnostics_status($id,$str);
	if($res){
		$data['message']="Status Changed Successfully!";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}

public function patienteducation_status()
{
		$id=$_POST['id'];
		$str=$_POST['str'];
		$this->load->Model('Status_mod');
		$res=$this->Status_mod->status_patienteducation($id,$str);
		if($res){
			$data['message']="Status Changed Successfully!";
			print_r(json_encode($data));
		}
		else{
			$data['message']="Cannot hide single record!";
			print_r(json_encode($data));
		}
}

public function announcement_status()
{
		$id=$_POST['id'];
		$str=$_POST['str'];
		$this->load->Model('Status_mod');
		$res=$this->Status_mod->status_announcement($id,$str);
		if($res){
			$data['message']="Status Changed Successfully!";
			print_r(json_encode($data));
		}
		else{
			$data['message']="Cannot hide single record!";
			print_r(json_encode($data));
		}
}

public function cashlessfacility_status()
{
		$id=$_POST['id'];
		$str=$_POST['str'];
		$this->load->Model('Status_mod');
		$res=$this->Status_mod->status_cashlessfacility($id,$str);
		if($res){
			$data['message']="Status Changed Successfully!";
			print_r(json_encode($data));
		}
		else{
			$data['message']="Cannot hide single record!";
			print_r(json_encode($data));
		}
}

public function testimonial_status()
{
		$id=$_POST['id'];
		$str=$_POST['str'];
		$this->load->Model('Status_mod');
		$res=$this->Status_mod->status_testimonial($id,$str);
		if($res){
			$data['message']="Status Changed Successfully!";
			print_r(json_encode($data));
		}
		else{
			$data['message']="Cannot hide single record!";
			print_r(json_encode($data));
		}
}

}
?>