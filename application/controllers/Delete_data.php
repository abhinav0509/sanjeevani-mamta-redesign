<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_Data extends CI_Controller {

public function delete_facilities()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->facilities_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/medicalfacilities');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/medicalfacilities');
	}
}
public function about()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->aboutus_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin');
	}
}
public function delete_mission()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->mission_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission');
	}
}
public function delete_patrons()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->patrons_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patrons');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patrons');
	}
}
public function delete_team()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->team_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patrons');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patrons');
	}
}
public function delete_vission()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->vission_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission_vission');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission_vission');
	}
}
public function delete_diagnostics()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->diagnostics_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/diagnostics');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/diagnostics');
	}
}
public function delete_speciality()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->speciality_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/speciality');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/speciality');
	}
}
public function delete_infra()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->infra_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/infrastructure');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/infrastructure');
	}
}
public function delete_technology()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->technology_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/technology');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/technology');
	}
}
public function delete_doctor()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->doctor_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
}
public function delete_alliances()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->alliances_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/alliances');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/alliances');
	}
}
public function delete_package()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->package_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/packegecategory');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/packegecategory');
	}
}


public function delete_responsibility()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->responsibility_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patientresponsibility');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patientresponsibility');
	}
}
public function delete_centers()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->centers_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/centerofexcellence');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/centerofexcellence');
	}
}
public function delete_academics()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->academics_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/academics');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/academics');
	}
}
public function delete_careers()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->careers_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/career');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/career');
	}
}
public function delete_testimonials()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->testimonials_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/testimonials');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/testimonials');
	}
}
public function delete_images()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->images_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/imagegallery');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/imagegallery');
	}
}
public function delete_news()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->news_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/newsevents');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/newsevents');
	}
}
public function delete_contacts()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->contacts_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/contactus');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/contactus');
	}
}
public function Delete_mail()
{
	$str=$this->input->post('id');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->mail_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/heart_testimonials');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/heart_testimonials');
	}
}
public function delete_opd()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->opd_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/opd');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/opd');
	}
}
public function about1()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->about1_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/aboutus');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/aboutus');
	}
}
public function charity()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->charity_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/charity');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/charity');
	}
}
public function highlights()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->highlights_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/highlights');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/highlights');
	}
}
public function aboutacade()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->aboutacade_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/academicsdesc');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/academicsdesc');
	}
}
public function library()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->library_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/library');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/library');
	}
}
public function director()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->director_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/director');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/director');
	}
}
public function delete_sv()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->sv_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/SadhuVaswani');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/SadhuVaswani');
	}
}
public function delete_rev()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->rev_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/RevDada');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/RevDada');
	}
}
public function delete_vaswanimission()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->vaswanimission_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/SadhuVaswaniMission');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/SadhuVaswaniMission');
	}
}
public function delete_inlaks()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->inlaks_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Inlaks');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Inlaks');
	}
}
public function delete_cancer()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->cancer_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Cancer');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Cancer');
	}
}
public function delete_teamstaff()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->teamstaff_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Technical_Team');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Technical_Team');
	}
}

public function delete_camp()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->camp_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/camp');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/camp');
	}
}

public function delete_data_patienteducation()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->patienteducation_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patienteducation');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/patienteducation');
	}
}
public function delete_data_announcement()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->announcement_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/announcement');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/announcement');
	}
}
public function delete_data_cashlessfacility()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->cashlessfacility_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/cashless_facility');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/cashless_facility');
	}
}

public function delete_data_testimonial()
{
	$str=$this->input->post('storeArrayvalue');
	$this->load->Model('Delete_whole_data');
	$res = $this->Delete_whole_data->testimonial_delete($str);
	if($res)
	{
		$mess = "Deleted Successfully!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/testimonial');
	}
	else
	{
		$mess = "Error Please Try Again!..";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/testimonial');
	}
}

}