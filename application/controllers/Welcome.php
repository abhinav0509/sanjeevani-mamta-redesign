<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
{
    	$this->load->Model('Front_mod');
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['banner']=$this->Front_mod->get_banner();
    	$data['who']=$this->Front_mod->get_who();
    	$data['threedept']=$this->Front_mod->get_3dept();
    	$data['package']=$this->Front_mod->get_3package();
    	$data['category']=$this->Front_mod->category();
    	$data['category']=$this->Front_mod->get_package();	
    	$data['package_type']=$this->Front_mod->getpackage_type();
    	$data['result1']=$this->Front_mod->get_announcement();
        $data['testimonial3']=$this->Front_mod->get_3testimonial();
    	// print_r($data['package']); die("FDSF");
    	$data['news']=$this->Front_mod->get_3news();
    	// $data['latestnews']=$this->Front_mod->get_latest_news();
    	// $data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();	
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
    	//print_r($data['id']); die("DS");
    	
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/Home',$data);
    	$this->load->view('NFront/Footer');
}
	public function About_us()
{	
        $this->load->Model('Front_mod');
    	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/about_us";
		$config['total_rows']=$this->Front_mod->about1_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->about1_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_about1($config['per_page'],$pageindex);
    	$data['result1']=$this->Front_mod->get_announcement();	
    	// $data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['news']=$this->Front_mod->get_news();
    	$data['category']=$this->Front_mod->get_package();
    	// $data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/about',$data);
    	$this->load->view('NFront/Footer');
}
	public function Vission()
{
    	$this->load->view('NFront/Header');
    	$this->load->view('NFront/Vission');
    	$this->load->view('NFront/Footer');
}
public function department()
{
    	$this->load->Model('Front_mod');
    	$data['dt']=array(
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
		$config['base_url']=base_url()."index.php/department";
		$config['total_rows']=$this->Front_mod->dept_count();
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->dept_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_dept($config['per_page'],$pageindex);
    	$data['spec']=$this->Front_mod->get_speciality();      
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['category']=$this->Front_mod->get_package();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['dept']=$this->Front_mod->get_department();
    	//$data['result']=$this->Front_mod->get_dept();
    	$data['result1']=$this->Front_mod->get_announcement();
    	$data['news']=$this->Front_mod->get_news();
    	//$data['testi']=$this->Front_mod->get_testi();
    	// $data['acadtype']=$this->Front_mod->getacadType();
    	$data['who']=$this->Front_mod->get_who();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['id']=$this->Front_mod->get_hosid();
	
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/department',$data);
    	$this->load->view('NFront/Footer');
}
	public function contact()
	{
	    $this->load->Model('Front_mod');
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['who']=$this->Front_mod->get_who();
    	$data['result1']=$this->Front_mod->get_announcement();
    	$data['id']=$this->Front_mod->get_hosid();
    
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/contact',$data);
    	$this->load->view('NFront/Footer');
    	
	}
	public function Founder()
	{
		$this->load->Model('Front_mod');
	
		$data1['founder']=$this->Front_mod->getfounder();
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['result']=$this->Front_mod->get_mission();
    	$data['news']=$this->Front_mod->get_news();
    	$data['category']=$this->Front_mod->get_package();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['who']=$this->Front_mod->get_who();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		$data['result1']=$this->Front_mod->get_announcement();
		$this->load->view('NFront/Header', $data);
		$this->load->view('NFront/founder', $data1);
		$this->load->view('NFront/Footer');
	}
	public function allnews()
{
    	$this->load->Model('Front_mod');
		$data['dt1']=array(
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
		$config['base_url']=base_url()."index.php/Welcome/allnews";
		$config['total_rows']=$this->Front_mod->news_count();
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->news_count();
		$data['news']=$this->Front_mod->get_category();
		$data['links']=$this->pagination->create_links();
		$data['category']=$this->Front_mod->get_package();
		$data['result']=$this->Front_mod->get_allnews($config['per_page'],$pageindex);
		//$data['result']=$this->Front_mod->get_testimonial($urll);
		$data['result1']=$this->Front_mod->get_announcement();
		$data['who']=$this->Front_mod->get_who();
		$data['contact']=$this->Front_mod->get_contacts();
		$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
    	
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/allnews',$data);
    	$this->load->view('NFront/Footer');
}

public function Singlealbum()
{	
	$urll = $this->uri->segment(2);
	if($this->uri->segment(2)!="")
	{
	$urll = $this->uri->segment(2);		
	}
	else
	{
		$urll = '1';
	}	
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	
	$data['result']=$this->Front_mod->get_single_gallery($urll);
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['department']=$this->Front_mod->get_department1();
	$data['news']=$this->Front_mod->get_category();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['id']=$this->Front_mod->get_hosid();
	$data['urrll'] = $urll;
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/singlealbum',$data);
	$this->load->view('NFront/Footer');
}

public function SinglealbumNews()
{	
    	$urll = $this->uri->segment(2);
    	if($this->uri->segment(2)!="")
    	{
    	$urll = $this->uri->segment(2);		
    	}
    	else
    	{
    		$urll = '1';
    	}	
    	$this->load->Model('Front_mod');
    	
    	$data['result']=$this->Front_mod->get_single_galleryimg($urll);
    	$data['who']=$this->Front_mod->get_who();
        $data['news']=$this->Front_mod->get_category();
        $data['facilities']=$this->Front_mod->get_facility();
        $data['category']=$this->Front_mod->get_package();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['department']=$this->Front_mod->get_department1();
    	//$data['category']=$this->Front_mod->get_categorys();
    	$data['result1']=$this->Front_mod->get_announcement();
    	$data['id']=$this->Front_mod->get_hosid();
    	$data['urrll'] = $urll;
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/singlealbum_news',$data);
    	$this->load->view('NFront/Footer');
}
public function gallery()
{
    	$urll = trim(urldecode($this->uri->segment(2)));
    	if($this->uri->segment(2)!="")
    	{
    	$urll = trim(urldecode($this->uri->segment(2)));	
    	}
    	else
    	{
    		$urll = '';
    	}
    	$this->load->Model('Front_mod');
    	$data1['result']=$this->Front_mod->get_gallery();
    	$data1['who']=$this->Front_mod->get_who();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['department']=$this->Front_mod->get_department1();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['news']=$this->Front_mod->get_category();
    	$data['album']=$this->Front_mod->get_imagesAlbum($urll);
    	$data['result1']=$this->Front_mod->get_announcement();
    	$data['id']=$this->Front_mod->get_hosid();
    	$data['urrll'] = $urll;
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/gallery',$data1);
    	$this->load->view('NFront/Footer');
    }
    public function Galleryimages()
    {
    	
    	$this->load->Model('Front_mod');
    	$urll = trim(urldecode($this->uri->segment(2)));
    	$data1['result']=$this->Front_mod->get_images($urll);
    	$data1['album']=$this->Front_mod->get_album($urll);
    	$data1['who']=$this->Front_mod->get_who();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['department']=$this->Front_mod->get_department1();
    	$data['news']=$this->Front_mod->get_category();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
        $data['id']=$this->Front_mod->get_hosid();
        $data1['result2']=$this->Front_mod->get_gallery();
    	$data['result1']=$this->Front_mod->get_announcement();
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/gallery_images',$data1);
    	$this->load->view('NFront/Footer');
}
public function Doctors()
{
    	$this->load->Model('Front_mod');
    	//$data['dr']=$this->Front_mod->get_doctor();
    	$data['contact']=$this->Front_mod->get_contacts();
     	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
     	$data['category']=$this->Front_mod->get_package();
     	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['facilities']=$this->Front_mod->get_facility();
     	$data['team']=$this->Front_mod->get_technicalteam();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
    	$data['result1']=$this->Front_mod->get_announcement();	
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/findoctor',$data);
    	$this->load->view('NFront/Footer');
}
public function SingleDept()
{
	$urll = trim(urldecode($this->uri->segment(2)));
	if($this->uri->segment(2)!="")
	{
	$urll = trim(urldecode($this->uri->segment(2)));	
	}
	else
	{
		$urll = '';
	}
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['dept']=$this->Front_mod->get_department();
	$data['result']=$this->Front_mod->get_singledept($urll);
	$data['testi']=$this->Front_mod->get_depttesti($urll);
	$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/single_departmentnew',$data);
	$this->load->view('NFront/Footer');
}
public function opd_schedule()
{
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	//$data['opd']=$this->Front_mod->get_opd();
	//$data['dr']=$this->Front_mod->get_dr();
	//$data['dr']=$this->Front_mod->get_drlist();
	//$data['speci']=$this->Front_mod->get_opdspeci();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['spec']=$this->Front_mod->get_speciality();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['result1']=$this->Front_mod->get_announcement();	
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/opd',$data);
	$this->load->view('NFront/Footer');
}
public function get_opd_demo()
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

$Url="http://www.medicohelpline.com/HospitalDoctorstime?lgKey=AGS9hZBNpGXElYrataENyiS";
$context = stream_context_create(array(
    'http' => array(
        'method' => "GET",
        'header' =>
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n" .
            "Accept-Language: en-US,en;q=0.8\r\n".
            "Keep-Alive: timeout=2, max=10\r\n",
            "Connection: keep-alive",
        'user_agent' => "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11",
        "ignore_errors" => true,
        "timeout" => 2
    )
));

ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1) Gecko/20090615 Firefox/2.5');
$lines=file_get_contents($Url, false, $context);
$data = json_decode($lines,true); die("done");
	/*$lines = file_get_contents('http://www.medicohelpline.com/HospitalDoctorstime?lgKey=K8Y3WK27EPLx8AeZoJaoBAq&dataType=json',true);
    $data = json_decode($lines,true);
	return $data['hospitalDoctorList'];*/
}
public function mission_vission()
{
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['result']=$this->Front_mod->get_mission();
	$data['news']=$this->Front_mod->get_news();
	$data['category']=$this->Front_mod->get_package();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/mission-visson',$data);
	$this->load->view('NFront/Footer');
}
	public function camp()
	{
		$this->load->Model('Front_mod');
    
	    $data['dt']=array(
	        
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
		$config['base_url']=base_url()."index.php/camp";
		$config['total_rows']=$this->Front_mod->camp1_count();
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->camp1_count();
		$data['links']=$this->pagination->create_links();
		$data['cammp']=$this->Front_mod->get_camp1($config['per_page'],$pageindex);
	
// 		$data1['cammp']=$this->Front_mod->get_camp();
    	$data['spec']=$this->Front_mod->get_speciality();
    // 	$data['result']=$this->Front_mod->get_mission();
    	$data['result']=$this->Front_mod->get_smssh($config['per_page'],$pageindex);
    	$data['news']=$this->Front_mod->get_news();
    // 	$data['rowcount']=$this->Front_mod->camp_count();
    	$data['category']=$this->Front_mod->get_package();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['result1']=$this->Front_mod->get_announcement();
    	$data['who']=$this->Front_mod->get_who();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		
		$this->load->view('NFront/Header', $data);
		$this->load->view('NFront/camp', $data);
		$this->load->view('NFront/Footer');
	}
	public function SMSSH()
{	
    $this->load->Model('Front_mod');
	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/SMSSH";
		$config['total_rows']=$this->Front_mod->smssh_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->smssh_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_smssh($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['category']=$this->Front_mod->get_package();
    	$data['news']=$this->Front_mod->get_news();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/smssh',$data);
    	$this->load->view('NFront/Footer');
    }
    
    public function staff(){
	$this->db->where('status','Show');
	$query = $this->db->get('technical_team');
	return $query->result_array();
}
    public function Appointment()
{
	$data['urll'] = $this->uri->segment(2);
	$this->load->Model('Front_mod');
	//$data['doctor']=$this->Front_mod->get_singledoctor($urll);
	//print_r($data['doctor']); die();
	//$data['dr']=$this->Front_mod->get_drlist();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['spec']=$this->Front_mod->get_speciality();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/appointment',$data);
	$this->load->view('NFront/Footer');
}
public function bookAppointment()
{
    
    $date = date('Y-m-d');
	$this->load->view('PHPMailerAutoload');
 	$mmail="enquiry@mavericksoftware.in";
 	$pass="enquiry@1234";
    $query1=$this->db->get_where('mail_config',array('status'=>'Active'));
    $result=$query1->result_array();
	if($query1->num_rows() > 0){
		$mmail=$result[0]['mail'];      
		$pass=$result[0]['password'];
	}
	$data = array(
	'drid'=>$this->input->post('drid'),
	'drname'=>$this->input->post('drnm'),	
	'speciality'=>$this->input->post('speciality'),
	'name'=>$this->input->post('patientName'),
	'email'=>$this->input->post('patientEmail'),
	'mobile'=>$this->input->post('patientMobile'),
	'date'=>$this->input->post('userdate'),
	'time'=>$this->input->post('appTime')
	);
	 $drid=$this->input->post('drid');
	 $drname=$this->input->post('drnm');
	 $speciality=$this->input->post('speciality');
	 $name=$this->input->post('patientName');
	 $email=$this->input->post('patientEmail');
	 $mobile=$this->input->post('patientMobile');
	 $date=$this->input->post('userdate');
	 $time=$this->input->post('appTime');
	 
	    // $txt   ="<div style='width:90%; height:auto; border:1px solid #CCC; border-top:none;'>";
		//     $txt .="<div style='width:100%;height:40px;background-color:#00569D; color:#FFF;'>";
		// 	$txt .="<p style='padding-left:20px;padding-top:9px;'><b style='font-size:19px;'>Welcome...(Sanjeevani Mamta Hospital & Research Centre.)</b></p></div>";
		// 	$txt .="<div style='width:100%; margin-top:20px; margin-bottom:20px; padding-left:20px;'>";
		// 	$txt .="Doctor Name:- <b>$drname</b> <br />Speciality:-   $speciality <br />PatientName:-  $name <br />PatientEmail:-  $email <br />Date:-  $date <br />Time:   $time <br />PatientMobile:- $mobile";
		// 	$txt .="</div>";
		// 	$txt .="<div style='width:100%; margin-top:20px; margin-bottom:20px; padding-left:20px;'>";
		// 	$txt .="<b>Greeting from Sanjeevani Mamta Hospital & Research Centre.</b>,   <br />We have received your Enquiry.   <br />For appointments, and other detailes please call us at the following numbers-  +91 7021487408";
		// 	$txt .="</div>";
		// 	$txt .="<p style='padding-left:20px;'>Thank You...!</p>";
		// 	$txt .="</div>";
	$this->load->Model('Front_mod');
	$res = $this->Front_mod->insert_appointment($data);
	// if($res)
	// {
	// 	try{
    //          $mail = new PHPMailer;
    //          $mail->isSMTP();                                      // Set mailer to use SMTP
    //          $mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
    //          $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //          $mail->Username = $mmail;                   // SMTP username
    //          $mail->Password = $pass;               // SMTP password
    //          $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    //          $mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
    //          $mail->setFrom($email, 'Sanjeevani Hospital');     //Set who the message is to be sent from
    //          $mail->addAddress('enquirysmsshospital@gmail.com');  // Add a recipient
    //         //  $mail->AddReplyTo('mktinlaks@gmail.com', 'Reply to Inlaks Budhrani');
    //          $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    //          $mail->isHTML(true);                                  // Set email format to HTML
          
    //          $mail->Subject = "Request Appointment";
    //          $mail->Body    = "$txt";
    //          if(!$mail->send()) {
            
    //          }
    //          else
    //          {
                 
    //          }
    //    }
    //    catch(Exception $e){
          
    //    }
	//  	print_r(json_encode($data));
       
	// 	$data['msg']="Success";
	// 	print_r(json_encode($data));
	// }
	$op="";
	$op.="<body style='font-family: Poppins, sans-serif;padding:20px;background: #f1f1f1;'>";
	$op.="<div style='background-color:#000000;width:80%;max-width:600px;margin-left:auto;margin-right:auto;'>";
	$op.="<div style='background-color:#ffffff;padding:50px;'>";
	$op.="<header style='text-align:center;'>";
	$op.="<img src='https://www.sanjeevanimamtahospital.com/front/images/sanjeevani-logo.jpg' style='width:250px'/>";
	$op.="<h1>Request Appointment</h1>";
	$op.="</header>";
	$op.="<hr style='height:5px;background-color: #EA5C1F;border-color: #EA5C1F;'>";
	$op.="<div>";
	$op.="<div style='padding:20px 0 50px 0;'>";
	$op.="<section>";
	$op.="<h3 style='color:#EA5C1F;'>Hello, You Have A New Request Appointment from Sanjeevani Mamta Hospital & Research Centre Website</h3>";
	$op.="</section>";
	$op.="<section style='text-align:left;margin-top:50px;'>";
	$op.="<table style='text-align:left;margin-top:50px;'>";
	$op.="<tbody style='width: 30%;vertical-align:top;'>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Doctor Name:- </th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$drname</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Speciality:- </th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$speciality</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Patient Name:- </th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$name</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Patient Email:- </th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$email</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Date:- </th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$date</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Time:- </th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$time</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Patient Mobile:- </th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$mobile</td>";
	$op.="</tr>";
	$op.="</tbody>";
	$op.="</table>";
	$op.="</section>";
	$op.="</div>";
	$op.="</div>";
	$op.="</div>";
	$op.="<footer style='text-align:center;'>";
	$op.="<section style='font-size:10px;color:#000000;padding:20px 0;background-color:#ffffff !important;'>";
	$op.="<img src='https://www.sanjeevanimamtahospital.com/front/images/sanjeevani-logo.jpg' style='width:100px'/>";
	$op.="<p>";
	$op.="<a href='https://www.sanjeevanimamtahospital.com/'>sanjeevanimamtahospital.com</a>";
	$op.="</p>";
	$op.="<p>11, NITYANAND NAGAR CHS, Sahar Rd, Railway Colony, Andheri East, Mumbai, Maharashtra 400069 (India)</p>";
	$op.="<p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Maverick Software(I) Pvt Ltd All Rights Reserved</p>";
	$op.="</section>";
	$op.="</footer>";
	$op.="</div>";
	$op.="</body>";

	if($res)
	{
	try{
             $mail = new PHPMailer;
             $mail->isSMTP();                                      // Set mailer to use SMTP
             $mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
             $mail->SMTPAuth = true;                               // Enable SMTP authentication
             $mail->Username = $mmail;                   // SMTP username
             $mail->Password = $pass;               // SMTP password
             $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
             $mail->Port = 587; 
			 $mail->setFrom($email, 'Sanjeevani Mamta Hospital & Research Centre');     //Set who the message is to be sent from                                   //Set the SMTP port number - 587 for authenticated TLS
             $mail->setFrom('msipl@mavericksoftware.in', 'Sanjeevani Mamta Hospital & Research Centre');     //Set who the message is to be sent from
             $mail->addAddress('enquirysmsshospital@gmail.com', 'Sanjeevani Mamta Hospital & Research Centre');  // Add a recipient
          
             $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
             $mail->isHTML(true);                                  // Set email format to HTML
          
             $mail->Subject = "Request Appointment";
             $mail->Body    = $op;
			//  $mail->Body    = "Name:-  $name<br>Email:-  $email<br>Message:- $message<br>Mobile:- $mobile";
             if(!$mail->send()) {
               echo "faild";
             }
             else
             {
                 echo "success";
             }
       }
       catch(Exception $e){
         print_r($e);
       }
            // $txt  ="<div style='width:90%; height:auto; border:1px solid #CCC; border-top:none;'>";
			// $txt .="<div style='width:100%;height:40px;background-color:#00569D; color:#FFF;'>";
			// $txt .="<p style='padding-left:20px;padding-top:9px;'><b style='font-size:19px;'>Welcome Mail... (Sanjeevani Mamta Super Speciality Hospital)</b></p></div>";
			// $txt .="<div style='width:100%; margin-top:20px; margin-bottom:20px; padding-left:20px;'>";
			// $txt .="Dear Madam/Sir,   <br /> <b>Greeting from Sanjeevani Mamta Super Speciality Hospital.</b>,   <br />We have received your Enquiry.   <br />For appointments, and other detailes please call us at the following numbers- +91 7021487408      <br />Thanking You .";
			// $txt .="</div>";
			// $txt .="<p style='padding-left:20px;'>Team <br> Sanjeevani Mamta Hospital & Research Centre</p>";
			// $txt .="</div>";

			$op = "<body style='font-family: Poppins, sans-serif;padding:20px;background: #f1f1f1;'>";
			$op .= "<div style='background-color:#000000;width:80%;max-width:600px;margin-left:auto;margin-right:auto;'>";
			$op .= "<div style='background-color:#ffffff;padding:50px;'>";
			$op .= "<header style='text-align:center;'>";
			$op .= "<img src='https://www.sanjeevanimamtahospital.com/front/images/sanjeevani-logo.jpg' style='width:150px'/>";
			$op .= "<h2>Sanjeevani Mamta Hospital & Research Centre</h2>";
			$op .= "</header>";
			$op .= "<hr style='height:5px;background-color: #EA5C1F;border-color: #EA5C1F;'>";
			$op .= "<div>";
			$op .= "<div style='padding:20px 0 50px 0;'>";
			$op .= "<section>";
			$op .= "<h3 style='color:#EA5C1F;'>Hello, $name  <br /> <b> We have received your request for appointment with doctor $drname for $speciality Department. We will get back to you soon.</h3>";
			$op .= "</section>";
			$op .="<p style='padding-left:20px;'>Thank you for contacting Sanjeevani Mamta Hospital...!</p>";
			$op .= "<section style='text-align:left;margin-top:50px;'>";
			$op .= "</section>";
			$op .= "</div>";
			$op .= "</div>";
			$op .= "</div>";
			$op .= "<footer style='text-align:center;'>";
			$op .= "<section style='font-size:10px;color:#000000;padding:20px 0;background-color:#ffffff !important;'>";
			$op .= "<img src='https://www.sanjeevanimamtahospital.com/front/images/sanjeevani-logo.jpg' style='width:100px'/>";
			$op .= "<p><a href='https://www.sanjeevanimamtahospital.com/'>sanjeevanimamtahospital.com</a></p>";
			$op .= "<p>11, NITYANAND NAGAR CHS, Sahar Rd, Railway Colony, Andheri East, Mumbai, Maharashtra 400069 (India)</p>";
			$op .= "<p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Maverick Software(I) Pvt Ltd All Rights Reserved</p>";
			$op .= "</section>";
			$op .= "</footer>";
			$op .= "</div>";
			$op .= "</body>";

	    $this->load->model('Insert_mod');
		$res = $this->Insert_mod->enquiry_insert($data);
		if($res)
		{
		     $mess="Thank you for Contacting (Sanjeevani Mamta Super Speciality Hospital).....!";
		     $this->session->set_userdata('msg',$mess);
		      $mail->isSMTP();                                      // Set mailer to use SMTP
			  $mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
			  $mail->SMTPAuth = true;                               // Enable SMTP authentication
			  $mail->Username = $mmail;                   // SMTP username
			  $mail->Password = $pass;               // SMTP password
			  $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
			  $mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
			  $mail->setFrom('msipl@mavericksoftware.in', 'Sanjeevani Mamta Hospital & Research Centre');     //Set who the message is to be sent from
			  $mail->addAddress($email, 'Sanjeevani Mamta Hospital & Research Centre');  // Add a recipient
			  $mail->AddReplyTo('enquirysmsshospital@gmail.com', 'Reply to Sanjeevani Mamta Hospital & Research Centre');
			  $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			  $mail->isHTML(true);                                  // Set email format to HTML
			  

			  $mail->Subject = "no-reply";
			  $mail->Body    = $op;
              $mail->send();
		      //redirect('welcome/Franchisee_Enq');
			  
			  $data['message']="Mail Sent...!";
		      print_r(json_encode($data));	
		}
	}
	else
	{
		$data['msg']="Error";
		print_r(json_encode($data));
	}	
}
public function diagnostics()
{
	$this->load->Model('Front_mod');
	$data['dt']=array(
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
		$config['base_url']=base_url()."index.php/diagnostics";
		$config['total_rows']=$this->Front_mod->diaog_count();
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->diaog_count();
		$data['links']=$this->pagination->create_links();
		$data['dept1']=$this->Front_mod->get_diagnostic();
		$data['result']=$this->Front_mod->get_diaog($config['per_page'],$pageindex);
	$data['spec']=$this->Front_mod->get_speciality();
	//$data['dept']=$this->Front_mod->get_diagnostic();
	$data['result1']=$this->Front_mod->get_announcement();
	//$data['result']=$this->Front_mod->get_diaog();
	$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/diagnostic',$data);
	$this->load->view('NFront/Footer');
}
public function Singlediagnostic()
{
	$urll = trim(urldecode($this->uri->segment(2)));
	/*$urll = $this->uri->segment(2);
	if($this->uri->segment(2)!="")
	{
	$urll = $this->uri->segment(2);		
	}
	else
	{
		$urll = '';
	}*/
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['result']=$this->Front_mod->get_singlediaog($urll);
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['category']=$this->Front_mod->get_package();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['who']=$this->Front_mod->get_who();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/single_diagnostic',$data);
	$this->load->view('NFront/Footer');
}
public function news()
{
	$urll = trim(urldecode($this->uri->segment(2)));
	//$urll = urldecode($this->uri->segment(2));
	$this->load->Model('Front_mod');
	$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['result']=$this->Front_mod->get_detailnews($urll);
	$data['album']=$this->Front_mod->get_imagesAlbum($urll);
	$data['contact']=$this->Front_mod->get_contacts();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['spec']=$this->Front_mod->get_speciality();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/news',$data);
	$this->load->view('NFront/Footer');
}
public function Singlecheckup()
{
	
	$urll = $this->uri->segment(2);
	if($this->uri->segment(2)!="")
	{
	$urll = $this->uri->segment(2);		
	}
	else
	{
		$urll = '1';
	}
	
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['package']=$this->Front_mod->get_package();
	//$data['category']=$this->Front_mod->category();
	$data['category']=$this->Front_mod->get_package();
	$data['result']=$this->Front_mod->get_singletest($urll);
	//$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['package_type']=$this->Front_mod->getpackage_type();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$data['urrll'] = $urll;
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/single_package',$data);
	$this->load->view('NFront/Footer');
}
public function Singlecheckuptype()
{
	$urll = $this->uri->segment(2);
	if($this->uri->segment(2)!="")
	{
	$urll = $this->uri->segment(2);		
	}
	else
	{
		$urll = '1';
	}
	
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['package']=$this->Front_mod->get_package();
	$data['result']=$this->Front_mod->get_singletest($urll);
	//$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	//$data['category']=$this->Front_mod->category();	
	$data['category']=$this->Front_mod->get_package();
	$data['package_type']=$this->Front_mod->getpackage_type();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$data['urrll'] = $urll;
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/single_prepackage',$data);
	$this->load->view('NFront/Footer');
}
public function Health_checkup()
{
	$this->load->Model('Front_mod');
	$data['dt']=array(
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
		$config['base_url']=base_url()."index.php/Health_checkup";
		$config['total_rows']=$this->Front_mod->test_count();
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->test_count();
		$data['links']=$this->pagination->create_links();
    	$data['result1']=$this->Front_mod->get_announcement();
		$data['result']=$this->Front_mod->get_test($config['per_page'],$pageindex);
	$data['spec']=$this->Front_mod->get_speciality();
	$data['category']=$this->Front_mod->get_package();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	//$data['result']=$this->Front_mod->get_test();
	//$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/healthpackage',$data);
	$this->load->view('NFront/Footer');
}
public function patientguide()
{
	
	$this->load->Model('Front_mod');
	$data['dt']=array(
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
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/patientguide";
		$config['total_rows']=$this->Front_mod->response_count();
		$config['per_page']=5;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->response_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_response($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
	$data['spec']=$this->Front_mod->get_speciality();
	$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/patientresponsibility',$data);
	$this->load->view('NFront/Footer');
}

// public function patienteducation()
// {
// 	$this->load->Model('Front_mod');
// 	$data['dt']=array(
// 		'pindex'=>$this->input->post('pindex'),
// 		'page'=>$this->input->post('page')
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
// 			$pageindex = intval(($pageindex-1)*5);
// 		}
// 		$title = $this->input->post('page');
// 		$config=array();
// 		$config['base_url']=base_url()."index.php/patienteducation";
// 		$config['total_rows']=$this->Front_mod->education_count();
// 		$config['per_page']=5;
// 		$config['uri_segment']=$pageindex;
// 		$this->pagination->initialize($config);
// 		$data['rowcount']=$this->Front_mod->education_count();
// 		$data['category']=$this->Front_mod->get_package();
// 		$data['links']=$this->pagination->create_links();
// 		$data['result']=$this->Front_mod->get_education($config['per_page'],$pageindex);
		
// 	$data['spec']=$this->Front_mod->get_speciality();
// 	$data['news']=$this->Front_mod->get_news();
// 	$data['category']=$this->Front_mod->get_package();
// 	//$data['testi']=$this->Front_mod->get_testi();
// 	$data['acadtype']=$this->Front_mod->getacadType();
// 	$data['who']=$this->Front_mod->get_who();
// 	$data['contact']=$this->Front_mod->get_contacts();
// 	$data['facilities']=$this->Front_mod->get_facility();
// 	$data['dept']=$this->Front_mod->get_department();
// 	$data['dept1']=$this->Front_mod->get_diagnostic();
// 	$data['id']=$this->Front_mod->get_hosid();
// 	$this->load->view('NFront/Header',$data);
// 	$this->load->view('NFront/patienteducation',$data);
// 	$this->load->view('NFront/Footer');
// }

public function Patienteducation()
{	
    $this->load->Model('Front_mod');
	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/Patienteducation";
		$config['total_rows']=$this->Front_mod->patienteducation_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->patienteducation_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_patienteducation($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['category']=$this->Front_mod->get_package();
    	$data['news']=$this->Front_mod->get_news();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		$data1['patient']=$this->Front_mod->get_patienteducation();

    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/patienteducation',$data1);
    	$this->load->view('NFront/Footer');
    }

public function Galleryvideos()
{
	
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/gallery_videos',$data);
	$this->load->view('NFront/Footer');
}
public function alliances()
{
	$urll = urldecode($this->uri->segment(2));
	if($this->uri->segment(2)!="")
	{
	$urll = urldecode($this->uri->segment(2));		
	}
	else
	{
		$urll = 'TPA';
	}
	$data['ty']=$urll;
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['all']=$this->Front_mod->get_allia();
	$data['result']=$this->Front_mod->get_alliances($urll);
	$data['imgg']=$this->Front_mod->get_allianceimages($urll);
	$data['category']=$this->Front_mod->get_package();
	//print_r($data['img']); die();
	$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['dept1']=$this->Front_mod->get_diagnostic();
	$data['who']=$this->Front_mod->get_who();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/alliances',$data);
	$this->load->view('NFront/Footer');
}
public function campdetails()
	{
		$this->load->Model('Front_mod');
    
	    $data['dt']=array(
	        
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
		$config['base_url']=base_url()."index.php/campdetails";
		$config['total_rows']=$this->Front_mod->camp1_count();
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->camp1_count();
		$data['links']=$this->pagination->create_links();
		$data['cammp']=$this->Front_mod->get_camp1($config['per_page'],$pageindex);
	
// 		$data1['cammp']=$this->Front_mod->get_camp();
    	$data['spec']=$this->Front_mod->get_speciality();
    // 	$data['result']=$this->Front_mod->get_mission();
    	$data['result']=$this->Front_mod->get_smssh($config['per_page'],$pageindex);
    	$data['news']=$this->Front_mod->get_news();
    // 	$data['rowcount']=$this->Front_mod->camp_count();
    	$data['category']=$this->Front_mod->get_package();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['result1']=$this->Front_mod->get_announcement();
    	$data['who']=$this->Front_mod->get_who();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		
		$this->load->view('NFront/Header', $data);
		$this->load->view('NFront/campdetail', $data);
		$this->load->view('NFront/Footer');
	}
	
public function cashless_facility ()
{
    $this->load->Model('Front_mod');
	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/cashless_facility";
		$config['total_rows']=$this->Front_mod->cashlessfacility_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->cashlessfacility_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_cashlessfacility($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['category']=$this->Front_mod->get_package();
    	$data['news']=$this->Front_mod->get_news();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		$data1['cashless']=$this->Front_mod->get_cashlessfacility();

    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/cashless_facility',$data1);
    	$this->load->view('NFront/Footer');

}
public function linkedin()
{
	$this->load->view('NFront/demo');
}


public function testimonial ()
{
    $this->load->Model('Front_mod');
	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/testimonial";
		$config['total_rows']=$this->Front_mod->testimonial_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->testimonial_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_testimonial($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['category']=$this->Front_mod->get_package();
    	$data['news']=$this->Front_mod->get_news();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		$data1['testimonial']=$this->Front_mod->get_testimonial();

    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/testimonial',$data1);
    	$this->load->view('NFront/Footer');

}
public function career()
{
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
		$pageindex = intval(($pageindex-1)*4);
	}		
	$this->load->Model('Front_mod');
	$config=array();
	$config['base_url']=base_url()."index.php/career";
	$config['total_rows']=$this->Front_mod->career_count();
	$config['per_page']=4;
	$config['uri_segment']=$pageindex;
	$this->pagination->initialize($config);
	$data1['rowcount']=$this->Front_mod->career_count();
	$data1['links']=$this->pagination->create_links();
	$data1['news']=$this->Front_mod->get_news();
	//$data1['testi']=$this->Front_mod->get_testi();
	$data1['acadtype']=$this->Front_mod->getacadType();
	$data1['result']=$this->Front_mod->get_career($config['per_page'],$pageindex);
	$data1['contact']=$this->Front_mod->get_contacts();
	$data1['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data1['spec']=$this->Front_mod->get_speciality(); 
	$data1['facilities']=$this->Front_mod->get_facility();
	$data1['dept']=$this->Front_mod->get_department();
	$data1['dept1']=$this->Front_mod->get_diagnostic();
	$data1['id']=$this->Front_mod->get_hosid();
	
	$this->load->view('NFront/Header',$data1);
	$this->load->view('NFront/career',$data1);
	$this->load->view('NFront/Footer');
}
public function camp_data()
{
	$this->load->Model('Front_mod');
	$data['dt']=array(
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
		$config['base_url']=base_url()."index.php/diagnostics";
		$config['total_rows']=$this->Front_mod->camp_count();
		$config['per_page']=6;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->camp_count();
		$data['links']=$this->pagination->create_links();
		$data['camp1']=$this->Front_mod->get_campdata();
		$data['result']=$this->Front_mod->get_camp($config['per_page'],$pageindex);
	$data['spec']=$this->Front_mod->get_speciality();
	//$data['dept']=$this->Front_mod->get_diagnostic();
	$data['result1']=$this->Front_mod->get_announcement();
	//$data['result']=$this->Front_mod->get_diaog();
	$data['news']=$this->Front_mod->get_news();
	//$data['testi']=$this->Front_mod->get_testi();
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['who']=$this->Front_mod->get_who();
	$data['category']=$this->Front_mod->get_package();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/camp_data',$data);
	$this->load->view('NFront/Footer');
}
public function Singlecampdata()
{
	$urll = trim(urldecode($this->uri->segment(2)));
	/*$urll = $this->uri->segment(2);
	if($this->uri->segment(2)!="")
	{
	$urll = $this->uri->segment(2);		
	}
	else
	{
		$urll = '';
	}*/
	$this->load->Model('Front_mod');
	$data['spec']=$this->Front_mod->get_speciality();
	$data['camp1']=$this->Front_mod->get_campdata();
	$data['result']=$this->Front_mod->get_singlecamp($urll);
	$data['acadtype']=$this->Front_mod->getacadType();
	$data['contact']=$this->Front_mod->get_contacts();
	$data['category']=$this->Front_mod->get_package();
	$data['result1']=$this->Front_mod->get_announcement();
	$data['facilities']=$this->Front_mod->get_facility();
	$data['dept']=$this->Front_mod->get_department();
	$data['who']=$this->Front_mod->get_who();
	$data['id']=$this->Front_mod->get_hosid();
	$this->load->view('NFront/Header',$data);
	$this->load->view('NFront/single_camp',$data);
	$this->load->view('NFront/Footer');
}
public function support()
{
    $this->load->Model('Front_mod');
	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/support";
		$config['total_rows']=$this->Front_mod->testimonial_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->testimonial_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_testimonial($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['category']=$this->Front_mod->get_package();
    	$data['news']=$this->Front_mod->get_news();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		$data1['testimonial']=$this->Front_mod->get_testimonial();

    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/support');
    	$this->load->view('NFront/Footer');

}
public function volunteer()
{
    $this->load->Model('Front_mod');
	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/volunteer";
		$config['total_rows']=$this->Front_mod->testimonial_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->testimonial_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_testimonial($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['category']=$this->Front_mod->get_package();
    	$data['news']=$this->Front_mod->get_news();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		$data1['testimonial']=$this->Front_mod->get_testimonial();

    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/volunteer');
    	$this->load->view('NFront/Footer');

}
public function CSR()
{
    $this->load->Model('Front_mod');
	$data['dt']=array(
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
			$pageindex = intval(($pageindex-1)*4);
		}
		$title = $this->input->post('page');
		$config=array();
		$config['base_url']=base_url()."index.php/CSR";
		$config['total_rows']=$this->Front_mod->testimonial_count();
		$config['per_page']=4;
		$config['uri_segment']=$pageindex;
		$this->pagination->initialize($config);
		$data['rowcount']=$this->Front_mod->testimonial_count();
		$data['links']=$this->pagination->create_links();
		$data['result']=$this->Front_mod->get_testimonial($config['per_page'],$pageindex);
		$data['result1']=$this->Front_mod->get_announcement();	
    	$data['spec']=$this->Front_mod->get_speciality();
    	$data['who']=$this->Front_mod->get_who();
    	$data['category']=$this->Front_mod->get_package();
    	$data['news']=$this->Front_mod->get_news();
    	$data['acadtype']=$this->Front_mod->getacadType();
    	$data['contact']=$this->Front_mod->get_contacts();
    	$data['facilities']=$this->Front_mod->get_facility();
    	$data['dept']=$this->Front_mod->get_department();
    	$data['dept1']=$this->Front_mod->get_diagnostic();
    	$data['id']=$this->Front_mod->get_hosid();
		$data1['testimonial']=$this->Front_mod->get_testimonial();

    	$this->load->view('NFront/Header',$data);
    	$this->load->view('NFront/csr');
    	$this->load->view('NFront/Footer');

}
}
