<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_mod extends CI_Model {

public function aboutus_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('aboutus');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function aboutus_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('aboutus',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}


public function founder_delete($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->delete('founder');
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function department_delete($id)
{
	$this->db->where('dept_id',$id);
// 	$query = $this->db->delete('doctors');
	$this->db->where('dept_id',$id);
	$query = $this->db->delete('department_hod');
	$this->db->where('id',$id);
	$query = $this->db->delete('department');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function alliances_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('alliances');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function alliances_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('alliances',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function package_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('package_test');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function hospitals_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('hospitals');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function hospitals_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('hospitals',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function gallery_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('gallery_album');
	
	$this->db->where('album_id',$id);
	$query1 = $this->db->delete('gallery_image');
	if($query1)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function gallery_singleimage($id)
{
	$this->db->where('id',$id);
	$query1 = $this->db->delete('gallery_image');
	if($query1)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function news_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('news');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function news_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('news',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}

public function responsibility_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('patient_responsibility');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function responsibility_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('patient_responsibility',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
// public function education_delete($id)
// {
// 	$this->db->where('id',$id);
// 	$query = $this->db->delete('patient_education');
// 	if($query)
// 	{
// 		return true;
// 	}
// 	else
// 	{
// 		return false;
// 	}
// }
public function education_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('patient_education',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function academics_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('academics_desc',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function diagnostics_delete($id)
{
	$this->db->where('d_id',$id);
	$query = $this->db->delete('diagnostics_desc');
	
	$this->db->where('id',$id);
	$query = $this->db->delete('diagnostics');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function diagnostics_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('diagnostics_desc',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function infra_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('infra_desc');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function infra_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('infra_desc',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function speciality_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('speciality_desc');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function speciality_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('speciality_desc',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function technology_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('tech_desc');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function technology_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('tech_desc',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function testimonial_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('testimonial');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function banner_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('banner');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function vission_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('mission_vission');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function career_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('career');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function inbox_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('enquiry');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function mailconfig_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('mail_config');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function opddetails_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('opd_schedule');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function opd_delete($id)
{
	$this->db->where('dr_id',$id);
	$query = $this->db->delete('opd_schedule');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function about1_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('about');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function charity_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('charity');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function highlights_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('highlights');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function aboutacade_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('academics_about');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function library_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('library');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function academics_delete($id)
{
	$this->db->where('a_id',$id);
	$query = $this->db->delete('academics_desc');
	
	$this->db->where('id',$id);
	$query = $this->db->delete('academics');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function director_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('academic_director');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function sv_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('sadhuvaswani');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function rev_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('revdada');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function vaswanimission_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('vaswanimission');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function inlaks_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('inlaks');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function cancer_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('cancer');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function department_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('department',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function library_singleimage($id,$img,$img_row)
{
	$imgg = explode(",",$img_row);
	if($img==$imgg[0])
	{
		$org = "No image".",".$imgg[1];
	}
	else if($img==$imgg[1])
	{
		$org = $imgg[0].","."No image";
	}
	$data=array('image'=>$org);
	$this->db->where('id',$id);
	$query=$this->db->update('library',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function team_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('technical_team');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function contacts_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('contacts');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function camp_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('camp');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function patienteducation_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('patienteducation');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}


public function announcement_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('announcement');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function cashlessfacility_delete($id)
{
	$this->db->where('id',$id);
	$query = $this->db->delete('cashless_facility');
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}


}