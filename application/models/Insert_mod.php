<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_mod extends CI_Model {


public function about_insert($data)
{
	$query = $this->db->insert('aboutus',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function mission_insert($data)
{
	$query = $this->db->insert('mission',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function vission_insert($data)
{
	$query = $this->db->insert('mission_vission',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function banner_insert($data)
{
	$query = $this->db->insert('banner',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function medicalfacility_insert($data1)
{
	$query = $this->db->insert('medical_facility',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function insert_type($data,$type)
{
	$result = "";
	$this->db->where('type',$type);
	$res = $this->db->get('facilities_type');
	if($res->num_rows()>0)
	{
		$this->db->where('type',$type);
		$query = $this->db->get('facilities_type');
		$ress = $query->result_array();
		$result = $ress[0]['id'];
		return $result;
	}
	else{
	$query = $this->db->insert('facilities_type',$data);
	$result = $this->db->insert_id();
	return $result;
	}
}

// public function insert_dtype($data,$type)
// {	
// 	$result = "";
// 	$this->db->where('name',$type);
// 	$res = $this->db->get('diagnostics');
// 	if($res->num_rows()>0)
// 	{
// 		$this->db->where('name',$type);
// 		$query = $this->db->get('diagnostics');
// 		$ress = $query->result_array();
// 		$result = $ress[0]['id'];
// 		return $result;
// 	}
// 	else{
// 	$query = $this->db->insert('diagnostics',$data);
// 	$result = $this->db->insert_id();
// 	return $result;
// 	}
// }
// public function diagnostics_insert($data1)
// {
// 	$query = $this->db->insert('diagnostics_desc',$data1);
// 	if($query){
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }
public function department_insert1($data,$add)
{
	$result="";
	$this->db->where('dept_id',$add);
	$query = $this->db->get('department');
	if($query->num_rows()>0)
	{
		$this->db->where('dept_id',$add);
		$res = $this->db->update('department',$data);
		//$id = $res->result_array();
		//$result = $id[0]['id'];
		return true;
	}
	$this->db->insert('department',$data);
	$result = $this->db->insert_id();
	return $result;
}
public function insert_hod($data1,$res)
{
	$this->db->where('dept_id',$res);
	$query = $this->db->get('department_hod');
	if($query->num_rows()>0)
	{
		$this->db->where('dept_id',$res);
		$result = $this->db->update('department_hod',$data1);
	}
	else{
		$data1['dept_id']=$res;
		$result = $this->db->insert('department_hod',$data1);
	}
	if($result)
	{
		return true;
	}
	else{
		return false;
	}
}
public function department_insert($data,$add)
{
	$result="";
	$this->db->where('id',$add);
	$query = $this->db->get('department');
	if($query->num_rows()>0)
	{
		$this->db->where('id',$add);
		$res = $this->db->update('department',$data);
		//$id = $res->result_array();
		//$result = $id[0]['id'];
		return true;
	}
	$this->db->insert('department',$data);
	$result = $this->db->insert_id();
	return true;
}
public function enquiry_insert($data)
{
	$query = $this->db->insert('tbl_enquiry',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
	public function founder_insert($data)
	{
		$query = $this->db->insert('founder',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

public function gallery_insert($data,$img){
	$this->db->insert('gallery_album',$data);
	$result = $this->db->insert_id();
	for($i=0;$i<count($img);$i++)
	{
		$data1=array(
		'album_id'=>$result,
		'image'=>$img[$i]
		);
	$query = $this->db->insert('gallery_image',$data1);
	}
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function gallery_singleimage($data)
{
	$query = $this->db->insert('gallery_image',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function news_insert($data)
{
	$query = $this->db->insert('news',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function contacts_insert($data)
{
	$query = $this->db->insert('contacts',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function mailconfig_insert($data)
{
	$query = $this->db->insert('mail_config',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function insert_stype($data,$type)
{
	$result = "";
	$this->db->where('name',$type);
	$res = $this->db->get('speciality');
	if($res->num_rows()>0)
	{
		$this->db->where('name',$type);
		$query = $this->db->get('speciality');
		$ress = $query->result_array();
		$result = $ress[0]['id'];
		return $result;
	}
	else
	{
		$query = $this->db->insert('speciality',$data);
		$result = $this->db->insert_id();
		return $result;
	}
}
public function speciality_insert($data1)
{
	$query = $this->db->insert('speciality_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function insert_doctor($data2,$dr)
{
		$query1 = $this->db->get_where('doctors',array('dept_id'=>$data2['dept_id']));
		if($query1->num_rows()>0){
			
			$this->db->where('dept_id',$data2['dept_id']);
			$data2['doctors']=$dr;
			$query = $this->db->update('doctors',$data2);
		}
		else{
			$data2['doctors']=$dr;
			$query = $this->db->insert('doctors',$data2);
		}
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
	
}
public function opdschedule_insert($data,$days,$from,$to)
{
	$day = explode("~",$days);
	$ft = explode("~",$from);
	$tt = explode("~",$to);
	$count=0;
	$count1 = count($day);
	for($i = 0; $i<count($day);$i++)
	{
		$data=array(
		'dr_id'=>$data['dr_id'],
		'speciality'=>$data['speciality'],
		'days'=>$day[$i],
		'fromtime'=>$ft[$i],
		'totime'=>$tt[$i],
		'status'=>'Show'
		);
		$query = $this->db->insert('opd_schedule',$data);
		$count++;
	}
	if($count==$count1)
	{
		return true;
	}
	else{
		return false;
	}
}
public function camp_insert($data)
{
	$query = $this->db->insert('camp',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function team_insert($data)
{
	$query = $this->db->insert('technical_team',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function insert_dtype($data,$type)
{	
	$result = "";
	$this->db->where('name',$type);
	$res = $this->db->get('diagnostics');
	if($res->num_rows()>0)
	{
		$this->db->where('name',$type);
		$query = $this->db->get('diagnostics');
		$ress = $query->result_array();
		$result = $ress[0]['id'];
		return $result;
	}
	else{
	$query = $this->db->insert('diagnostics',$data);
	$result = $this->db->insert_id();
	return $result;
	}
}
public function diagnostics_insert($data1)
{
	$query = $this->db->insert('diagnostics_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function insert_category($data,$name,$data1)
{
	$id="";
	$this->db->where('name',$name);
	$query = $this->db->get('package_category');
	if($query->num_rows()>0)
	{
		$this->db->select('id');
		$this->db->where('name',$name);
		$res = $this->db->get('package_category');
		$rr = $res->result_array();
		$id = $rr[0]['id'];
	}
	else{
		$this->db->insert('package_category',$data);
		$result = $this->db->insert_id();
		$id = $result;
	}
	$data1['cat_id']=$id;
	$query1 = $this->db->insert('package_test',$data1);
	if($query1){
		return true;
	}
	else{
		return false;
	}	
}

public function patienteducation_insert($data)
{
	$query = $this->db->insert('patienteducation',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}

public function announcement_insert($data)
{
	$query = $this->db->insert('announcement',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}


public function cashlessfacility_insert($data)
{
	$query = $this->db->insert('cashless_facility',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}

public function testimonial_insert($data)
{
	$query = $this->db->insert('testimonial',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function career_insert($data)
{
	$query = $this->db->insert('career',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function resume_insert($data)
{
	$query = $this->db->insert('enquiry',$data);
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function insert_ctype($data,$type)
{	
	$result = "";
	$this->db->where('name',$type);
	$res = $this->db->get('campdata');
	if($res->num_rows()>0)
	{
		$this->db->where('name',$type);
		$query = $this->db->get('campdata');
		$ress = $query->result_array();
		$result = $ress[0]['id'];
		return $result;
	}
	else{
	$query = $this->db->insert('campdata',$data);
	$result = $this->db->insert_id();
	return $result;
	}
}
public function campdata_insert($data1)
{
	$query = $this->db->insert('campdata_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
}