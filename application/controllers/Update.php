<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

public function update_aboutus()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			  $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('about'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->aboutus_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/index');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/index');
		 }
}
private function set_upload_options($folder)
{   
//  upload an image options
    $config = array();
    $config['upload_path'] = './data/uploads/'.$folder;
    $config['allowed_types'] = 'gif|jpg|jpeg|png|txt|docs|docx|pdf|cdr';
    $config['overwrite']     = false;
	$config['max_size']	= '10240';
	
    return $config;
}
public function singleimage_aboutus()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/about/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->singleimage_update($id,$img1,$img_row,$img);
		 if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin');
		}
}
public function update_mission()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			 $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('mission'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->mission_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/smssh');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/smssh');
		 }
}
public function singleimage_mission()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/mission/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->mission_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/smssh');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/smssh');
		}
}
public function update_patrons()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			$now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('patrons'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->patrons_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/patrons');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patrons');
		 }
}
public function singleimage_patrons()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/patrons/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->patrons_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patrons');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patrons');
		}
}
public function update_management()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			  $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('management'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'name'=>$this->input->post('name'),
		     'designation'=>$this->input->post('designation'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'name'=>$this->input->post('name'),
		    'designation'=>$this->input->post('designation'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->management_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/managementteam');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/managementteam');
		 }
}
public function singleimage_management()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/management/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->management_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/management');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/management');
		}
}
public function update_medicalfacility()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {  
	         $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('medical'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		$img = implode(",",$org);
		$this->load->Model('Update_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'type'=>$type
			);
			$this->load->Model('insert_mod');
			$id = $this->insert_mod->insert_type($data);
			
			if($img!=""){
				$data1 = array(
				'type_id'=>$id,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
				);
			}
			else{
				$data1 = array(
				'type_id'=>$id,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->medicalfacility_update($data1,$bid);
			if($res){
			$mess = "UPdated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/medicalfacilities');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/medicalfacilities');
		}
		}
		else
		{
			if($img!=""){
				$data1 = array(
				'type_id'=>$choose,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
				);
			}
			else{
				$data1 = array(
				'type_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->medicalfacility_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/medicalfacilities');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/medicalfacilities');
		}
		}
}
public function singleimage_medicalfacility()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/medical/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->medicalfacility_singleimage($id,$img1,$img_row,$img);
	  if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/medicalfacilities');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/medicalfacilities');
		}
}
public function update_alliances()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			 $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('alliances'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'type'=>$this->input->post('type'),
			 'category'=>$this->input->post('cmptype'),
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('cn'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'type'=>$this->input->post('type'),
			'category'=>$this->input->post('cmptype'),
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('cn')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->alliances_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/alliances');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/alliances');
		 }
}
public function singleimage_alliances()
{
	 $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/alliances/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->alliances_singleimage($id,$img1,$img_row,$img);
	  if($res){
		  $mess = "Image Updated Successfully!";
		  $this->session->set_userdata('msg',$mess);
		  redirect('Admin/alliances');
	  }
	  else{
		  $mess = "Error Please Try Again";
		  $this->session->set_userdata('msg',$mess);
		  redirect('Admin/alliances');
	  }
}

public function update_package()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/package/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		
      $newFileName1="";
      $img_nm1=$now->getTimestamp();  
      $newFileName1 = $_FILES['upload1']['name'];
      
      $fileExt11 = explode(".",$newFileName1);
      $str1=array_pop($fileExt11);
      $fileExt2=strtolower($str1);
      
      $img1="" ;
      $config1['upload_path'] = './data/uploads/brochure/';      
      $config1['overwrite'] = true;
      $config1['file_name'] = $img_nm1.".".$fileExt2;
      $config1['allowed_types'] = '*';

      $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img1=$img_nm1.".".$fileExt2;          
      }
		
		$name=$this->input->post('title');
		$data=array(
		'name'=>$this->input->post('title'),
		'price'=>$this->input->post('price'),
		'discount'=>$this->input->post('discount'),
		'package_type'=>$this->input->post('package_type'),
		'sp'=>$this->input->post('sp'),
		'pdesc'=>$this->input->post('pdisc')
		);
		if($img!="" && $img1!=""){
		$data['image']=$img;
		$data['brochure']=$img1;
		}
		else if($img=="" && $img1!=""){
		$data['brochure']=$img1;
		}
		else if($img!="" && $img1==""){
		$data['image']=$img;
		}
		else if($img=="" && $img1==""){		}
		
		$data1=array(
		'testcategory'=>$this->input->post('testcategory'),
		'testname'=>$this->input->post('testname')
		);
		
		$this->load->Model('Update_mod');
		$bid = $this->input->post('bid');
		$cid = $this->input->post('cid');
		$res = $this->Update_mod->update_category($data,$name,$data1,$bid,$cid);
		if($res)
		{
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/packegecategory');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/packegecategory');
		}
}
public function update_hospitals()
{
	ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			 $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('hospitals'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'url'=>$this->input->post('urll'),
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'url'=>$this->input->post('urll'),
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->hospitals_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/centerofexcellence');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/centerofexcellence');
		 }
}
public function singleimage_hospitals()
{
	$now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/hospitals/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->hospitals_singleimage($id,$img1,$img_row,$img);
	  if($res){
		  $mess = "Image Updated Successfully!";
		  $this->session->set_userdata('msg',$mess);
		  redirect('Admin/centerofexcellence');
	  }
	  else{
		  $mess = "Error Please Try Again";
		  $this->session->set_userdata('msg',$mess);
		  redirect('Admin/centerofexcellence');
	  }
}
public function update_gallery()
{
	$data=array(
	'title'=>$this->input->post('title'),
	'category'=>$this->input->post('category'),
	'dept_id'=>$this->input->post('sub_mnu1')
	);
	$this->load->Model('Update_mod');
	$id = $this->input->post('bid');
	$res = $this->Update_mod->gallery_update($data,$id);
	 if($res){
		  $mess = "Updated Successfully!";
		  $this->session->set_userdata('msg',$mess);
		  redirect('Admin/imagegallery');
	  }
	  else{
		  $mess = "Error Please Try Again";
		  $this->session->set_userdata('msg',$mess);
		  redirect('Admin/imagegallery');
	  }
		
}
public function singleimage_gallery()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/gallery/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->gallery_singleimage($id,$img);
	  if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/imagegallery');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/imagegallery');
		}
}
public function update_news()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			$now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('news'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		// $date = date('Y-m-d');
		 $date=$this->input->post('datepicker');
		 if($img!=""){
			 $data=array(
			 'insert_date'=>date('Y-m-d', strtotime($date)),
			 'album_id'=>$this->input->post('album_title'),
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
		 'insert_date'=>date('Y-m-d', strtotime($date)),
		 'album_id'=>$this->input->post('album_title'),
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $albumid=$this->input->post('album_title');
		 $id = $this->input->post('bid');
		
		 $res = $this->Update_mod->news_update($data,$id,$albumid);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/newsevents');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/newsevents');
		 }
}
public function singleimage_news()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/news/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->news_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/newsevents');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/newsevents');
		}
}
public function update_contacts()
{
	$data=array(
	'telephone'=>$this->input->post('telephone'),
	'fax'=>$this->input->post('fax'),
	'email'=>$this->input->post('email'),
	'urll'=>$this->input->post('url'),
	'address'=>$this->input->post('pdisc'),
	'status'=>'Show'
	);
	
	$this->load->Model('Update_mod');
	$id = $this->input->post('bid');
	$res=$this->Update_mod->contacts_update($data,$id);
	if($res)
	{
		$mess = "Updated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/contactus');
	}
	else{
		$mess="Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/contactus');
	}
}
public function update_responsibility()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			$now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('patient'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->responsibility_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/patientresponsibility');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patientresponsibility');
		 }
}
public function singleimage_responsibility()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/patient/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->responsibility_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patientresponsibility');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patientresponsibility');
		}
}


public function singleimage_education()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/patient/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->education_singleimage($id,$img1,$img_row,$img);
	  if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patienteducation');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patienteducation');
		}
}
public function update_academics()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {  
	         $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('academics'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		$img = implode(",",$org);
		$this->load->Model('Update_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			$this->load->Model('insert_mod');
			$id = $this->insert_mod->insert_atype($data);
			
			if($img!=""){
				$data1 = array(
				'a_id'=>$id,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc'),
			    'urll'=>$this->input->post('url')
				);
			}
			else{
				$data1 = array(
				'a_id'=>$id,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc'),
			    'urll'=>$this->input->post('url')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->academics_update($data1,$bid);
			if($res){
			$mess = "UPdated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/academics');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/academics');
		}
		}
		else
		{
			if($img!=""){
				$data1 = array(
				'a_id'=>$choose,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc'),
			    'urll'=>$this->input->post('url')
				);
			}
			else{
				$data1 = array(
				'a_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc'),
			    'urll'=>$this->input->post('url')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->academics_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/academics');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/academics');
		}
		}
}
public function singleimage_academics()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/academics/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->academics_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/academics');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/academics');
		}
}
// public function update_diagnostics()
// {
// 		  ini_set('post_max_size', '64M');
// 		  ini_set('upload_max_filesize', '64M');
// 		  $files = $_FILES;
// 		   //$fdata=$this->globaldata['userdata'];
// 		  $b=array();
// 		  $org=array();
// 		  $cpt = count($_FILES['upload']['name']);
// 		  for($i=0; $i<$cpt; $i++)
// 		  {  
// 	         $now = new DateTime();
// 			 $newFileName="";
// 			 $img_nm=$now->getTimestamp();  
// 			 $newFileName = $files['upload']['name'][$i];
			  
// 			 $fileExt1 = explode(".",$newFileName);
// 			 $str=array_pop($fileExt1);
// 			 $fileExt=strtolower($str);
// 			 $imgg = $img_nm.".".$fileExt;
// 			  $_FILES['upload']['name']= $imgg;
// 			  $_FILES['upload']['type']= $files['upload']['type'][$i];
// 			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
// 			  $_FILES['upload']['error']= $files['upload']['error'][$i];
// 			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

// 			  $this->load->library('upload');
// 			  $this->upload->initialize($this->set_upload_options('diagnostics'));
// 			  if($this->upload->do_upload('upload'))
// 			  {
// 				 $b[$i]=$this->upload->data();
// 			  }  
// 			  $data= $this->upload->data();

// 		  }
         
// 		 foreach($b as $dt)
// 		 {
// 			$org[]=$dt['file_name']; 
// 		 }
// 		$img = implode(",",$org);
// 		$this->load->Model('Update_mod');
// 		$choose=$this->input->post('med_type');
// 		$type=$this->input->post('type');
// 		if($choose=="" && $type!="")
// 		{
// 			$data=array(
// 			'name'=>$type,
// 			'status'=>'Show'
// 			);
// 			$this->load->Model('insert_mod');
// 			$id = $this->insert_mod->insert_dtype($data);
			
// 			if($img!=""){
// 				$data1 = array(
// 				'd_id'=>$id,
// 				'title'=>$this->input->post('title'),
// 				'image'=>$img,
// 				'pdesc'=>$this->input->post('pdisc')
// 				);
// 			}
// 			else{
// 				$data1 = array(
// 				'd_id'=>$id,
// 				'title'=>$this->input->post('title'),
// 				'pdesc'=>$this->input->post('pdisc')
// 				);
// 			}
// 			$bid=$this->input->post('bid');
// 			$res = $this->Update_mod->diagnostics_update($data1,$bid);
// 			if($res){
// 			$mess = "UPdated Successfully!";
// 			$this->session->set_userdata('msg',$mess);
// 			redirect('Admin/diagnostics');
// 		}
// 		else{
// 			$mess = "Error Please Try Again!";
// 			$this->session->set_userdata('msg',$mess);
// 			redirect('Admin/diagnostics');
// 		}
// 		}
// 		else
// 		{
// 			if($img!=""){
// 				$data1 = array(
// 				'd_id'=>$choose,
// 				'title'=>$this->input->post('title'),
// 				'image'=>$img,
// 				'pdesc'=>$this->input->post('pdisc')
// 				);
// 			}
// 			else{
// 				$data1 = array(
// 				'd_id'=>$choose,
// 				'title'=>$this->input->post('title'),
// 				'pdesc'=>$this->input->post('pdisc')
// 				);
// 			}
// 			$bid=$this->input->post('bid');
// 			$res = $this->Update_mod->diagnostics_update($data1,$bid);
// 			if($res){
// 			$mess = "Updated Successfully!";
// 			$this->session->set_userdata('msg',$mess);
// 			redirect('Admin/diagnostics');
// 		}
// 		else{
// 			$mess = "Error Please Try Again!";
// 			$this->session->set_userdata('msg',$mess);
// 			redirect('Admin/diagnostics');
// 		}
// 		}
// }
// public function singleimage_diagnostics()
// {
// 	  $now = new DateTime();
//       $newFileName="";
//       $img_nm=$now->getTimestamp();  
//       $newFileName = $_FILES['upload1']['name'];
      
//       $fileExt1 = explode(".",$newFileName);
//       $str=array_pop($fileExt1);
//       $fileExt=strtolower($str);
      
//       $img="" ;
//       $config['upload_path'] = './data/uploads/diagnostics/';      
//       $config['overwrite'] = true;
//       $config['file_name'] = $img_nm.".".$fileExt;
//       $config['allowed_types'] = '*';

//       $this->load->library('upload', $config);
//       if ( ! $this->upload->do_upload('upload1'))
//       {
//           $error = array('error' => $this->upload->display_errors());       
//       }
//       else
//       {
//           $imgdata = array('upload_data' => $this->upload->data());
//           $img=$img_nm.".".$fileExt;          
//       }
// 	  $id=$this->input->post('idd');
// 	  $img1=$this->input->post('imm');
// 	  $img_row=$this->input->post('imr');
// 	  $this->load->Model('Update_mod');
// 	  $res = $this->Update_mod->diagnostics_singleimage($id,$img1,$img_row,$img);
// 	   if($res){
// 			$mess = "Image Updated Successfully!";
// 			$this->session->set_userdata('msg',$mess);
// 			redirect('Admin/diagnostics');
// 		}
// 		else{
// 			$mess = "Error Please Try Again!";
// 			$this->session->set_userdata('msg',$mess);
// 			redirect('Admin/diagnostics');
// 		}
// }
public function update_infra()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {  
	         $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('infrastructure'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		$img = implode(",",$org);
		$this->load->Model('Update_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			$this->load->Model('insert_mod');
			$id = $this->insert_mod->insert_itype($data);
			
			if($img!=""){
				$data1 = array(
				'in_id'=>$id,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				'in_id'=>$id,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->infra_update($data1,$bid);
			if($res){
			$mess = "UPdated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/infrastructure');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/infrastructure');
		}
		}
		else
		{
			if($img!=""){
				$data1 = array(
				'in_id'=>$choose,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				'in_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->infra_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/infrastructure');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/infrastructure');
		}
		}
}
public function singleimage_infra()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/infrastructure/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->infra_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/infrastructure');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/infrastructure');
		}
}
public function update_speciality()
{
		  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/speciality/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		//print_r($img); die();
		$this->load->Model('Update_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			$this->load->Model('insert_mod');
			$id = $this->insert_mod->insert_stype($data);
			
			if($img!=""){
				$data1 = array(
				's_id'=>$id,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				's_id'=>$id,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->speciality_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/speciality');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/speciality');
		}
		}
		else
		{
			if($img!=""){
				$data1 = array(
				's_id'=>$choose,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				's_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->speciality_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/speciality');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/speciality');
		}
		}
}
public function singleimage_speciality()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/speciality/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->speciality_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = " Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/speciality');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/speciality');
		}
}
public function update_technology()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {  
	         $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('technology'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		$img = implode(",",$org);
		$this->load->Model('Update_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			$this->load->Model('insert_mod');
			$id = $this->insert_mod->insert_ttype($data);
			
			if($img!=""){
				$data1 = array(
				't_id'=>$id,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				't_id'=>$id,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->technology_update($data1,$bid);
			if($res){
			$mess = "UPdated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/technology');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/technology');
		}
		}
		else
		{
			if($img!=""){
				$data1 = array(
				't_id'=>$choose,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				't_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->technology_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/technology');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/technology');
		}
		}
}
public function singleimage_technology()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/technology/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->technology_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/technology');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/technology');
		}
}

public function update_banner()
{
	$now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
        
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
    
      $img="" ;
      $config['upload_path'] = './data/uploads/banner/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';
	  
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());   
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	if($img!=""){
	$data = array(
		'image'=>$img,
		'cap1'=>$this->input->post('cap1'),
		'cap2'=>$this->input->post('cap2'),
		'cap3'=>$this->input->post('cap3'),
		'imgtitle'=>$this->input->post('imgTitle')
	);
	}
	else
	{
		$data = array(
		'cap1'=>$this->input->post('cap1'),
		'cap2'=>$this->input->post('cap2'),
		'cap3'=>$this->input->post('cap3'),
		'imgtitle'=>$this->input->post('imgTitle')
	);
	}
	$this->load->Model('Update_mod');
	$id = $this->input->post('bid');
	$res = $this->Update_mod->banner_update($data,$id);
	if($res){
		$mess = "Updated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/banner');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/banner');
	}
}
public function update_vission()
{
	$data = array(
	'type'=>$this->input->post('type'),
	'title'=>$this->input->post('title'),
	'pdesc'=>$this->input->post('pdisc')
	);
	$this->load->Model('Update_mod');
	$id = $this->input->post('bid');
	$res = $this->Update_mod->vission_update($data,$id);
	if($res){
		$mess = "UPdated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission_vission');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission_vission');
	}
}
public function update_career()
{
	$date = date('Y-m-d');
	$data = array(
	'posted_date'=>$date,
	'closing_date'=>$this->input->post('cl_date'),
	'type'=>$this->input->post('type'),
	'title'=>$this->input->post('title'),
	'designation'=>$this->input->post('designation'),
	'experience'=>$this->input->post('experience'),
	'qualification'=>$this->input->post('qualification'),
	'pdesc'=>$this->input->post('pdisc')
	);
	$this->load->Model('Update_mod');
	$id = $this->input->post('bid');
	$res = $this->Update_mod->career_update($data,$id);
	if($res){
		$mess = "Updated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/career');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/career');
	}
}
public function update_department()
{ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			 $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('department'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
	$this->load->Model('Update_mod');
	$choose = $this->input->post('title');
	$name = $this->input->post('input');
	//print_r($choose); die();
	if($img!="")
	{
	$data = array(
	'name'=>$name,
	'sequence'=>$this->input->post('seq'),
	'pdesc'=>$this->input->post('pdisc'),
	'image'=>$img
	);
	}
	else{
	$data = array(
	'name'=>$name,
	'sequence'=>$this->input->post('seq'),
	'pdesc'=>$this->input->post('pdisc')
	);
	}
	$res = $this->Update_mod->departmentinfo_update($data,$choose);
	if($res){
		$mess = "Updated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
}
public function update_mailconfig()
{
	$data = array(
	'mail'=>$this->input->post('mail'),
	'password'=>$this->input->post('password'),
	'status'=>'Not Active'
	);
	$this->load->Model('Update_mod');
	$id = $this->input->post('bid');
	$res = $this->Update_mod->mailconfig_update($data,$id);
	if($res){
		$mess = "Updated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mail_config');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mail_config');
	}
}
public function update_opdschedule()
{
	$days = $this->input->post('dy');
	$from=$this->input->post('ft');
	$to=$this->input->post('tt');
	//print_r($to); die("FS");	
	$pid=$this->input->post('pid');
	$data=array(
	'dr_id'=>$this->input->post('name'),
	'speciality'=>$this->input->post('designation')	
	);
	$this->load->Model('Update_mod');
	$id=$this->input->post('bid');
	$res = $this->Update_mod->opdschedule_update($data,$days,$from,$to,$pid,$id);
	if($res){
		$mess = "Updated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/opd');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/opd');
	}
}
public function update_about1()
{
	 $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/aboutus/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->about1_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/aboutus');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/aboutus');
		 }
}
public function update_charity()
{
		  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/charity/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->charity_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/charity');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/charity');
		 }
}
public function update_highlights()
{
		  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/highlights/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->highlights_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/highlights');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/highlights');
		 }
}
public function update_aboutacade()
{
	$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->aboutacade_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/academicsdesc');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/academicsdesc');
		 }
}
public function update_library()
{
	ini_set('post_max_size', '64M');
	  ini_set('upload_max_filesize', '64M');
	  $files = $_FILES;
	   //$fdata=$this->globaldata['userdata'];
	  $b=array();
	  $org=array();
	  $cpt = count($_FILES['upload']['name']);
	  for($i=0; $i<$cpt; $i++)
	  {
		 $now = new DateTime();
		 $newFileName="";
		 $img_nm=$now->getTimestamp();  
		 $newFileName = $files['upload']['name'][$i];
		  
		 $fileExt1 = explode(".",$newFileName);
		 $str=array_pop($fileExt1);
		 $fileExt=strtolower($str);
		 $imgg = $img_nm.".".$fileExt;
		  $_FILES['upload']['name']= $imgg;
		  $_FILES['upload']['type']= $files['upload']['type'][$i];
		  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
		  $_FILES['upload']['error']= $files['upload']['error'][$i];
		  $_FILES['upload']['size']= $files['upload']['size'][$i];    

		  $this->load->library('upload');
		  $this->upload->initialize($this->set_upload_options('library'));
		  if($this->upload->do_upload('upload'))
		  {
			 $b[$i]=$this->upload->data();
		  }  
		  $data= $this->upload->data();

	  }
	 
	 foreach($b as $dt)
	 {
		$org[]=$dt['file_name']; 
	 }
	$img = implode(",",$org);
	if($img!="")
	{
		$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc'),
			'image'=>$img
			);
	}
	else
	{
		$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
	}
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->library_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/library');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/library');
		 }
}
public function update_director()
{
	$data=array(
		'title'=>$this->input->post('title'),
		'pdesc'=>$this->input->post('pdisc')
		);
	 $this->load->Model('Update_mod');
	 $id = $this->input->post('bid');
	 $res = $this->Update_mod->director_update($data,$id);
	 if($res){
		 $mess = "Updated Successfully!";
		 $this->session->set_userdata('msg',$mess);
		 redirect('Admin/director');
	 }
	 else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/director');
	 }
}
public function update_sv()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/sadhuvaswani/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->sv_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/SadhuVaswani');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/SadhuVaswani');
		 }
}
public function update_rev()
{
	$now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/dada/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
			 
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 //print_r($data); die("SDSD");
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->rev_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/RevDada');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/RevDada');
		 }
}
public function update_vaswanimission()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/vaswanimission/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->vaswanimission_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/SadhuVaswaniMission');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/SadhuVaswaniMission');
		 }
}

public function update_inlaks()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/inlaks/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->inlaks_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/Inlaks');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/Inlaks');
		 }
}

public function update_cancer()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/cancer/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
		$this->upload->initialize($config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
		 if($img!=""){
			 $data=array(
			 'title'=>$this->input->post('title'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->cancer_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/Cancer');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/Cancer');
		 }
}
public function singleimage_department()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/department/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->department_singleimage($id,$img1,$img_row,$img);
	  if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/department');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/department');
		}
}
public function singleimage_library()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/library/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->singleimage_ulibrary($id,$img1,$img_row,$img);
		 if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/library');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/library');
		}
}
public function update_team()
{
	$now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload']['name'];
        
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
    
      $img="" ;
      $config['upload_path'] = './data/uploads/TechnicalTeam/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';
	  
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload'))
      {
          $error = array('error' => $this->upload->display_errors());   
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	if($img!=""){
		$data = array(
			'image'=>$img,
			'name'=>$this->input->post('name'),
			'designation'=>$this->input->post('designation'),
			'department'=>$this->input->post('department'),
			'qualification'=>$this->input->post('qualification'),
			'pdesc'=>$this->input->post('pdisc')
		);
	}
	else{
		$data = array(
			'name'=>$this->input->post('name'),
			'designation'=>$this->input->post('designation'),
			'department'=>$this->input->post('department'),
			'qualification'=>$this->input->post('qualification'),
			'pdesc'=>$this->input->post('pdisc')
		);
	}
	$this->load->Model('Update_mod');
	$id = $this->input->post('bid');
	$res = $this->Update_mod->team_update($data,$id);
	if($res){
		$mess = "Updated Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Technical_Team');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Technical_Team');
	}
}

public function singleimage_inlaks()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/inlaks/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->inlaks_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/Inlaks');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/Inlaks');
		}
}
public function update_founder()
	{
		$now = new DateTime();
		$newFileName="";
		$img_nm=$now->getTimestamp();  
		$newFileName = $_FILES['upload']['name'];
		  
		$fileExt1 = explode(".",$newFileName);
		$str=array_pop($fileExt1);
		$fileExt=strtolower($str);
		  
		$img="" ;
		$config['upload_path'] = './data/uploads/founder/';      
		$config['overwrite'] = true;
		$config['file_name'] = $img_nm.".".$fileExt;
		$config['allowed_types'] = '*';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('upload'))
		{
			$error = array('error' => $this->upload->display_errors());       
		}
		else
		{
			$imgdata = array('upload_data' => $this->upload->data());
			$img=$img_nm.".".$fileExt;          
		}
		if($img!=""){
			$data=array(
				'name'=>$this->input->post('name'),
				'designation'=>$this->input->post('designation'),
				// 'facebook'=>$this->input->post('facebook'),
				// 'twitter'=>$this->input->post('twitter'),
				'pdesc'=>$this->input->post('pdisc'),
				'image'=>$img,
				'status'=>'Show'
			);
		}
		else{
			$data=array(
				'name'=>$this->input->post('name'),
				'designation'=>$this->input->post('designation'),
				// 'facebook'=>$this->input->post('facebook'),
				// 'twitter'=>$this->input->post('twitter'),
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
			);
		}
		$this->load->Model('Update_mod');
		$id = $this->input->post('bid');
		$res = $this->Update_mod->founder_update($data,$id);
		if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('cms/founder');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('cms/founder');
		}
	}
	public function update_camp()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			$now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('camp'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		// $date = date('Y-m-d');
		 $date=$this->input->post('datepicker');
		 if($img!=""){
			 $data=array(
			 'insert_date'=>date('Y-m-d', strtotime($date)),
			 'name'=>$this->input->post('name'),
			 'title'=>$this->input->post('title'),
			 'total'=>$this->input->post('total'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
    		 'insert_date'=>date('Y-m-d', strtotime($date)),
    		 'name'=>$this->input->post('name'),
			'title'=>$this->input->post('title'),
			'total'=>$this->input->post('total'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
// 		 $albumid=$this->input->post('album_title');
		 $id = $this->input->post('bid');
		
		 $res = $this->Update_mod->camp_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/camp');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp');
		 }
}
public function update_diagnostics()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		  //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {  
	         $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('diagnostics'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		$img = implode(",",$org);
		$this->load->Model('Update_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			$this->load->Model('insert_mod');
			$id = $this->insert_mod->insert_dtype($data);
			
			if($img!=""){
				$data1 = array(
				'd_id'=>$id,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				'd_id'=>$id,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->diagnostics_update($data1,$bid);
			if($res){
			$mess = "UPdated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/diagnostics');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/diagnostics');
		}
		}
		else
		{
			if($img!=""){
				$data1 = array(
				'd_id'=>$choose,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				'd_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->diagnostics_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/diagnostics');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/diagnostics');
		}
		}
}
public function singleimage_diagnostics()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/diagnostics/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';
print_r($config);
die;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->diagnostics_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/diagnostics');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/diagnostics');
		}
}

public function update_patienteducation()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			$now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('patient'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'name'=>$this->input->post('name'),
			 'pdesc'=>$this->input->post('pdisc'),
			 'image'=>$img
			 );
		 }
		 else{
			$data=array(
			'name'=>$this->input->post('name'),
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->patienteducation_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/patienteducation');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patienteducation');
		 }
}

public function update_announcement()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {
			$now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('.......'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		 $img = implode(",",$org);
		 if($img!=""){
			 $data=array(
			 'pdesc'=>$this->input->post('pdisc'),
			 );
		 }
		 else{
			$data=array(		
			'pdesc'=>$this->input->post('pdisc')
			);
		 }
		 $this->load->Model('Update_mod');
		 $id = $this->input->post('bid');
		 $res = $this->Update_mod->announcement_update($data,$id);
		 if($res){
			 $mess = "Updated Successfully!";
			 $this->session->set_userdata('msg',$mess);
			 redirect('Admin/announcement');
		 }
		 else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/announcement');
		 }
}
public function update_cashlessfacility()
	{
		$now = new DateTime();
		$newFileName="";
		$img_nm=$now->getTimestamp();  
		$newFileName = $_FILES['upload']['name'];
		  
		$fileExt1 = explode(".",$newFileName);
		$str=array_pop($fileExt1);
		$fileExt=strtolower($str);
		  
		$img="" ;
		$config['upload_path'] = './data/uploads/TPA/';      
		$config['overwrite'] = true;
		$config['file_name'] = $img_nm.".".$fileExt;
		$config['allowed_types'] = '*';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('upload'))
		{
			$error = array('error' => $this->upload->display_errors());       
		}
		else
		{
			$imgdata = array('upload_data' => $this->upload->data());
			$img=$img_nm.".".$fileExt;          
		}
		if($img!=""){
			$data=array(
				'title'=>$this->input->post('title'),
				// 'designation'=>$this->input->post('designation'),
				// 'facebook'=>$this->input->post('facebook'),
				// 'twitter'=>$this->input->post('twitter'),
				// 'pdesc'=>$this->input->post('pdisc'),
				'image'=>$img,
				'status'=>'Show'
			);
		}
		else{
			$data=array(
				'title'=>$this->input->post('title'),
				// 'designation'=>$this->input->post('designation'),
				// 'facebook'=>$this->input->post('facebook'),
				// 'twitter'=>$this->input->post('twitter'),
				// 'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
			);
		}
		$this->load->Model('Update_mod');
		$id = $this->input->post('bid');
		$res = $this->Update_mod->cashlessfacility_update($data,$id);
		if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/cashless_facility');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/cashless_facility');
		}
	}
	
		public function update_testimonial()
	{
		$now = new DateTime();
		$newFileName="";
		$img_nm=$now->getTimestamp();  
		$newFileName = $_FILES['upload']['name'];
		  
		$fileExt1 = explode(".",$newFileName);
		$str=array_pop($fileExt1);
		$fileExt=strtolower($str);
		  
		$img="" ;
		$config['upload_path'] = './data/uploads/testimonial/';      
		$config['overwrite'] = true;
		$config['file_name'] = $img_nm.".".$fileExt;
		$config['allowed_types'] = '*';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('upload'))
		{
			$error = array('error' => $this->upload->display_errors());       
		}
		else
		{
			$imgdata = array('upload_data' => $this->upload->data());
			$img=$img_nm.".".$fileExt;          
		}
		if($img!=""){
			$data=array(
				'name'=>$this->input->post('name'),
				'designation'=>$this->input->post('designation'),
				'pdesc'=>$this->input->post('pdisc'),
				'image'=>$img,
				'status'=>'Show'
			);
		}
		else{
			$data=array(
				'name'=>$this->input->post('name'),
				'designation'=>$this->input->post('designation'),
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
			);
		}
		$this->load->Model('Update_mod');
		$id = $this->input->post('bid');
		$res = $this->Update_mod->testimonial_update($data,$id);
		if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/testimonial');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/testimonial');
		}
	}
   public function update_campdata()
{
		  ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		  //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {  
	         $now = new DateTime();
			 $newFileName="";
			 $img_nm=$now->getTimestamp();  
			 $newFileName = $files['upload']['name'][$i];
			  
			 $fileExt1 = explode(".",$newFileName);
			 $str=array_pop($fileExt1);
			 $fileExt=strtolower($str);
			 $imgg = $img_nm.".".$fileExt;
			  $_FILES['upload']['name']= $imgg;
			  $_FILES['upload']['type']= $files['upload']['type'][$i];
			  $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
			  $_FILES['upload']['error']= $files['upload']['error'][$i];
			  $_FILES['upload']['size']= $files['upload']['size'][$i];    

			  $this->load->library('upload');
			  $this->upload->initialize($this->set_upload_options('campdata'));
			  if($this->upload->do_upload('upload'))
			  {
				 $b[$i]=$this->upload->data();
			  }  
			  $data= $this->upload->data();

		  }
         
		 foreach($b as $dt)
		 {
			$org[]=$dt['file_name']; 
		 }
		$img = implode(",",$org);
		$this->load->Model('Update_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			$this->load->Model('insert_mod');
			$id = $this->insert_mod->insert_ctype($data);
			
			if($img!=""){
				$data1 = array(
				'd_id'=>$id,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				'd_id'=>$id,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->campdata_update($data1,$bid);
			if($res){
			$mess = "UPdated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp_data');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp_data');
		}
		}
		else
		{
			if($img!=""){
				$data1 = array(
				'd_id'=>$choose,
				'title'=>$this->input->post('title'),
				'image'=>$img,
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			else{
				$data1 = array(
				'd_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$bid=$this->input->post('bid');
			$res = $this->Update_mod->campdata_update($data1,$bid);
			if($res){
			$mess = "Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp_data');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp_data');
		}
		}
}
public function singleimage_campdata()
{
	  $now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload1']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/campdata/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';
// print_r($config);
// die;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload1'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  $id=$this->input->post('idd');
	  $img1=$this->input->post('imm');
	  $img_row=$this->input->post('imr');
	  $this->load->Model('Update_mod');
	  $res = $this->Update_mod->camp_singleimage($id,$img1,$img_row,$img);
	   if($res){
			$mess = "Image Updated Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp_data');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp_data');
		}
}
	
}