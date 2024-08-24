<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_mod extends CI_Model {

public function founder_status($id,$str)
	{
		$this->db->where('id',$id);
		$this->db->set('status',$str);
		$query=$this->db->update('founder');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}
	}
	public function aboutus_status($id,$str)
{
	if($str=="Hide")
	{
		$qu = $this->db->get('aboutus');
		if($qu->num_rows()==1)
		{
			return false;
		}
		else
		{
			$this->db->where('id',$id);
			$this->db->set('status',$str);
			$query=$this->db->update('aboutus');
		}
	}
	if($str=="Show")
	{
	$this->db->set('status','Hide');
	$query=$this->db->update('aboutus');
	
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('aboutus');
	}
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function mission_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('mission');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function patrons_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('patrons');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function management_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('management');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function medicalfacility_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('medical_facility');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function alliances_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('alliances');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function hospitals_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('hospitals');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function gallery_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('gallery_album');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function news_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('news');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function contacts_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('contacts');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function responsibility_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('patient_responsibility');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}

// public function education_status($id,$str)
// {
// 	$this->db->where('id',$id);
// 	$this->db->set('status',$str);
// 	$query=$this->db->update('patient_education');
// 	if($query)
// 	{
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }

public function academics_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('academics');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}

// public function diagnostics_status($id,$str)
// {
// 	$this->db->where('id',$id);
// 	$this->db->set('status',$str);
// 	$query=$this->db->update('diagnostics');
// 	if($query)
// 	{
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }
// public function diagnostics_status($id,$str)
// 	{
// 		$this->db->where('id',$id);
// 		$this->db->set('status',$str);
// 		$query=$this->db->update('diagnostics');
// 		if($query)
// 		{
// 			return true;
// 		}
// 		else{
// 			return false;
// 		}
// 	}
public function infra_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('infrastructure');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function speciality_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('speciality');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function technology_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('technology');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function status_testimonial($id,$str)
{
		$this->db->where('id',$id);
		$this->db->set('status',$str);
		$query=$this->db->update('testimonial');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}
}
public function set_banner_status($id,$oldseq,$newseq){
        
	$query1=$this->db->get_where('banner',array('seq' => $newseq));        
	if($query1->num_rows() > 0){
	   $this->db->set('seq',$oldseq);
	   $this->db->where('seq',$newseq);
	   $query2=$this->db->update('banner');
	}

	   $this->db->set('seq',$newseq);
	   $this->db->where('id',$id);
	   $query=$this->db->update('banner');  
	   if($query){
		 return true;
	   }
	   else{
		 return false;
	   }
 }
 public function vission_status($id,$str)
 {
	 $this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('mission_vission');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
 }
 public function career_status($id,$str)
 {
	 $this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('career');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
 }
 public function mailconfig_status($id,$str)
{
	if($str=="Active"){
       $this->db->where('status',$str);
	   $this->db->set('status','Not Active');
       $query = $this->db->update('mail_config');	   
	   }
	   $this->db->where('id',$id);
	   $this->db->set('status',$str);
       $query = $this->db->update('mail_config');
	   if($query)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
}
public function opd_status($id,$str)
{
	$this->db->where('dr_id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('opd_schedule');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function about1_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('about');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function charity_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('charity');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function highlights_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('highlights');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function aboutacade_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('academics_about');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function library_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('library');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function director_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('academic_director');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function sv_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('sadhuvaswani');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function rev_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('revdada');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function vaswanimission_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('vaswanimission');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function inlaks_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('inlaks');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function cancer_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('cancer');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function team_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('technical_team');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function camp_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('camp');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function diagnostics_status($id,$str)
{
	$this->db->where('id',$id);
	$this->db->set('status',$str);
	$query=$this->db->update('diagnostics');
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}

public function status_patienteducation($id,$str)
{
		$this->db->where('id',$id);
		$this->db->set('status',$str);
		$query=$this->db->update('patienteducation');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}
}
public function status_announcement($id,$str)
{
		$this->db->where('id',$id);
		$this->db->set('status',$str);
		$query=$this->db->update('announcement');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}
}

public function status_cashlessfacility($id,$str)
{
		$this->db->where('id',$id);
		$this->db->set('status',$str);
		$query=$this->db->update('cashless_facility');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}
}

}
?>