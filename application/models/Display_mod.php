<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display_mod extends CI_Model {

public function about_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('aboutus');
	return $query->num_rows();
}
public function aboutus_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('aboutus');
	return $query->num_rows();
}
public function aboutus_get($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else
	{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query=$this->db->get('aboutus');
	return $query->result_array();
}
public function about_get($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else
	{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query=$this->db->get('aboutus');
	return $query->result_array();
}
public function mission_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else
	{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('mission');
	return $query->num_rows();
}
public function get_mission($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else
	{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query=$this->db->get('mission');
	return $query->result_array();
}
public function vission_count($page,$title)
{
	$array=array();
	if($page!="" && $title!="")
	{
		$array= array('type'=>$page,'title'=>$title);
	}
	else if($page!="" && $title=="")
	{
		$array = array('type'=>$page);
	}
	else if($page=="" && $title!="")
	{
		$array = array('title'=>$title);
	}
	else if($page=="" && $title=="")
	{
		$array = array();
	}
	$this->db->where($array);
	$query = $this->db->get('mission_vission');
	return $query->num_rows();
}
public function get_vission($limit,$start,$page,$title)
{
	$array=array();
	if($page!="" && $title!="")
	{
		$array= array('type'=>$page,'title'=>$title);
	}
	else if($page!="" && $title=="")
	{
		$array = array('type'=>$page);
	}
	else if($page=="" && $title!="")
	{
		$array = array('title'=>$title);
	}
	else if($page=="" && $title=="")
	{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query = $this->db->get('mission_vission');
	return $query->result_array();
}
public function banner_count()
{
	$query = $this->db->get('banner');
	return $query->num_rows();
}
public function get_banner($limit,$start)
{
	$this->db->limit($limit,$start);
	$query = $this->db->get('banner');
	return $query->result_array();
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
public function get_facilitytype()
{	
	$query=$this->db->get('facilities_type');

	return $query->result_array();
}

// public function diagnosticsdesc_count($type,$title)
// {
// 	$array = array();
// 	if($type!="" && $title!="")
// 	{
// 		$array=array('d_id'=>$type,'title'=>$title);
// 	}
// 	else if($type!="" && $title=="")
// 	{
// 		$array=array('d_id'=>$type);
// 	}
// 	else if($type=="" && $title!="")
// 	{
// 		$array=array('title'=>$title);
// 	}
// 	else if($type=="" && $title=="")
// 	{
// 		$array=array();
// 	}
// 	$this->db->where($array);
// 	$this->db->select('diagnostics.id as did,diagnostics.name,diagnostics.status,diagnostics_desc.id as id,diagnostics_desc.d_id,diagnostics_desc.title,diagnostics_desc.image,diagnostics_desc.pdesc');
// 	$this->db->from('diagnostics_desc');
// 	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
// 	$query = $this->db->get();
// 	return $query->num_rows();
// }
// public function get_diagnosticsdesc($limit,$start,$type,$title)
// {
// 	$array = array();
// 	if($type!="" && $title!="")
// 	{
// 		$array=array('d_id'=>$type,'title'=>$title);
// 	}
// 	else if($type!="" && $title=="")
// 	{
// 		$array=array('d_id'=>$type);
// 	}
// 	else if($type=="" && $title!="")
// 	{
// 		$array=array('title'=>$title);
// 	}
// 	else if($type=="" && $title=="")
// 	{
// 		$array=array();
// 	}
// 	$this->db->where($array);
// 	$this->db->limit($limit,$start);
// 	$this->db->select('diagnostics.id as did,diagnostics.name,diagnostics.status,diagnostics_desc.id as id,diagnostics_desc.d_id,diagnostics_desc.title,diagnostics_desc.image,diagnostics_desc.pdesc');
// 	$this->db->from('diagnostics_desc');
// 	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
// 	$query = $this->db->get();
// 	return $query->result_array();
// }
// public function get_diagnostics()
// {
// 	$query = $this->db->get('diagnostics');
// 	return $query->result_array();
// }
public function get_dept1()
{
	$query=$this->db->get('department');
	return $query->result_array();
}
public function department_count1($dept,$type1,$doc)
{
	
	/*$lines = file_get_contents('http://192.168.2.9:8084/MedicoHelpline/HospitalAllDoctors?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json');
    $data = json_decode($lines,true);*/
	$str = "";
	if($dept!="" && $type1=="" && $doc=="")
	{
		$str ='dep.dept_id='.$dept;
	}
	else if($dept=="" && $type1=="" && $doc=="")
	{
		$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select dr.name from dr where hod.name = dr.id) as hname,(select Group_concat(name) from dr,doctors doc where find_in_set(dr.id,doc.doctors) and doc.dept_id=dep.dept_id) as Doctorss FROM department dep,department_hod hod where hod.dept_id = dep.dept_id ";
		$query = $this->db->query($sql);
		return $query->num_rows();
		
		/*$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select doc.doctors FROM doctors doc where doc.dept_id=dep.dept_id) as dr FROM department dep,department_hod hod where hod.dept_id = dep.dept_id" ;
		$query = $this->db->query($sql);
		$dt['res']=$query->result_array();
		for($i=0; $i<count($dt['res']); $i++)
		{
			$s='';
			for($j=0; $j<count($data['hospitalDoctorList']); $j++){
			if($dt['res'][$i]['hid']==$data['hospitalDoctorList'][$j]['uid'])
			{
				$dt['res'][$i]['hname']=$data['hospitalDoctorList'][$j]['fname'];
			}
			$dr = explode(",",$dt['res'][$i]['dr']);
			for($k=0; $k<count($dr); $k++)
			{
				if($k==0)
				{
				if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
				{
					$s=$data['hospitalDoctorList'][$j]['fname'];						
				}
				}
				else
				{
					if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
					{
						$s.=','.$data['hospitalDoctorList'][$j]['fname'];						
					}
				}
			}
			$dt['res'][$i]['Doctorss']=$s;
			}
			
		}
		
		return count($dt['res']);
		//print_r($dt['res']); die();*/
	}
	$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select dr.name from dr where hod.name = dr.id) as hname,(select Group_concat(name) from dr,doctors doc where find_in_set(dr.id,doc.doctors) and doc.dept_id=dep.dept_id) as Doctorss FROM department dep,department_hod hod where hod.dept_id = dep.dept_id and ".$str."";
	$query = $this->db->query($sql);
	return $query->num_rows();
	/*$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select doc.doctors FROM doctors doc where doc.dept_id=dep.dept_id) as dr FROM department dep,department_hod hod where hod.dept_id = dep.dept_id and ".$str."";
		$query = $this->db->query($sql);
		$dt['res']=$query->result_array();
		for($i=0; $i<count($dt['res']); $i++)
		{
			$s='';
			for($j=0; $j<count($data['hospitalDoctorList']); $j++){
			if($dt['res'][$i]['hid']==$data['hospitalDoctorList'][$j]['uid'])
			{
				$dt['res'][$i]['hname']=$data['hospitalDoctorList'][$j]['fname'];
			}
			$dr = explode(",",$dt['res'][$i]['dr']);
			for($k=0; $k<count($dr); $k++)
			{
				if($k==0)
				{
				if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
				{
					$s=$data['hospitalDoctorList'][$j]['fname'];						
				}
				}
				else
				{
					if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
					{
						$s.=','.$data['hospitalDoctorList'][$j]['fname'];						
					}
				}
			}
			$dt['res'][$i]['Doctorss']=$s;
			}			
		}		
		return count($dt['res']);*/
}
public function get_department1($limit,$start,$dept,$type1,$doc)
{
	/*$lines = file_get_contents('http://192.168.2.9:8084/MedicoHelpline/HospitalAllDoctors?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json');
    $data = json_decode($lines,true);*/
	$str = "";
	if($dept!="" && $type1=="" && $doc=="")
	{
		$str ='dep.dept_id='.$dept;
	}
	else if($dept=="" && $type1=="" && $doc=="")
	{
		$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select dr.name from dr where hod.name = dr.id) as hname,(select Group_concat(name) from dr,doctors doc where find_in_set(dr.id,doc.doctors) and doc.dept_id=dep.dept_id) as Doctorss FROM department dep,department_hod hod where hod.dept_id = dep.dept_id LIMIT ".$start.",".$limit."" ;
		$query = $this->db->query($sql);
		return $query->result_array();
		
		/*$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select doc.doctors FROM doctors doc where doc.dept_id=dep.dept_id) as dr FROM department dep,department_hod hod where hod.dept_id = dep.dept_id LIMIT ".$start.",".$limit."" ;
		$query = $this->db->query($sql);
		$dt['res']=$query->result_array();
		for($i=0; $i<count($dt['res']); $i++)
		{
			$s='';
			for($j=0; $j<count($data['hospitalDoctorList']); $j++){
			if($dt['res'][$i]['hid']==$data['hospitalDoctorList'][$j]['uid'])
			{
				$dt['res'][$i]['hname']=$data['hospitalDoctorList'][$j]['fname'];
			}
			$dr = explode(",",$dt['res'][$i]['dr']);
			for($k=0; $k<count($dr); $k++)
			{
				if($k==0)
				{
				if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
				{
					$s=$data['hospitalDoctorList'][$j]['fname'];						
				}
				}
				else
				{
					if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
					{
						$s.=','.$data['hospitalDoctorList'][$j]['fname'];						
					}
				}
			}
			$dt['res'][$i]['Doctorss']=$s;
			}
			
		}
		return $dt['res'];*/
	}
	$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select dr.name from dr where hod.name = dr.id) as hname,(select Group_concat(name) from dr,doctors doc where find_in_set(dr.id,doc.doctors) and doc.dept_id=dep.dept_id) as Doctorss FROM department dep,department_hod hod where hod.dept_id = dep.dept_id and ".$str." LIMIT ".$start.",".$limit."" ;
	$query = $this->db->query($sql);	
	return $query->result_array();
	/*$sql = "SELECT dep.id as did,dep.name as dname,dep.image,dep.pdesc,hod.name as hid,(select doc.doctors FROM doctors doc where doc.dept_id=dep.dept_id) as dr FROM department dep,department_hod hod where hod.dept_id = dep.dept_id and ".$str."";
		$query = $this->db->query($sql);
		$dt['res']=$query->result_array();
		for($i=0; $i<count($dt['res']); $i++)
		{
			$s='';
			for($j=0; $j<count($data['hospitalDoctorList']); $j++){
			if($dt['res'][$i]['hid']==$data['hospitalDoctorList'][$j]['uid'])
			{
				$dt['res'][$i]['hname']=$data['hospitalDoctorList'][$j]['fname'];
			}
			$dr = explode(",",$dt['res'][$i]['dr']);
			for($k=0; $k<count($dr); $k++)
			{
				if($k==0)
				{
					if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
					{
						$s=$data['hospitalDoctorList'][$j]['fname'];						
					}
				}
				else
				{
					if($dr[$k]==$data['hospitalDoctorList'][$j]['uid'])
					{
						$s.=','.$data['hospitalDoctorList'][$j]['fname'];						
					}
				}
			}
			$dt['res'][$i]['Doctorss']=$s;
			}			
		}		
		return $dt['res'];*/
}
public function get_dept()
{
	/*$lines = file_get_contents('http://www.medicohelpline.com/HospitalDepartmentList?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json');
    $data = json_decode($lines,true);
	for($i=0; $i<count($data['departmentList']); $i++)
	{
		//print_r($data['departmentList'][$i]['id']); 
		$this->db->where('dept_id',$data['departmentList'][$i]['id']);
		$query = $this->db->get('department');
		if($query->num_rows()>0)
		{
			$data1 = array(
			'name'=>$data['departmentList'][$i]['deptname']
			);
			$this->db->where('dept_id',$data['departmentList'][$i]['id']);
			$query1 = $this->db->update('department',$data1);
		}
		else
		{
			$data1 = array(
			'dept_id'=>$data['departmentList'][$i]['id'],
			'name'=>$data['departmentList'][$i]['deptname']
			);
			$query1 = $this->db->insert('department',$data1);
		}
	}
	if($query1){*/
	$query=$this->db->get('department');
	return $query->result_array();
}
public function department_count($dept)
{
	$array=array();
	if($dept!="")
	{
		$array = array('dept_id'=>$dept);
	}
	else
	{
		$array=array();
	}
	$this->db->where($array);
	$query = $this->db->get('department');
	return $query->num_rows();
}
public function get_department($limit,$start,$dept)
{
	$array=array();
	if($dept!="")
	{
		$array = array('id'=>$dept);
	}
	else
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query = $this->db->get('department');
	return $query->result_array();
}
public function founder_count($title)
	{
		$array = array();
		if($title!="")
		{
			$array = array('title'=>$title);
		}
		else{
			$array = array();
		}
		$this->db->where($array);
		$query=$this->db->get('founder');
		return $query->num_rows();
	}	
	public function founder_get($limit,$start,$title)
	{
		$array = array();
		if($title!="")
		{
			$array = array('title'=>$title);
		}
		else
		{
			$array = array();
		}
		$this->db->where($array);
		$this->db->limit($limit,$start);
		$query=$this->db->get('founder');
		return $query->result_array();
	}
	public function gallery_count()
{
	$this->db->select('gallery_album.id as aid,gallery_album.title,gallery_album.status,gallery_image.id as id,gallery_image.album_id,gallery_image.image');
	$this->db->from('gallery_image');
	$this->db->join('gallery_album','gallery_album.id=gallery_image.album_id');
	$this->db->group_by('gallery_image.album_id');
	$query=$this->db->get();
	return $query->num_rows();
}
public function get_gallery($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->select('gallery_album.id as aid,gallery_album.title,gallery_album.status,gallery_image.id as id,gallery_image.album_id,gallery_image.image');
	$this->db->from('gallery_image');
	$this->db->join('gallery_album','gallery_album.id=gallery_image.album_id');
	$this->db->group_by('gallery_image.album_id');
	$query=$this->db->get();
	return $query->result_array();
}
public function get_album()
{
	$query=$this->db->get('gallery_album');
	return $query->result_array();
}
public function get_news1()
{
	$query=$this->db->get('news');
	return $query->result_array();
}
public function upload_more($id)
{
	$this->db->where('album_id',$id);
	$query=$this->db->get('gallery_image');
	return $query->result_array();
}
public function news_count()
{
	$query=$this->db->get('news');
	return $query->num_rows();
}
public function get_news($limit,$start)
{
	$this->db->limit($limit,$start);
	$query=$this->db->get('news');
	return $query->result_array();
}
public function contacts_count()
{
	$query=$this->db->get('contacts');
	return $query->num_rows();
}
public function get_contacts($limit,$start)
{
	$this->db->limit($limit,$start);
	$query=$this->db->get('contacts');
	return $query->result_array();
}
public function get_allalbum()
{
	$query=$this->db->get('gallery_album');
	return $query->result_array();
	
}
public function get_mail_details($urll)
{
	$this->db->set('status','read');
    $this->db->where('id',$urll);
    $query1=$this->db->update('enquiry');

   $this->db->where('id',$urll);
   $query=$this->db->get('enquiry');
   return $query->result_array();
}
public function mail_count()
{
	$query = $this->db->get('mail_config');
	return $query->num_rows();
}
public function get_mail($limit,$start)
{
	$this->db->limit($limit,$start);
	$query = $this->db->get('mail_config');
	return $query->result_array();
}
public function get_hosid()
{
	$query = $this->db->get('hospitalid');
	return $query->result_array();
}
public function get_speciality()
{
	$query = $this->db->get('speciality');
	return $query->result_array();
}
public function spedesc_count($type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('s_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('s_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->select('speciality.id as sid,speciality.name,speciality.status,speciality_desc.s_id,speciality_desc.id as id,speciality_desc.title,speciality_desc.image,speciality_desc.pdesc');
	$this->db->from('speciality_desc');
	$this->db->join('speciality','speciality.id=speciality_desc.s_id');
	$query = $this->db->get();
	return $query->num_rows();
}
public function get_spedesc($limit,$start,$type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('s_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('s_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$this->db->select('speciality.id as sid,speciality.name,speciality.status,speciality_desc.s_id,speciality_desc.id as id,speciality_desc.title,speciality_desc.image,speciality_desc.pdesc');
	$this->db->from('speciality_desc');
	$this->db->join('speciality','speciality.id=speciality_desc.s_id');
	$query = $this->db->get();
	return $query->result_array();
}
public function opd_count($name)
{
	//$array = array();
	if($name!="")
	{
		$str = 'dr.id='.$name;
	}
	else{
		$str='opd.dr_id=dr.id';
	}
	$sql = "SELECT dr.name,dr.id,opd.id as oid,opd.dr_id,opd.status,opd.speciality,group_concat(opd.days SEPARATOR '~') as day,group_concat(opd.fromtime SEPARATOR '~') as ft, group_concat(opd.totime SEPARATOR '~') as tt FROM `opd_schedule` opd,dr where opd.dr_id=dr.id and ".$str." GROUP BY opd.dr_id";
	$query = $this->db->query($sql);
	return $query->num_rows();
}
public function get_opd($limit,$start,$name)
{
	//$array = array();
	if($name!="")
	{
		$str = 'dr.id='.$name;
	}
	else{
		$str='opd.dr_id=dr.id';
	}
	$sql = "SELECT dr.name,dr.id,opd.id as oid,opd.dr_id,opd.status,opd.speciality,group_concat(opd.days SEPARATOR '~') as day,group_concat(opd.fromtime SEPARATOR '~') as ft, group_concat(opd.totime SEPARATOR '~') as tt FROM `opd_schedule` opd,dr where opd.dr_id=dr.id and ".$str." GROUP BY opd.dr_id ORDER BY opd.id DESC LIMIT ".$start.",".$limit."" ;
	$query = $this->db->query($sql);
	return $query->result_array();
}
public function get_opdetail()
{
	$query = $this->db->get('opd_schedule');
	return $query->result_array();
}
public function get_dr()
{
	$query = $this->db->get('dr');
	return $query->result_array();
}
public function camp_count()
{
	$query=$this->db->get('camp');
	return $query->num_rows();
}
public function get_camp($limit,$start)
{
	$this->db->limit($limit,$start);
	$query=$this->db->get('camp');
	return $query->result_array();
}
public function team_count($dept){
	$array = array();
	if($dept!="")
	{
		$array = array('department'=>$dept);
	}
	else
	{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('technical_team');
	return $query->num_rows();
}

public function get_team($limit,$start,$dept,$staff)
{
	$array = array();
	if($dept!="" && $staff=="")
	{
		$array = array('technical_team.department'=>$dept);
	}
	else if($dept=="" && $staff!="")
	{
		$array = array('technical_team.name'=>$staff);
	}
	else if($dept!="" && $staff!="")
	{
		$array = array('technical_team.department'=>$dept,'technical_team.name'=>$staff);
	}
	else
	{
		$array = array("");
	}
	$this->db->limit($limit,$start);
	$this->db->select('department.name as dname,technical_team.id,technical_team.name,
	technical_team.designation,technical_team.department,
	technical_team.qualification,technical_team.image,technical_team.pdesc,technical_team.status');
	$this->db->from('technical_team');
	$this->db->join('department','department.id=technical_team.department');
	$this->db->where($array);
	$this->db->order_by('id','desc');
	$query = $this->db->get();
	return $query->result_array();
}
public function diagnosticsdesc_count($type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('d_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('d_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->select('diagnostics.id as did,diagnostics.name,diagnostics.status,diagnostics_desc.id as id,diagnostics_desc.d_id,diagnostics_desc.title,diagnostics_desc.image,diagnostics_desc.pdesc');
	$this->db->from('diagnostics_desc');
	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
	$query = $this->db->get();
	return $query->num_rows();
}
public function get_diagnosticsdesc($limit,$start,$type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('d_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('d_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$this->db->select('diagnostics.id as did,diagnostics.name,diagnostics.status,diagnostics_desc.id as id,diagnostics_desc.d_id,diagnostics_desc.title,diagnostics_desc.image,diagnostics_desc.pdesc');
	$this->db->from('diagnostics_desc');
	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_diagnostics()
{
	$query = $this->db->get('diagnostics');
	return $query->result_array();
}
public function category()
{
	$query=$this->db->get('package_category');
	return $query->result_array();
}
public function category_count($type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('cat_id'=>$type,'testcategory'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('cat_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('testcategory'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array = array();
	}
	$this->db->where($array);
	$this->db->select('package_category.name,package_category.sp,package_category.discount,package_category.price,package_category.image,package_category.brochure,package_category.pdesc,package_test.testcategory,package_test.testname');
	$this->db->from('package_test');
	$this->db->join('package_category','package_category.id=package_test.cat_id');
	$query=$this->db->get();
	return $query->num_rows();
}
public function get_category($limit,$start,$type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('cat_id'=>$type,'testcategory'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('cat_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('testcategory'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array = array();
	}
	
	
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$this->db->select('package_category.id as pid,package_category.sp,package_category.discount,package_category.name,package_category.price,package_category.image,package_category.brochure,package_category.pdesc,package_test.testcategory,GROUP_CONCAT(package_test.testname SEPARATOR ",") as testname,package_test.id as id');
	$this->db->from('package_test');
	$this->db->join('package_category','package_category.id=package_test.cat_id');
	$this->db->group_by('package_test.cat_id');
	$this->db->order_by('package_test.cat_id desc');
	$query=$this->db->get();
	return $query->result_array();
	
	
}
public function Getpackage($mal)
{
	$this->db->where('name',$mal);
	$query=$this->db->get('package_category');
    if($query->num_rows()>0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function response_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('patient_responsibility');
	return $query->num_rows();
}
public function get_response($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query=$this->db->get('patient_responsibility');
	return $query->result_array();
}
// public function education_count($title)
// {
// 	$array = array();
// 	if($title!="")
// 	{
// 		$array = array('title'=>$title);
// 	}
// 	else{
// 		$array = array();
// 	}
// 	$this->db->where($array);
// 	$query=$this->db->get('patient_education');
// 	return $query->num_rows();
// }
// public function get_education($limit,$start,$title)
// {
// 	$array = array();
// 	if($title!="")
// 	{
// 		$array = array('title'=>$title);
// 	}
// 	else{
// 		$array = array();
// 	}
// 	$this->db->where($array);
// 	$this->db->limit($limit,$start);
// 	$query=$this->db->get('patient_education');
// 	return $query->result_array();
// }
public function alliances_count($type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('type'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('type'=>$type);
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
	$query=$this->db->get('alliances');
	return $query->num_rows();
}
public function get_alliances($limit,$start,$type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('type'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('type'=>$type);
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
	$this->db->limit($limit,$start);
	$query=$this->db->get('alliances');
	return $query->result_array();
}

public function education_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('patienteducation');
	return $query->num_rows();
}

public function get_education($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query=$this->db->get('patienteducation');
	return $query->result_array();
}
public function announcement_count($dept)
{
	$array=array();
	if($dept!="")
	{
		$array = array('dept_id'=>$dept);
	}
	else
	{
		$array=array();
	}
	$this->db->where($array);
	$query = $this->db->get('announcement');
	return $query->num_rows();
}
public function get_announcement($limit,$start,$dept)
{
	$array=array();
	if($dept!="")
	{
		$array = array('id'=>$dept);
	}
	else
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query = $this->db->get('announcement');
	return $query->result_array();
}
public function cashless_facility_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('cashless_facility');
	return $query->num_rows();
}

public function get_cashless_facility($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query=$this->db->get('cashless_facility');
	return $query->result_array();
}


public function testimonial_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$query=$this->db->get('testimonial');
	return $query->num_rows();
}

public function get_testimonial($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query=$this->db->get('testimonial');
	return $query->result_array();
}
public function career_count($title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$query = $this->db->get('career');
	return $query->num_rows();
}
public function get_career($limit,$start,$title)
{
	$array = array();
	if($title!="")
	{
		$array = array('title'=>$title);
	}
	else{
		$array = array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$query = $this->db->get('career');
	return $query->result_array();
}
public function campdesc_count($type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('d_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('d_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->select('campdata.id as did,campdata.name,campdata.status,campdata_desc.id as id,campdata_desc.d_id,campdata_desc.title,campdata_desc.image,campdata_desc.pdesc');
	$this->db->from('campdata_desc');
	$this->db->join('campdata','campdata.id=campdata_desc.d_id');
	$query = $this->db->get();
	return $query->num_rows();
}
public function get_campdesc($limit,$start,$type,$title)
{
	$array = array();
	if($type!="" && $title!="")
	{
		$array=array('d_id'=>$type,'title'=>$title);
	}
	else if($type!="" && $title=="")
	{
		$array=array('d_id'=>$type);
	}
	else if($type=="" && $title!="")
	{
		$array=array('title'=>$title);
	}
	else if($type=="" && $title=="")
	{
		$array=array();
	}
	$this->db->where($array);
	$this->db->limit($limit,$start);
	$this->db->select('campdata.id as did,campdata.name,campdata.status,campdata_desc.id as id,campdata_desc.d_id,campdata_desc.title,campdata_desc.image,campdata_desc.pdesc');
	$this->db->from('campdata_desc');
	$this->db->join('campdata','campdata.id=campdata_desc.d_id');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_campdata()
{
	$query = $this->db->get('campdata');
	return $query->result_array();
}
}