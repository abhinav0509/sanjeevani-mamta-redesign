<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_mod extends CI_Model {

public function aboutus_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('aboutus',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function singleimage_update($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function mission_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('mission',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function mission_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
	$this->db->where('id',$id);
	$query=$this->db->update('mission',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function patrons_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('patrons',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function patrons_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
	$this->db->where('id',$id);
	$query=$this->db->update('patrons',$data);
	if($query)
	{
		return true;
	}
	else{
			return false;
		}
}
public function management_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('management',$data);
	if($query){
		return true;
	}
	else{
			return false;
		}
}
public function management_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
	$this->db->where('id',$id);
	$query=$this->db->update('management',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function medicalfacility_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('medical_facility',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function medicalfacility_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
	$this->db->where('id',$id);
	$query=$this->db->update('medical_facility',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function alliances_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('alliances',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function alliances_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function update_category($data,$name,$data1,$bid,$cid)
{
	$this->db->where('id',$cid);
	$this->db->update('package_category',$data);
	
	$this->db->where('id',$bid);
	$query1 = $this->db->update('package_test',$data1);
	if($query1){
		return true;
	}
	else{
		return false;
	}	
}
public function hospitals_update($data,$id)
{
	$this->db->where('id',$id);
	$query1 = $this->db->update('hospitals',$data);
	if($query1){
		return true;
	}
	else{
		return false;
	}	
}
public function hospitals_singleimage($id,$img1,$img_row,$img)
{
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function gallery_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('gallery_album',$data);
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function gallery_singleimage($id,$img)
{
	$data=array('image'=>$img);
	$this->db->where('id',$id);
	$query=$this->db->update('gallery_image',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function news_update($data,$id,$albumid)
{
	$this->db->where('id',$albumid);
	$this->db->set('news_id', $id);
	$query = $this->db->update('gallery_album');
	
	$this->db->where('id',$id);
	$query = $this->db->update('news',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function news_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function contacts_update($data,$id)
{
	$this->db->where('id',$id);
	$query=$this->db->update('contacts',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function responsibility_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('patient_responsibility',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function responsibility_singleimage($id,$img1,$img_row,$img)
{
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
// public function education_update($data,$id)
// {
// 	$this->db->where('id',$id);
// 	$query = $this->db->update('patient_education',$data);
// 	if($query){
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }
public function education_singleimage($id,$img1,$img_row,$img)
{
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function academics_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('academics_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function academics_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
// public function diagnostics_update($data1,$bid)
// {
// 	$this->db->where('id',$bid);
// 	$query = $this->db->update('diagnostics_desc',$data1);
// 	if($query){
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }
// public function diagnostics_singleimage($id,$img1,$img_row,$img)
// {
	
// 	$imgg = explode(",",$img_row);
// 	if(count($imgg)>1)
// 	{
// 	if($img1==$imgg[0])
// 	{
// 		$imgg[0]=$img;
// 		$org = $img.",".$imgg[1];
// 	}
// 	else if($img1==$imgg[1])
// 	{
// 		$imgg[1]==$img;
// 		$org = $imgg[0].",".$img;
// 	}
// 	$data=array('image'=>$org);
// 	}
// 	else
// 	{
// 		$data=array('image'=>$img);
// 	}
// 	$this->db->where('id',$id);
// 	$query=$this->db->update('diagnostics_desc',$data);
// 	if($query)
// 	{
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }
public function infra_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('infra_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function infra_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
	$this->db->where('id',$id);
	$query=$this->db->update('infra_desc',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function speciality_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('speciality_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function speciality_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function technology_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('tech_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function technology_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function testimonial_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('testimonial',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function banner_update($data,$id)
{
	$this->db->where('id',$id);
	$query=$this->db->update('banner',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function vission_update($data,$id)
{
	$this->db->where('id',$id);
	$query=$this->db->update('mission_vission',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function career_update($data,$id)
{
	$this->db->where('id',$id);
	$query=$this->db->update('career',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function department_update($data,$add)
{
	$result="";
	$this->db->where('dept_id',$add);
	$query = $this->db->get('department');
	if($query->num_rows()>0)
	{
		$this->db->where('dept_id',$add);
		$this->db->update('department',$data);
		//$res1 = $this->db->get_where('department',array('name'=>$add));
		//$res = $res1->result_array();
		//$result = $res[0]['id'];
		return true;
	}
	else{
	$this->db->insert('department',$data);
	$result = $this->db->insert_id();
	return true;
	}
}
public function departmentinfo_update($data,$choose)
{
	$result="";
	$this->db->where('id',$choose);
	$res1 = $this->db->update('department',$data);
	//$id = $res1->result_array();
	$result = $choose;
	return true;
}
public function update_hod($data1,$res)
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
public function update_doctor($data2,$dr,$id)
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
public function mailconfig_update($data,$id)
{
	$this->db->where('id',$id);
	$query=$this->db->update('mail_config',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function opdschedule_update($data,$days,$from,$to,$pid,$id)
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
		'totime'=>$tt[$i]
		);
		$this->db->where(array('dr_id'=>$id,'id'=>$pid[$i]));
		$rs = $this->db->get('opd_schedule');
		if($rs->num_rows()>0)
		{
			$this->db->where(array('dr_id'=>$id,'id'=>$pid[$i]));
		$query = $this->db->update('opd_schedule',$data);
		}
		else
		{
			$data['status']='Show';
			$query = $this->db->insert('opd_schedule',$data);
		}
		$count++;
		print_r($data);
	}
	//die();
	if($count==$count1)
	{
		return true;
	}
	else{
		return false;
	}
}
public function about1_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('aboutus',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function charity_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('charity',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function highlights_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('highlights',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function aboutacade_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('academics_about',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function library_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('library',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function director_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('academic_director',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function sv_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('sadhuvaswani',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function rev_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('revdada',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function vaswanimission_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('vaswanimission',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function inlaks_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('inlaks',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function cancer_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('cancer',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function department_singleimage($id,$img1,$img_row,$img)
{
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function singleimage_ulibrary($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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
public function team_update($data,$id)
{
	$this->db->where('id',$id);
	$query=$this->db->update('technical_team',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}

public function inlaks_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
	$this->db->where('id',$id);
	$query=$this->db->update('inlaks',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function founder_update($data,$id)
	{
		$this->db->where('id',$id);
		$query = $this->db->update('founder',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	public function camp_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('camp',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function diagnostics_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('diagnostics_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function diagnostics_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
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

public function patienteducation_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('patienteducation',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}

public function announcement_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('announcement',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}

public function cashlessfacility_update($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('cashless_facility',$data);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function campdata_update($data1,$bid)
{
	$this->db->where('id',$bid);
	$query = $this->db->update('campdata_desc',$data1);
	if($query){
		return true;
	}
	else{
		return false;
	}
}
public function camp_singleimage($id,$img1,$img_row,$img)
{
	
	$imgg = explode(",",$img_row);
	if(count($imgg)>1)
	{
	if($img1==$imgg[0])
	{
		$imgg[0]=$img;
		$org = $img.",".$imgg[1];
	}
	else if($img1==$imgg[1])
	{
		$imgg[1]==$img;
		$org = $imgg[0].",".$img;
	}
	$data=array('image'=>$org);
	}
	else
	{
		$data=array('image'=>$img);
	}
	$this->db->where('id',$id);
	$query=$this->db->update('campdata_desc',$data);
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