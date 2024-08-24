<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

public function delete_about1()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->aboutus_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_banner()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->banner_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function singleimage_aboutus()
{
	$id=$_POST['id'];
	$img=$_POST['img1'];
	$img_row=$_POST['img_row'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->aboutus_singleimage($id,$img,$img_row);
	if($res)
	{
		$data['message']="Image Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_department()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->department_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function medicalfacility_count($type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('type_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('type_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array = array();
	}
	$this->db->where($array);
	$this->db->select('medical_facility.type_id,medical_facility.title,medical_facility.image,medical_facility.pdesc,medical_facility.id as id,medical_facility.status,facilities_type.type');
	$this->db->from('medical_facility');
	$this->db->join('facilities_type','facilities_type.id=medical_facility.type_id');
	$query=$this->db->get();
	return $query->num_rows();
}
public function get_medicalfacility($limit,$start,$type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('type_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('type_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array = array();
	}
	$this->db->where($array);
	$this->db->select('medical_facility.type_id,medical_facility.title,medical_facility.image,medical_facility.pdesc,medical_facility.id as id,medical_facility.status,facilities_type.type,facilities_type.id as fid');
	$this->db->from('medical_facility');
	$this->db->join('facilities_type','facilities_type.id=medical_facility.type_id');
	$this->db->limit($limit,$start);
	$query=$this->db->get();
	return $query->result_array();
}

public function delete_diagnostics()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->diagnostics_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_founder()
	{
		$id = $_POST['id'];
		$this->load->Model('Delete_mod');
		$res = $this->Delete_mod->founder_delete($id);
		if($res)
		{
			$data['message']="Deleted Succesfully";
			print_r(json_encode($data));
		}
		else
		{
			$data['message']="Error Please Try Again";
			print_r(json_encode($data));
		}
	}
	public function delete_gallery()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->gallery_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function singleimage_gallery()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->gallery_singleimage($id);
	if($res)
	{
		$data['message']="Image Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_news()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->news_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function singleimage_news()
{
	$id=$_POST['id'];
	$img=$_POST['img1'];
	$img_row=$_POST['img_row'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->news_singleimage($id,$img,$img_row);
	if($res)
	{
		$data['message']="Image Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_contacts()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->contacts_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_camp()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->camp_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_alliances()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->alliances_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function singleimage_alliances()
{
	$id=$_POST['id'];
	$img=$_POST['img1'];
	$img_row=$_POST['img_row'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->alliances_singleimage($id,$img,$img_row);
	if($res)
	{
		$data['message']="Image Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_package()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->package_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}


public function delete_patienteducation()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->patienteducation_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}
public function delete_announcement()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->announcement_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}

public function delete_cashlessfacility()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->cashlessfacility_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}

public function delete_testimonial()
{
	$id = $_POST['id'];
	$this->load->Model('Delete_mod');
	$res = $this->Delete_mod->testimonial_delete($id);
	if($res)
	{
		$data['message']="Record Deleted!";
		print_r(json_encode($data));
	}
	else
	{
		$data['message']="Error Please Try again!";
		print_r(json_encode($data));
	}
}


}