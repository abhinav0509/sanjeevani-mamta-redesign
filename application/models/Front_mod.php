<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_mod extends CI_Model {

public function get_banner()
{
	$this->db->order_by('seq','asc');
	$query = $this->db->get('banner');
	return $query->result_array();
}
public function get_who()
{
	$this->db->limit(1,0);
	$this->db->where('status','Show');
	$this->db->order_by('id','desc');
	$query = $this->db->get('aboutus');
	return $query->result_array();
}
public function testi_count()
{
	$this->db->select('testimonial.id,testimonial.image,testimonial.pdesc,testimonial.dr_id');
	$this->db->from('testimonial');
	$this->db->order_by('id','desc');
	//$this->db->join('dr','dr.id=testimonial.dr_id');
	$this->db->where('status','Show');
	$query = $this->db->get();
	return $query->num_rows();
}
public function get_testi($limit,$start)
{
	//$this->db->limit($limit,$start);
	$this->db->select('testimonial.id,testimonial.image,testimonial.pdesc,testimonial.dr_id');
	$this->db->from('testimonial');
	$this->db->order_by('id','desc');
	//$this->db->join('dr','dr.id=testimonial.dr_id');
	$this->db->where('status','Show');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_facility()
{
	$this->db->select('facilities_type.id,facilities_type.type');
	$this->db->from('facilities_type');
	$this->db->join('medical_facility','facilities_type.id=medical_facility.type_id');
	$this->db->where('medical_facility.status','Show');
	$this->db->order_by('facilities_type.type');
	$this->db->group_by('medical_facility.type_id');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_singlemedical($urll)
{
	$squery=$this->db->get_where('facilities_type',array('type'=>$urll));
	$result=$squery->result_array();
// 	$id=$result[0]['id'];

// 	$this->db->limit(1,0);
// 	$this->db->where('type_id',$id);
	
	$this->db->select('facilities_type.id,medical_facility.type_id,medical_facility.title,medical_facility.pdesc,medical_facility.image');
		$this->db->from('medical_facility');
		$this->db->join('facilities_type','facilities_type.id=medical_facility.type_id');
		$this->db->where('type',$urll);
	
	$query = $this->db->get();
	return $query->result_array();
	/*if($urll!="")
	{
		//$this->db->limit(1,0);
		$this->db->select('facilities_type.type,medical_facility.id,medical_facility.title,medical_facility.image,medical_facility.pdesc');
		$this->db->from('medical_facility');
		$this->db->join('facilities_type','facilities_type.id=medical_facility.type_id');
		$this->db->where(array('type_id'=>$urll,'status'=>'Show'));	
		$query = $this->db->get();
		return $query->result_array();
	}
	else
	{
		//$this->db->limit(1,0);
		$this->db->select('facilities_type.type,medical_facility.id,medical_facility.title,medical_facility.image,medical_facility.pdesc');
		$this->db->from('medical_facility');
		$this->db->join('facilities_type','facilities_type.id=medical_facility.type_id');
		$this->db->where(array('status'=>'Show'));	
		$this->db->order_by('facilities_type.id');
		$query = $this->db->get();
		return $query->result_array();
	}*/
}
public function get_contacts()
{
	$this->db->where('status','Show');
	$query = $this->db->get('contacts');
	return $query->result_array();
}
public function response_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('patient_responsibility');
	return $query->num_rows();
}
public function get_response($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->where('status','Show');
	$query = $this->db->get('patient_responsibility');
	return $query->result_array();
}
// public function education_count()
// {
// 	$this->db->where('status','Show');
// 	$query = $this->db->get('patient_education');
// 	return $query->num_rows();
// }

// public function get_education($limit,$start)
// {
// 	$this->db->limit($limit,$start);
// 	$this->db->where('status','Show');
// 	$query = $this->db->get('patient_education');
// 	return $query->result_array();
// }

// public function get_testimonial($urll)
// {
// 	$this->db->select('testimonial.dr_id,testimonial.image,testimonial.pdesc');
// 	$this->db->from('testimonial');
// 	//$this->db->join('dr','dr.id=testimonial.dr_id');
// 	$this->db->where('testimonial.id',$urll);
// 	$query = $this->db->get();
// 	return $query->result_array();
// }

public function get_news()
{
	$this->db->order_by('id','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('news');
	return $query->result_array();
}
public function get_detailnews($urll)
{
	$this->db->where('title',$urll);
	$query = $this->db->get('news');
	return $query->result_array();
}
public function get_opd()
{
	//$sql = "SELECT dr.name,dr.id,opd.dr_id as did,opd.status,opd.speciality,group_concat(opd.days SEPARATOR '~') as day,group_concat(opd.fromtime SEPARATOR '~') as ft, group_concat(opd.totime SEPARATOR '~') as tt FROM `opd_schedule` opd,dr where opd.dr_id=dr.id and opd.status='SHOW' GROUP BY opd.dr_id ORDER BY opd.id DESC";
	//$query = $this->db->query($sql);
	//return $query->result_array();
	echo "sdad";
/*if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
	$Url="http://www.medicohelpline.com/HospitalDoctorstime?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    print_r($output); die();*/

if (ini_get('allow_url_fopen') == 1) {
    echo '<p style="color: #0A0;">fopen is allowed on this host.</p>';
} else {
    echo '<p style="color: #A00;">fopen is not allowed on this host.</p>';
}

$Url="https://www.medicohelpline.com/HospitalDoctorstime?lgKey=AGS9hZBNpGXElYrataENyiS";
$context = stream_context_create(array(
    'http' => array(
        'method' => "GET",
        'header' =>
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n" .
            "Accept-Language: en-US,en;q=0.8\r\n".
            "Keep-Alive: timeout=3, max=10\r\n",
            "Connection: keep-alive",
        'user_agent' => "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11",
        "ignore_errors" => true,
        "timeout" => 3
    )
));

ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1) Gecko/20090615 Firefox/3.5');
$lines=file_get_contents($Url, false, $context);
$data = json_decode($lines,true);
	/*$lines = file_get_contents('http://www.medicohelpline.com/HospitalDoctorstime?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json',true);
    $data = json_decode($lines,true);
	return $data['hospitalDoctorList'];*/
}
public function get_department()
{
	$this->db->order_by('sequence');
	$query = $this->db->get('department');
	return $query->result_array();
}
public function get_department1()
{
	$this->db->select('*');
	$this->db->from('gallery_album');
	$this->db->join('department','department.id=gallery_album.dept_id');
	$this->db->where('category','Department');
	$query = $this->db->get();
	return $query->result_array();
}

public function get_singledept($urll)
{
	if($urll!="")
	{
		$this->db->limit(1,0);
		$this->db->select('department.id,department.name,department.pdesc,department.image');
		$this->db->from('department');
		$this->db->where(trim('department.name'),trim($urll));
		$query = $this->db->get();
		return $query->result_array();		
	}
	else
	{
		$this->db->select('department.id,department.name,department.pdesc,department.image');
		$this->db->from('department');
		$this->db->order_by('id','asc');
		$query = $this->db->get();
		return $query->result_array();		
	}
}

/*public function get_singledept($urll)
{
	if($urll!="")
	{
		$this->db->limit(1,0);
		$this->db->select('department.id,department.name,department.pdesc,department.image');
		$this->db->from('department');
		$this->db->where('id',$urll);
		$query = $this->db->get();
		return $query->result_array();		
	}
	else
	{
		$this->db->select('department.id,department.name,department.pdesc,department.image');
		$this->db->from('department');
		$this->db->order_by('id','asc');
		$query = $this->db->get();
		return $query->result_array();		
	}
}*/
public function get_gallery()
{
	
		$this->db->select('gallery_album.id as aid,gallery_album.title,gallery_album.status,gallery_album.dept_id as did,gallery_image.id as id,gallery_image.album_id,gallery_image.image');
		$this->db->from('gallery_image');		
		$this->db->join('gallery_album','gallery_album.id=gallery_image.album_id', 'left');
		$this->db->join('department','department.id=gallery_album.dept_id','left');
		$this->db->where('gallery_album.status','Show');
		$this->db->group_by('gallery_album.id');
		//$this->db->order_by('gallery_album.title');
		$this->db->order_by('gallery_image.album_id','desc');
		$this->db->order_by('department.name','asc');
		$query=$this->db->get();
		return $query->result_array();
	
	
	/*		
	$this->db->select('gallery_album.id as aid,gallery_album.title,gallery_album.status,gallery_image.id as id,gallery_image.album_id,gallery_image.image');
	$this->db->from('gallery_image');
	$this->db->join('gallery_album','gallery_album.id=gallery_image.album_id');
	$this->db->group_by('gallery_image.album_id');
	$this->db->order_by('gallery_album.title');
	$query=$this->db->get();
	return $query->result_array();*/
	
}
public function get_single_gallery($urll){
	$this->db->where('gallery_album.dept_id',$urll);
	$this->db->select('gallery_album.id as aid,gallery_album.title,gallery_album.status,gallery_image.id as id,gallery_image.album_id,gallery_image.image');
	$this->db->from('gallery_image');
	$this->db->join('gallery_album','gallery_album.id=gallery_image.album_id');
	$this->db->join('department','department.id=gallery_album.dept_id');
	$this->db->group_by('gallery_image.album_id');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_images($urll)
{
	/*$squery=$this->db->get_where('gallery_album',array('title'=>$urll));
	$result=$squery->result_array();
	$id=$result[0]['id'];

	$this->db->limit(1,0);
	$this->db->where('album_id',$id);
	
	$this->db->select('gallery_album.id,gallery_image.album_id,gallery_album.title,gallery_image.image');
		$this->db->from('gallery_image');
		$this->db->join('gallery_album','gallery_image.album_id=gallery_album.id');
		$this->db->where('title',$urll);
	
	$query = $this->db->get();
	return $query->result_array();*/
	$this->db->where('album_id',$urll);
	$query = $this->db->get('gallery_image');
	return $query->result_array();
}
public function get_album($urll)
{
	$this->db->where('id',$urll);
	$query = $this->db->get('gallery_album');
	return $query->result_array();
}
public function about1_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('aboutus');
	return $query->num_rows();
}
public function get_about1($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->order_by('id','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('aboutus');
	return $query->result_array();
}
public function charity_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('charity');
	return $query->num_rows();
}
public function get_charity($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->where('status','Show');
	$query = $this->db->get('charity');
	return $query->result_array();
}
public function get_highlights()
{
	$this->db->limit(1,0);
	$this->db->order_by('id','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('highlights');
	return $query->result_array();
}
public function get_package()
{
	$sql = "select pcat.id,pcat.name,pcat.price, group_concat(ptest.testname) as testname from package_test ptest,package_category pcat where pcat.id=ptest.cat_id group by pcat.name order by pcat.price desc";
	//$query = $this->db->get();
	$query = $this->db->query($sql);
	/*
	$this->db->order_by('id','desc');
	$query = $this->db->get('package_category');*/
	return $query->result_array();
	
	

}
public function get_singletest($urll)
{
	/*$squery=$this->db->get_where('package_category',array('name'=>$urll));
	$result=$squery->result_array();
	$id=$result[0]['id'];

	$this->db->limit(1,0);
	$this->db->where('cat_id',$id);
	$this->db->select('package_category.name,package_category.sp,package_category.image,package_category.brochure,package_category.pdesc,GROUP_CONCAT(package_test.testname) as testname');
	$this->db->from('package_test');
		$this->db->join('package_category','package_category.id=package_test.cat_id');
		$this->db->where('name',$urll);
	
	$query = $this->db->get();
	return $query->result_array();*/
	$this->db->select('package_category.name,package_category.sp,package_category.image,package_category.brochure,package_category.pdesc,GROUP_CONCAT(package_test.testname) as testname');
	$this->db->from('package_test');
	$this->db->join('package_category','package_category.id=package_test.cat_id');
	$this->db->where('cat_id',$urll);
	$query = $this->db->get();
	return $query->result_array();
}
public function career_count()
{
	$query = $this->db->get('career');
	return $query->num_rows();
}
public function get_career($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->order_by('id','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('career');
	return $query->result_array();
}
public function get_academics($urll)
{
	$squery=$this->db->get_where('academics',array('name'=>$urll));
	$result=$squery->result_array();
	$id=$result[0]['id'];

	$this->db->limit(1,0);
	$this->db->where('a_id',$id);
	$this->db->select('academics.id,academics.name,academics_desc.pdesc,academics_desc.title,academics_desc.image');
		$this->db->from('academics_desc');
		$this->db->join('academics','academics.id=academics_desc.a_id');
		$this->db->where('name',$urll);
	$query = $this->db->get();
	return $query->result_array();
	
	/*$this->db->select('academics.name,academics.id');
	$this->db->from('academics');
	$this->db->join('academics_desc','academics_desc.a_id=academics.id');
	$this->db->where('academics.status','Show');
	$query = $this->db->get();
	return $query->result_array();*/
}

public function get_acad()
{
	
	$this->db->select('academics.name,academics.id');
	$this->db->from('academics');
	$this->db->join('academics_desc','academics_desc.a_id=academics.id');
	$this->db->where('academics.status','Show');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_allia()
{
	$this->db->where('status','Show');
	$this->db->group_by('type');
	$query = $this->db->get('alliances');
	return $query->result_array();
}
public function get_alliances($urll)
{
		$this->db->where(array('type'=>$urll,'status'=>'Show'));
		$query = $this->db->get('alliances');
		return $query->result_array();
}
public function get_allianceimages($urll)
{
		$this->db->select('image');
		$this->db->from('alliances');
		$this->db->where(array('type'=>$urll,'status'=>'Show'));
		$query = $this->db->get();
		return $query->result_array();
}
public function news_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('news');
	return $query->num_rows();
}
public function get_allnews($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->order_by('id','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('news');
	return $query->result_array();
}
public function get_mission()
{
	$this->db->where('status','Show');
	$query = $this->db->get('mission_vission');
	return $query->result_array();
}
// public function get_diagnostic()
// {
// 	$this->db->order_by('title');
// // 	$this->db->where('status','Show');
// 	$query = $this->db->get('diagnostics_desc');
// 	return $query->result_array();
// }
// public function get_singlediaog($urll)
// {
// 	$squery=$this->db->get_where('diagnostics',array('name'=>$urll));
// 	$result=$squery->result_array();
// 	// $id=$result[0]['id'];

// 	$this->db->limit(1,0);
// 	// $this->db->where('d_id',$id);
// 	$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
// 		$this->db->from('diagnostics_desc');
// 		$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
// 		$this->db->where('name',$urll);
// 	$query = $this->db->get();
// 	return $query->result_array();
// 		/*$this->db->limit(1,0);
// 		$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
// 		$this->db->from('diagnostics_desc');
// 		$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
// 		$this->db->where('d_id',$urll);
// 		$query = $this->db->get();
// 		return $query->result_array();	*/	
// }
public function get_acaddesc()
{
	$this->db->where('status','Show');
	$query = $this->db->get('academics_about');
	return $query->result_array();
}
public function getacadType()
{
	$this->db->select('academics.name,academics.id');
	$this->db->from('academics');
	$this->db->join('academics_desc','academics_desc.a_id=academics.id');
	$this->db->where('academics.status','Show');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_library()
{
	$this->db->where('status','Show');
	$query = $this->db->get('library');
	return $query->result_array();
}
public function get_director()
{
	$this->db->where('status','Show');
	$query = $this->db->get('academic_director');
	return $query->result_array();
}
public function get_speciality()
{
	$this->db->order_by('name');
	$this->db->where('status','Show');
	$query = $this->db->get('speciality');
	return $query->result_array();
}
public function get_category()
{
	$this->db->select('*');
	$this->db->from('gallery_album');
	$this->db->where('category','News & Events');
	$this->db->order_by('id','desc');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_categorys()
{
	$this->db->select('*');
	$this->db->from('gallery_album');
	$this->db->where('category','News & Events');
	$query = $this->db->get();
	return $query->result_array();
}

public function get_single_galleryimg($urll){
	$this->db->where('gallery_album.id',$urll);
	$this->db->select('gallery_album.id as aid,gallery_album.title,gallery_album.status,gallery_album.category,gallery_image.id as id,gallery_image.album_id,gallery_image.image');
	$this->db->from('gallery_image');
	$this->db->join('gallery_album','gallery_album.id=gallery_image.album_id');
	
	$this->db->group_by('gallery_image.album_id');
	$query = $this->db->get();
	return $query->result_array();
}
public function speciality_count($urll)
{
	$this->db->where('s_id',$urll);
	$query = $this->db->get('speciality_desc');
	return $query->num_rows();
}
public function get_specialitydetail($limit,$start,$urll)
{
	$squery=$this->db->get_where('speciality',array('name'=>$urll));
	$result=$squery->result_array();
	$id=$result[0]['id'];
		
	$this->db->limit($limit,$start);
	$this->db->where('s_id',$id);
	$query = $this->db->get('speciality_desc');
	return $query->result_array();
}
public function get_sadhu()
{
	$this->db->where('status','Show');
	$query = $this->db->get('sadhuvaswani');
	return $query->result_array();
}
public function get_revdada()
{
	$this->db->where('status','Show');
	$query = $this->db->get('revdada');
	return $query->result_array();
}
public function get_dr()
{
	$this->db->select('dr.id,dr.name');
	$this->db->from('dr');
	$this->db->join('opd_schedule','opd_schedule.dr_id=dr.id');
	$this->db->group_by('opd_schedule.dr_id');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_opdspeci()
{
	$lines = file_get_contents('https://www.medicohelpline.com/HospitalSpecialites?lgKey=AGS9hZBNpGXElYrataENyiS&dataType=json');
    $data = json_decode($lines,true);
	return $data['specialityList'];
	/*$this->db->select('speciality');
	$this->db->from('opd_schedule');
	$this->db->group_by('speciality');
	$query = $this->db->get();
	return $query->result_array();*/
}
public function get_3dept()
{
	$this->db->limit(3,0);
	$this->db->order_by('id','desc');
	$query = $this->db->get('department');
	return $query->result_array();
}
public function get_3package()
{
	/*$this->db->limit(4,0);
	$this->db->select('package_category.id,package_category.name,package_category.sp,package_category.image,package_category.brochure,package_category.pdesc,(select GROUP_CONCAT(package_test.testname) from package_test where package_category.id=package_test.cat_id) as testname');
	$this->db->from('package_category');
	$this->db->join('package_test','package_category.id=package_test.cat_id');
	$this->db->order_by('package_category.id','desc');
	$query = $this->db->get();*/
	$sql = "select pcat.id, pcat.name,pcat.sp,pcat.image,group_concat(ptest.testname) as testname from package_test ptest,package_category pcat where pcat.id=ptest.cat_id group by pcat.name order by pcat.id desc LIMIT 0,3";
	$query = $this->db->query($sql);
	return $query->result_array();
}
public function category()
{
	$this->db->order_by('price','asc');
	$this->db->where('package_type','Wellness');
	$query=$this->db->get('package_category');
	return $query->result_array();
}
public function getpackage_type()
{
	$this->db->order_by('price','asc');
	$this->db->where('package_type','Pre-Operative');
	$query=$this->db->get('package_category');
	return $query->result_array();
}
public function get_3news()
{
	//chnange id as insert date
	$this->db->limit(3,0);
	$this->db->order_by('insert_date','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('news');
	return $query->result_array();
}
public function get_latest_news()
{
	//chnange id as insert date
	$this->db->limit(1,0);
	$this->db->order_by('insert_date','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('news');
	return $query->result_array();
}
public function test_count()
{
	/*$this->db->select('package_category.id,package_category.name,package_category.sp,package_category.image,package_category.brochure,package_category.pdesc,(select GROUP_CONCAT(package_test.testname) from package_test where package_category.id=package_test.cat_id) as testname');
	$this->db->from('package_category');
	$query = $this->db->get();*/
	$sql = "select pcat.id, pcat.name,pcat.sp,pcat.image,group_concat(ptest.testname) as testname from package_test ptest,package_category pcat where pcat.id=ptest.cat_id group by pcat.name";
	//$query = $this->db->get();
	$query = $this->db->query($sql);
	return $query->num_rows();
}
public function get_test($limit,$start)
{
	//$this->db->limit($limit,$start);
	//$this->db->select('package_category.id,package_category.name,package_category.sp,package_category.image,package_category.brochure,package_category.pdesc,(select GROUP_CONCAT(package_test.testname) from package_test where package_category.id=package_test.cat_id) as testname');
	//$this->db->from('package_category');
	//$sql = "select pcat.id, pcat.name,pcat.sp,pcat.image,group_concat(ptest.testname) as testname from package_test ptest,package_category pcat where pcat.id=ptest.cat_id group by pcat.name order by pcat.id desc LIMIT ".$start.",".$limit."";
	//$query = $this->db->get();
	$sql = "select pcat.id, pcat.name,pcat.sp,pcat.image,group_concat(ptest.testname) as testname from package_test ptest,package_category pcat where pcat.id=ptest.cat_id group by pcat.name order by pcat.id desc";
	$query = $this->db->query($sql);
	//print_r($query->result_array()); die();
	return $query->result_array();
}
public function dept_count()
{
	$query = $this->db->get('department');
	return $query->num_rows();
}
public function get_dept($limit,$start)
{
	/*$lines = file_get_contents('http://192.168.2.19:8084/MedicoHelpline/HospitalDepartmentList?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json');
    $data = json_decode($lines,true);
	print_r(count($data['departmentList'])); die();*/
	
	//$this->db->limit($limit,$start);
	$this->db->order_by('id','desc');
	$query = $this->db->get('department');
	return $query->result_array();
}
public function medical_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('medical_facility');
	return $query->num_rows();
}
public function get_medical($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->order_by('id','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('medical_facility');
	return $query->result_array();
}
// public function diaog_count()
// {
// 	$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
// 	$this->db->from('diagnostics_desc');
// 	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
// 	$this->db->where('status','Show');
// 	$this->db->order_by('diagnostics.id','desc');
// 	$query = $this->db->get();
// 	return $query->num_rows();	
// }
// public function get_diaog($limit,$start)
// {
// 	$this->db->limit($limit,$start);
// 	$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
// 	$this->db->from('diagnostics_desc');
// 	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
// 	$this->db->where('status','Show');
// 	$this->db->order_by('diagnostics.id','desc');
// 	$query = $this->db->get();
// 	return $query->result_array();	
// }
public function feedback_insert($data)
{
	$query = $this->db->insert('feedback',$data);
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function get_doctor()
{
	$lines = file_get_contents('https://www.medicohelpline.com/HospitalDoctorstime?lgKey=AGS9hZBNpGXElYrataENyiS&dataType=json',true);
    $data = json_decode($lines,true);
	if(!empty($data))
		return $data['hospitalDoctorList'];
	else
		return false;
}
public function get_singledoctor($urll)
{
	$lines = file_get_contents('https://www.medicohelpline.com/HospitalSingleDoctor?docuid='.$urll.'&lgKey=AGS9hZBNpGXElYrataENyiS&dataType=json',true);
    $data = json_decode($lines,true);
	return $data;
}
public function get_drlist()
{
	$lines = file_get_contents('https://www.medicohelpline.com/HospitalAllDoctors?lgKey=AGS9hZBNpGXElYrataENyiS&dataType=json',true);
    $data = json_decode($lines,true);
	return $data['hospitalDoctorList'];
}
public function svmmc_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('mission');
	return $query->num_rows();
}
public function get_svmmc($limit,$start)
{
	//$this->db->limit($limit,$start);
	$this->db->order_by('id','asc');
	$this->db->where('status','Show');
	$query = $this->db->get('mission');
	return $query->result_array();
}
public function get_vaswanimision()
{
	$this->db->where('status','Show');
	$query = $this->db->get('vaswanimission');
	return $query->result_array();
}
public function inlaks_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('inlaks');
	return $query->num_rows();
}
public function get_inlaks($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->where('status','Show');
	$query = $this->db->get('inlaks');
	return $query->result_array();
}
public function cancer_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('cancer');
	return $query->num_rows();
}
public function get_cancer($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->where('status','Show');
	$query = $this->db->get('cancer');
	return $query->result_array();
}
public function insert_appointment($data)
{
	$query = $this->db->insert('appointment',$data);
	if($query)
	{
		return true;
	}
	else
	{
		return false;
	}
}
public function get_hosid()
{
	$query = $this->db->get('hospitalid');
	return $query->result_array();
}
public function opd_feedbackinsert($data)
{
	$query = $this->db->insert('opd_feedback',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function get_depttesti($urll)
{
// 	$this->db->where('dept_id',$urll);
	$query = $this->db->get('testimonial');
	return $query->result_array();
}

public function get_imagesAlbum($urll)
{
	$this->db->where('title',$urll);
	$query = $this->db->get('news');
	$result= $query->result_array();
// 	$id=$result[0]['id'];

	$this->db->select('*');
    $this->db->from('gallery_album a'); 
    $this->db->join('news b', 'b.album_id=a.id');
    $this->db->join('gallery_image c', 'c.album_id=a.id');
    // $this->db->where('b.id',$id);       
    $query = $this->db->get(); 
	return $query->result_array();	
}
public function get_technicalteam()
{
	$this->db->where('status','Show');
	$query = $this->db->get('technical_team');
	return $query->result_array();
}
public function getfounder()
	{
		$this->db->where('status','Show');
		$query = $this->db->get('founder');
		return $query->result_array();
	}
	public function get_camp1()
	{
		$this->db->where('status','Show');
		$query = $this->db->get('camp');
		return $query->result_array();
	}
	public function camp1_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('camp');
	return $query->num_rows();
}
public function smssh_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('mission');
	return $query->num_rows();
}
public function get_smssh($limit,$start)
{
	//$this->db->limit($limit,$start);
	$this->db->order_by('id','asc');
	$this->db->where('status','Show');
	$query = $this->db->get('mission');
	return $query->result_array();
}
public function diaog_count()
{
	$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
	$this->db->from('diagnostics_desc');
	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
	$this->db->where('status','Show');
	$this->db->order_by('diagnostics.id','desc');
	$query = $this->db->get();
	return $query->num_rows();	
}
public function get_diaog($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
	$this->db->from('diagnostics_desc');
	$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
	$this->db->where('status','Show');
	$this->db->order_by('diagnostics.id','desc');
	$query = $this->db->get();
	return $query->result_array();	
}
public function get_diagnostic()
{
	$this->db->order_by('name');
	$this->db->where('status','Show');
	$query = $this->db->get('diagnostics');
	return $query->result_array();
}
public function get_singlediaog($urll)
{
	$squery=$this->db->get_where('diagnostics',array('name'=>$urll));
	$result=$squery->result_array();
	$id=$result[0]['id'];

	$this->db->limit(1,0);
	$this->db->where('d_id',$id);
	$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
		$this->db->from('diagnostics_desc');
		$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
		$this->db->where('name',$urll);
	$query = $this->db->get();
	return $query->result_array();
		/*$this->db->limit(1,0);
		$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
		$this->db->from('diagnostics_desc');
		$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
		$this->db->where('d_id',$urll);
		$query = $this->db->get();
		return $query->result_array();	*/	
}

public function patienteducation_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('patienteducation');
	return $query->num_rows();
}

public function get_patienteducation()
{
	//$this->db->limit($limit,$start);
	// $this->db->order_by('id','asc');
	$this->db->where('status','Show');
	$query = $this->db->get('patienteducation');
	return $query->result_array();
}

public function get_announcement()
{

	$this->db->where('status','Show');
	$query = $this->db->get('announcement');
	return $query->result_array();
}
public function cashlessfacility_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('cashless_facility');
	return $query->num_rows();
}

public function get_cashlessfacility()
{
	// $this->db->limit($limit,$start);
	// $this->db->order_by('id','asc');
	$this->db->where('status','Show');
	$query = $this->db->get('cashless_facility');
	return $query->result_array();
}

public function testimonial_count()
{
	$this->db->where('status','Show');
	$query = $this->db->get('testimonial');
	return $query->num_rows();
}

public function get_testimonial()
{
	// $this->db->limit($limit,$start);
	// $this->db->order_by('id','asc');
	$this->db->where('status','Show');
	$query = $this->db->get('testimonial');
	return $query->result_array();
}

public function get_3testimonial()
{
	$this->db->limit(3,0);
	$this->db->order_by('id','desc');
	$this->db->where('status','Show');
	$query = $this->db->get('testimonial');
	return $query->result_array();
}
public function camp_count()
{
	$this->db->select('campdata.id,campdata.name,campdata_desc.pdesc,campdata_desc.image');
	$this->db->from('campdata_desc');
	$this->db->join('campdata','campdata.id=campdata_desc.d_id');
	$this->db->where('status','Show');
	$this->db->order_by('campdata.id','desc');
	$query = $this->db->get();
	return $query->num_rows();	
}
public function get_camp($limit,$start)
{
	$this->db->limit($limit,$start);
	$this->db->select('campdata.id,campdata.name,campdata_desc.pdesc,campdata_desc.image');
	$this->db->from('campdata_desc');
	$this->db->join('campdata','campdata.id=campdata_desc.d_id');
	$this->db->where('status','Show');
	$this->db->order_by('campdata.id','desc');
	$query = $this->db->get();
	return $query->result_array();	
}
public function get_campdata()
{
	$this->db->order_by('name');
	$this->db->where('status','Show');
	$query = $this->db->get('campdata');
	return $query->result_array();
}
public function get_singlecamp($urll)
{
	$squery=$this->db->get_where('campdata',array('name'=>$urll));
	$result=$squery->result_array();
	$id=$result[0]['id'];

	$this->db->limit(1,0);
	$this->db->where('d_id',$id);
	$this->db->select('campdata.id,campdata.name,campdata_desc.pdesc,campdata_desc.image');
		$this->db->from('campdata_desc');
		$this->db->join('campdata','campdata.id=campdata_desc.d_id');
		$this->db->where('name',$urll);
	$query = $this->db->get();
	return $query->result_array();
		/*$this->db->limit(1,0);
		$this->db->select('diagnostics.id,diagnostics.name,diagnostics_desc.pdesc,diagnostics_desc.image');
		$this->db->from('diagnostics_desc');
		$this->db->join('diagnostics','diagnostics.id=diagnostics_desc.d_id');
		$this->db->where('d_id',$urll);
		$query = $this->db->get();
		return $query->result_array();	*/	
}
}
?>