<?php
class Delete_Whole_Data extends CI_Model{

public function facilities_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('medical_facility');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function aboutus_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('aboutus');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function mission_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('mission');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function patrons_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('patrons');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function team_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('management');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function vission_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('mission_vission');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function diagnostics_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('diagnostics_desc');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function speciality_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('speciality_desc');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function infra_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('infra_desc');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function technology_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('tech_desc');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function doctor_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('doctors');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function alliances_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('alliances');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function package_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('package_test');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
// public function education_delete($str)
// {
// 	$count=0;
// 	$data = explode(",",$str);
// 	$arr = count($data);
// 	for($i=0;$i<count($data);$i++)
// 	{
// 		$this->db->where('id',$data[$i]);
// 		$query = $this->db->delete('patient_education');
// 		$count++;
// 	}
// 	if($count == $arr)
// 	{
// 		return true;
// 	}
// 	else
// 	{
// 		return false;
// 	}
// }
public function responsibility_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('patient_responsibility');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function centers_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('hospitals');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function academics_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('academics_desc');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function careers_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('career');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function testimonial_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('testimonial');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function images_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('gallery_album');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function news_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('news');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function contacts_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('contacts');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function mail_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('enquiry');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function opd_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('dr_id',$data[$i]);
		$query = $this->db->delete('opd_schedule');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function about1_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('about');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function charity_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('charity');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function highlights_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('highlights');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function aboutacade_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('academics_about');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function library_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('library');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function director_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('academic_director');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function sv_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('sadhuvaswani');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function rev_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('revdada');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function vaswanimission_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('vaswanimission');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function inlaks_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('inlaks');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function cancer_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('cancer');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function teamstaff_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('technical_team');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function camp_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('camp');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}


public function patienteducation_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('patienteducation');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function announcement_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('announcement');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function cashlessfacility_delete($str)
{
	$count=0;
	$data = explode(",",$str);
	$arr = count($data);
	for($i=0;$i<count($data);$i++)
	{
		$this->db->where('id',$data[$i]);
		$query = $this->db->delete('cashless_facility');
		$count++;
	}
	if($count == $arr)
	{
		return true;
	}
	else
	{
		return false;
	}
}

}
?>