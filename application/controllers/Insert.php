<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {
// public function test(){
//      $this->load->view('PHPMailerAutoload');
// 	 $mmail="enquiry@mavericksoftware.in";
// 	 $pass="enquiry@1234";
	
// 	try{
//              $mail = new PHPMailer;
//              $mail->isSMTP();                                      // Set mailer to use SMTP
//              $mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
//              $mail->SMTPAuth = true;                               // Enable SMTP authentication
//              $mail->Username = $mmail;                   // SMTP username
//              $mail->Password = $pass;               // SMTP password
//              $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
//              $mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
//              $mail->setFrom('mktinlaks@gmail.com', 'Inlaks Budhrani');     //Set who the message is to be sent from
//              $mail->addAddress('mktinlaks@gmail.com');  // Add a recipient
          
//              $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//              $mail->isHTML(true);                                  // Set email format to HTML
          
//              $mail->Subject = "Website Enquiry";
//              $mail->Body    = "website enquiry";
//              if(!$mail->send()) {
//               echo "faild";
//              }
//              else
//              {
//                  echo "success";
//              }
//       }
//       catch(Exception $e){
//          print_r($e);
//       }
	
// }
public function insert_about1()
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
			//   $this->upload->initialize($this->set_upload_options('about'));
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
		$data=array(
		'title'=>$this->input->post('title'),
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img,
		'status'=>'Show'
		);
		$this->load->Model("Insert_mod");
		$res = $this->Insert_mod->about_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/index');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/index');
		}
}

public function insert_vission()
{
	$data = array(
	'type'=>$this->input->post('type'),
	'title'=>$this->input->post('title'),
	'pdesc'=>$this->input->post('pdisc'),
	'status'=>'Show'
	);
	$this->load->Model('Insert_mod');
	$res = $this->Insert_mod->vission_insert($data);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission_vission');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mission_vission');
	}
}
public function insert_banner()
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
				// 'name'=>$this->input->post('name'),
				// 'designation'=>$this->input->post('designation'),
				// 'facebook'=>$this->input->post('facebook'),
				// 'twitter'=>$this->input->post('twitter'),
				// 'pdesc'=>$this->input->post('pdisc'),
				// 'image'=>$img,
				// 'status'=>'Show'
				'image'=>$img,
		        'cap1'=>$this->input->post('cap1'),
		        'cap2'=>$this->input->post('cap2'),
		        'cap3'=>$this->input->post('cap3'),
		        'imgtitle'=>$this->input->post('imgTitle')
			    // 'status'=>'Show'
			);
		}
		else
		{
			$data=array(
				'cap1'=>$this->input->post('cap1'),
				'cap2'=>$this->input->post('cap2'),
				'cap3'=>$this->input->post('cap3'),
				'imgtitle'=>$this->input->post('imgTitle')
				// 'status'=>'Show'
	);	
		}
		$this->load->Model("Insert_mod");
		$res = $this->Insert_mod->banner_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/banner');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/banner');
		}
}
public function insert_medicalfacility()
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
			//   $this->upload->initialize($this->set_upload_options('medical'));
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
		$this->load->Model('Insert_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'type'=>$type
			);
			
			$id = $this->Insert_mod->insert_type($data,$type);
			
			$data1 = array(
			'type_id'=>$id,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc'),
			'status'=>'Show'
			);
			$res = $this->Insert_mod->medicalfacility_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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
			$data1 = array(
			'type_id'=>$choose,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc'),
			'status'=>'Show'
			);
			$res = $this->Insert_mod->medicalfacility_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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

// public function insert_diagnostics()
// {
// 	      ini_set('post_max_size', '64M');
// 		  ini_set('upload_max_filesize', '64M');
// 		  $files = $_FILES;
// 		   //$fdata=$this->globaldata['userdata'];
// 		  $b=array();
// 		  $org=array();
// 		  $cpt = count($_FILES['upload']['name']);
// 		  for($i=0; $i<$cpt; $i++)
// 		  {
// 			  $now = new DateTime();
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
// 		$this->load->Model('Insert_mod');
// 		$choose=$this->input->post('med_type');
// 		$type=$this->input->post('type');
// 		if($choose=="" && $type!="")
// 		{
// 			$data=array(
// 			'name'=>$type,
// 			'status'=>'Show'
// 			);
			
// 			$id = $this->Insert_mod->insert_dtype($data ,$type);
			
// 			$data1 = array(
// 			'd_id'=>$id,
// 			'title'=>$this->input->post('title'),
// 			'image'=>$img,
// 			'pdesc'=>$this->input->post('pdisc')
// 			);
// 			$res = $this->Insert_mod->diagnostics_insert($data1);
// 			if($res){
// 			$mess = "Inserted Successfully!";
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
// 			$data1 = array(
// 			'd_id'=>$choose,
// 			'title'=>$this->input->post('title'),
// 			'image'=>$img,
// 			'pdesc'=>$this->input->post('pdisc')
// 			);
// 			$res = $this->Insert_mod->diagnostics_insert($data1);
// 			if($res){
// 			$mess = "Inserted Successfully!";
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
public function insert_department1()
{
	ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {$now = new DateTime();
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
	$this->load->Model('Insert_mod');
	$choose = $this->input->post('title');
	$add = $this->input->post('depid');
	if($choose=="" && $add!="")
	{
		if($img!="")
		{
		$data = array(
		'dept_id'=>$this->input->post('depid'),
		'name'=>$this->input->post('type'),
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img
		);
		}
		else{
		$data = array(
		'dept_id'=>$this->input->post('depid'),
		'name'=>$this->input->post('type'),
		'pdesc'=>$this->input->post('pdisc')
		);
		}
		$res1 = $this->Insert_mod->department_insert($data,$add);
		$res = $this->input->post('depid');
	}
	else
	{
		if($img!="")
		{
		$data = array(
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img
		);
		}
		else{
		$data = array(
		'pdesc'=>$this->input->post('pdisc')
		);
		}
		$res1 = $this->Insert_mod->department_insert($data,$choose);
		$res = $choose;
	}
	$data1=array(
	'name'=>$this->input->post('head')
	);
	$res1 = $this->Insert_mod->insert_hod($data1,$res);
	$data2 = array(
	'dept_id'=>$res
	);
	$dr = $this->input->post('dr');
	$dt = $this->Insert_mod->insert_doctor($data2,$dr);
	if($dt){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
}
public function insert_department()
{
	ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {$now = new DateTime();
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
			//   $this->upload->initialize($this->set_upload_options('department'));
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
	$this->load->Model('Insert_mod');
	$choose = $this->input->post('title');
	$add = $this->input->post('type');
	if($choose=="" && $add!="")
	{
		if($img!="")
		{
		$data = array(
		'name'=>$this->input->post('type'),
		'sequence'=>$this->input->post('seq'),
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img
		);
		}
		else{
		$data = array(
		'name'=>$this->input->post('type'),
		'pdesc'=>$this->input->post('pdisc')
		);
		}
		$res = $this->Insert_mod->department_insert($data,$add);
	}
	else
	{
		if($img!="")
		{
		$data = array(
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img
		);
		}
		else{
		$data = array(
		'pdesc'=>$this->input->post('pdisc')
		);
		}
		$res = $this->Insert_mod->department_insert($data,$choose);
	}
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/department');
	}
}
public function insert_enquiry()
{
     $date = date('Y-m-d');
     $this->load->view('PHPMailerAutoload');
 	 $mmail="enquiry@mavericksoftware.in";
 	 $pass="enquiry@1234";
	 
	$data = array(
	'name'=>$this->input->post('name'),
	'email'=>$this->input->post('email'),
	'mobile'=>$this->input->post('mobile'),
	'subject'=>$this->input->post('subject'),
	'pdesc'=>$this->input->post('message'),
	'site'=>$this->input->post('site'),
	'status'=>'unread',
	'entry_dt'=>$date
	);
	$name=$this->input->post('name');
    $email=$this->input->post('email');
    $message=$this->input->post('message');
    $mobile=$this->input->post('mobile');
	$this->load->Model('Insert_mod');
	$res = $this->Insert_mod->enquiry_insert($data);
 $op="";
	$op.="<body style='font-family: Poppins, sans-serif;padding:20px;background: #f1f1f1;'>";
	$op.="<div style='background-color:#000000;width:80%;max-width:600px;margin-left:auto;margin-right:auto;'>";
	$op.="<div style='background-color:#ffffff;padding:50px;'>";
	$op.="<header style='text-align:center;'>";
	$op.="<img src='https://www.sanjeevanimamtahospital.com/front/images/sanjeevani-logo.jpg' style='width:250px'/>";
	$op.="<h1>Enquiry </h1>";
	$op.="</header>";
	$op.="<hr style='height:5px;background-color: #EA5C1F;border-color: #EA5C1F;'>";
	$op.="<div>";
	$op.="<div style='padding:20px 0 50px 0;'>";
	$op.="<section>";
	$op.="<h3 style='color:#EA5C1F;'>Hello, you have a new enquiry submission from Sanjeevani Mamta Hospital & Research Centre Website</h3>";
	$op.="</section>";
	$op.="<section style='text-align:left;margin-top:50px;'>";
	$op.="<table style='text-align:left;margin-top:50px;'>";
	$op.="<tbody style='width: 30%;vertical-align:top;'>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Name</th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$name</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Email Address</th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$email</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Contact Number</th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$mobile</td>";
	$op.="</tr>";
	$op.="<tr style='width: 30%;vertical-align:top;'>";
	$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Message</th>";
	$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$message.</td>";
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
             $mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
             $mail->setFrom('msipl@mavericksoftware.in', 'Sanjeevani Mamta Hospital & Research Centre');     //Set who the message is to be sent from
             $mail->addAddress('enquirysmsshospital@gmail.com', 'Sanjeevani Mamta Hospital & Research Centre');  // Add a recipient
          
             $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
             $mail->isHTML(true);                                  // Set email format to HTML
          
             $mail->Subject = "Website Enquiry";
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
			$op .= "<h3 style='color:#EA5C1F;'>Hello, $name  <br /> <b>Thank you for contacting Sanjeevani Mamta. We have received your query. We will get back to you soon.</h3>";
			$op .= "</section>";
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
	
}
public function insert_founder()
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
		else
		{
			$data=array(
				'name'=>$this->input->post('name'),
				'designation'=>$this->input->post('designation'),
				// 'facebook'=>$this->input->post('facebook'),
				// 'twitter'=>$this->input->post('twitter'),
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
			);	
		}
		$this->load->Model("Insert_mod");
		$res = $this->Insert_mod->founder_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('cms/founder');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('cms/founder');
		}
	}
	public function insert_news()
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
		//$date = date('Y-m-d');
		$date=$this->input->post('datepicker');
		$data=array(
		'insert_date'=>date('Y-m-d', strtotime($date)),
		'title'=>$this->input->post('title'),
		'album_id'=>$this->input->post('album_title'),
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img,
		'status'=>'Show'
		);
		$this->load->Model("Insert_mod");
		$res = $this->Insert_mod->news_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/newsevents');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/newsevents');
		}
}
public function insert_gallery()
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
			  $this->upload->initialize($this->set_upload_options('gallery'));
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
	$this->load->Model('Insert_mod');
	$data=array(
	'title'=>$this->input->post('title'),
	'category'=>$this->input->post('category'),
	'dept_id'=>$this->input->post('sub_mnu1'),
	'status'=>'Show'
	);
	$res = $this->Insert_mod->gallery_insert($data,$org);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/imagegallery');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/imagegallery');
	}
}
public function singleimage_gallery()
{
	$now = new DateTime();
      $newFileName="";
      $img_nm=$now->getTimestamp();  
      $newFileName = $_FILES['upload2']['name'];
      
      $fileExt1 = explode(".",$newFileName);
      $str=array_pop($fileExt1);
      $fileExt=strtolower($str);
      
      $img="" ;
      $config['upload_path'] = './data/uploads/gallery/';      
      $config['overwrite'] = true;
      $config['file_name'] = $img_nm.".".$fileExt;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('upload2'))
      {
          $error = array('error' => $this->upload->display_errors());       
      }
      else
      {
          $imgdata = array('upload_data' => $this->upload->data());
          $img=$img_nm.".".$fileExt;          
      }
	  
	  $data=array(
	  'album_id'=>$this->input->post('add_id'),
	  'image'=>$img
	  );
	  $this->load->Model('Insert_mod');
	  $res = $this->Insert_mod->gallery_singleimage($data);
	  if($res)
	   {
		   $data['message']="Inserted Successfully!...";
		   print_r(json_encode($data));
	   }
	   else
	   {
		   $data['message']="Error Please Try Again!...";
		   print_r(json_encode($data));
	   }
}
public function insert_contacts()
{
	$data=array(
	'telephone'=>$this->input->post('telephone'),
	'fax'=>$this->input->post('fax'),
	'email'=>$this->input->post('email'),
	'urll'=>$this->input->post('url'),
	'address'=>$this->input->post('pdisc'),
	'status'=>'Show'
	);
	
	$this->load->Model('Insert_mod');
	$res=$this->Insert_mod->contacts_insert($data);
	if($res)
	{
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/contactus');
	}
	else{
		$mess="Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/contactus');
	}
}
public function insert_mailconfig()
{
	$data = array(
	'mail'=>$this->input->post('mail'),
	'password'=>$this->input->post('password'),
	'status'=>'Not Active'
	);
	$this->load->Model('Insert_mod');
	$res = $this->Insert_mod->mailconfig_insert($data);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mail_config');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/mail_config');
	}
}
public function insert_speciality()
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
		$this->load->Model('Insert_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			
			$id = $this->Insert_mod->insert_stype($data,$type);
			if($img!="")
			{
			$data1 = array(
			's_id'=>$id,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc')
			);
			}
			else
			{
			$data1 = array(
			's_id'=>$id,
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc')
			);	
			}
			$res = $this->Insert_mod->speciality_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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
			if($img!="")
			{
			$data1 = array(
			's_id'=>$choose,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc')
			);
			}
			else
			{
				$data1 = array(
				's_id'=>$choose,
				'title'=>$this->input->post('title'),
				'pdesc'=>$this->input->post('pdisc')
				);
			}
			$res = $this->Insert_mod->speciality_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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
public function insert_opdschedule()
{
	$days = $this->input->post('dy');
	$from=$this->input->post('ft');
	$to=$this->input->post('tt');
	$data=array(
	'dr_id'=>$this->input->post('name'),
	'speciality'=>$this->input->post('designation')	
	);
	$this->load->Model('Insert_mod');
	$res = $this->Insert_mod->opdschedule_insert($data,$days,$from,$to);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/opd');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/opd');
	}
	
}
	public function insert_camp()
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
		//$date = date('Y-m-d');
		$date=$this->input->post('datepicker');
		$data=array(
		'insert_date'=>date('Y-m-d', strtotime($date)),
		'title'=>$this->input->post('title'),
		'name'=>$this->input->post('name'),
		'total'=>$this->input->post('total'),
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img,
		'status'=>'Show'
		);
		$this->load->Model("Insert_mod");
		$res = $this->Insert_mod->camp_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/camp');
		}
}
public function insert_mission()
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
			  $this->upload->initialize($this->set_upload_options('hospital'));
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
		$data=array(
		'title'=>$this->input->post('title'),
		'pdesc'=>$this->input->post('pdisc'),
		'image'=>$img,
		'status'=>'Show'
		);
		$this->load->Model("Insert_mod");
		$res = $this->Insert_mod->mission_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/smssh');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/smssh');
		}
}
public  function getRandomStringRand($length = 23)
{
    $stringSpace = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
    $stringLength = strlen($stringSpace);
    $randomString = '';
    for ($i = 0; $i < $length; $i ++) {
        $randomString = $randomString . $stringSpace[rand(0, $stringLength - 1)];
    }
    echo $randomString;
}
public function insert_team()
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
		'pdesc'=>$this->input->post('pdisc'),
		'status'=>'Show'
	);
	}
	else{
		$data = array(
		'name'=>$this->input->post('name'),
		'designation'=>$this->input->post('designation'),
		'department'=>$this->input->post('department'),
		'qualification'=>$this->input->post('qualification'),
		'pdesc'=>$this->input->post('pdisc'),
		'status'=>'Show'
	);
	}
	$this->load->Model('Insert_mod');
	$res = $this->Insert_mod->team_insert($data);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Technical_Team');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/Technical_Team');
	}
}
public function insert_diagnostics()
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
		$this->load->Model('Insert_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			
			$id = $this->Insert_mod->insert_dtype($data ,$type);
			
			$data1 = array(
			'd_id'=>$id,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc')
			);
			$res = $this->Insert_mod->diagnostics_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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
			$data1 = array(
			'd_id'=>$choose,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc')
			);
			$res = $this->Insert_mod->diagnostics_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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
public function insert_responsibility()
{
	      ini_set('post_max_size', '64M');
		  ini_set('upload_max_filesize', '64M');
		  $files = $_FILES;
		   //$fdata=$this->globaldata['userdata'];
		  $b=array();
		  $org=array();
		  $cpt = count($_FILES['upload']['name']);
		  for($i=0; $i<$cpt; $i++)
		  {$now = new DateTime();
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
		$this->load->Model('Insert_mod');
		if($img!="")
		{
			$data1 = array(
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc'),
			'status'=>'Show'
			);
		}
		else
		{
			$data1 = array(
			'title'=>$this->input->post('title'),
			'pdesc'=>$this->input->post('pdisc'),
			'status'=>'Show'
			);
		}
		$res = $this->Insert_mod->responsibility_insert($data1);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patientresponsibility');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patientresponsibility');
		}
}

public function insert_package()
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
	  $now1 = new DateTime();
      $newFileName1="";
      $img_nm1=$now1->getTimestamp();  
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
		'image'=>$img,
		'brochure'=>$img1,
		'pdesc'=>$this->input->post('pdisc')
		);
		
		$data1=array(
		'testcategory'=>$this->input->post('testcategory'),
		'testname'=>$this->input->post('testname')
		);
		
		$this->load->Model('Insert_mod');
		$res = $this->Insert_mod->insert_category($data,$name,$data1);
		if($res)
		{
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/packegecategory');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/packegecategory');
		}
		
}


public function insert_patienteducation()
{
		$now = new DateTime();
		$newFileName="";
		$img_nm=$now->getTimestamp();  
		$newFileName = $_FILES['upload']['name'];
      
		$fileExt1 = explode(".",$newFileName);
		$str=array_pop($fileExt1);
		$fileExt=strtolower($str);
      
		$img="" ;
		$config['upload_path'] = './data/uploads/patient/';      
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
				'pdesc'=>$this->input->post('pdisc'),
				'image'=>$img,
				'status'=>'Show'
			);
		}
		else
		{
			$data=array(
				'name'=>$this->input->post('name'),
				'pdesc'=>$this->input->post('pdisc'),
				'status'=>'Show'
			);	
		}
		$this->load->Model("Insert_mod");
		$res = $this->Insert_mod->patienteducation_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patientEducation');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/patientEducation');
		}		
}

public function insert_announcement()
{
	$data = array(


		'pdesc'=>$this->input->post('pdisc'),
		'status'=>'Show'
		);
		$this->load->Model('Insert_mod');
		$res = $this->Insert_mod->announcement_insert($data);
		if($res){
			$mess = "Inserted Successfully!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/announcement');
		}
		else{
			$mess = "Error Please Try Again!";
			$this->session->set_userdata('msg',$mess);
			redirect('Admin/announcement');
		}	
}

public function insert_cashlessfacility()
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
	else
	{
		$data=array(
			'title'=>$this->input->post('title'),
			// 'designation'=>$this->input->post('designation'),
			// 'facebook'=>$this->input->post('facebook'),
			// 'twitter'=>$this->input->post('twitter'),
			// 'pdesc'=>$this->input->post('pdisc'),
			'status'=>'Show'
		);	
	}
	$this->load->Model("Insert_mod");
	$res = $this->Insert_mod->cashlessfacility_insert($data);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/cashless_facility');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/cashless_facility');
	}
}



public function insert_testimonial()
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
	else
	{
		$data=array(
			'name'=>$this->input->post('name'),
			'designation'=>$this->input->post('designation'),
			'pdesc'=>$this->input->post('pdisc'),
			'status'=>'Show'
		);	
	}
	$this->load->Model("Insert_mod");
	$res = $this->Insert_mod->testimonial_insert($data);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/testimonial');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/testimonial');
	}
}
public function insert_career()
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
	'pdesc'=>$this->input->post('pdisc'),
	'status'=>'Show'
	);
	$this->load->Model('Insert_mod');
	$res = $this->Insert_mod->career_insert($data);
	if($res){
		$mess = "Inserted Successfully!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/career');
	}
	else{
		$mess = "Error Please Try Again!";
		$this->session->set_userdata('msg',$mess);
		redirect('Admin/career');
	}
}
public function insert_resume()
{
	$this->load->view('PHPMailerAutoload');
 	$mmail="enquiry@mavericksoftware.in";
 	 $pass="enquiry@1234";
     $query1=$this->db->get_where('mail_config',array('status'=>'Active'));
     $result=$query1->result_array();
    if($query1->num_rows() > 0){
     $mmail=$result[0]['mail'];      
     $pass=$result[0]['password'];
    }
	$img="" ;
	/*$now = new DateTime();
	$newFileName="";
	$img_nm=$now->getTimestamp();  
	$newFileName = $_FILES['fileToUpload']['name'];
	
	$fileExt1 = explode(".",$newFileName);
	$str=array_pop($fileExt1);
	$fileExt=strtolower($str);

	$img="" ;
	$config['upload_path'] = './data/uploads/resume/';      
	$config['overwrite'] = true;
	$config['file_name'] = $img_nm.".".$fileExt;
	$config['allowed_types'] = '*';
  
	$this->load->library('upload', $config);
	if ( ! $this->upload->do_upload('fileToUpload'))
	{
		$error = array('error' => $this->upload->display_errors());   
	}
	else
	{
	  $imgdata = array('upload_data' => $this->upload->data());
	  $img=$img_nm.".".$fileExt;          
	}*/
	

	$dt = date('Y-m-d');
	$data=array(
		'name'=>$this->input->post('name'),
		'email'=>$this->input->post('email'),
		'mobile'=>$this->input->post('mobile'),
		'site'=>$this->input->post('csite'),
		'pdesc'=>$this->input->post('message'),
		'status'=>'unread',
		'entry_dt'=>$dt,
		'experience'=>$this->input->post('exp'),
		'designation'=>$this->input->post('designation'),
		'applyingfor'=>$this->input->post('applyfor'),
		'ctc'=>$this->input->post('ctc'),
		'resume'=>$img	
	);
	
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$mobile=$this->input->post('mobile');
		$experience=$this->input->post('exp');
		$designation=$this->input->post('designation');
		$applyfor=$this->input->post('applyfor');
	
	$this->load->Model('Insert_mod');
	$res = $this->Insert_mod->resume_insert($data);
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
             $mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
             $mail->setFrom($email, 'Sanjeevani Mamta Hospital & Research Centre');     //Set who the message is to be sent from
             $mail->addAddress('enquirysmsshospital@gmail.com');  // Add a recipient
          
             $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
             $mail->isHTML(true);                                  // Set email format to HTML
          
             $mail->Subject = "Career Enquiry";
            $mail->Body    = "Name:-  $name<br>Email:-  $email<br>Mobile:- $mobile<br>Designation:- $designation<br>Apply For:- $applyfor<br>Experience:- $experience<br>Message:- $message";
			 //$file_get_contents = 'http://localhost/inlaksmvc/data/uploads/resume/'.$img;
			 //$mail->AddAttachment( $_FILES['fileToUpload']['tmp_name'], $_FILES['fileToUpload']['name']);
			 //$mail->AddAttachment( $file_get_contents);
             if(!$mail->send()) {
                
             }
             else
             {
                 
             }
        }
		catch(Exception $e){
			
		}
		//$data['mmg']=$img;
		$data['msg']="Success";
		print_r(json_encode($data));
	}
	else
	{
		$data['msg']="Error";
		print_r(json_encode($data));
	}	
}
public function insert_campdata()
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
		$this->load->Model('Insert_mod');
		$choose=$this->input->post('med_type');
		$type=$this->input->post('type');
		if($choose=="" && $type!="")
		{
			$data=array(
			'name'=>$type,
			'status'=>'Show'
			);
			
			$id = $this->Insert_mod->insert_ctype($data ,$type);
			
			$data1 = array(
			'd_id'=>$id,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc')
			);
			$res = $this->Insert_mod->campdata_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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
			$data1 = array(
			'd_id'=>$choose,
			'title'=>$this->input->post('title'),
			'image'=>$img,
			'pdesc'=>$this->input->post('pdisc')
			);
			$res = $this->Insert_mod->campdata_insert($data1);
			if($res){
			$mess = "Inserted Successfully!";
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
}