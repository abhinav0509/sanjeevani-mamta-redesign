<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_Data extends CI_Controller {

public function reset_password()
	{
		$id = $this->input->post('user_id');
		$data = array(
		'password'=>$this->input->post('np')
		);
		$this->load->Model('Password_mod');
		$res = $this->Password_mod->password_reset($data,$id);
		if($res)
		{
			$data['message']="Success";
			print_r(json_encode($data));
		}
		else
        
		{
			$data['message']="Error";
			print_r(json_encode($data));
		}
	}
public function Getuserid()
{
	$title = $this->input->post('title');
	$this->load->Model('Password_mod');
	$res = $this->Password_mod->userid($title);
	if($res)
	{
		$data['msg'] = "Exist";
		$data['id'] = $res;
		print_r(json_encode($data));
	}
	else{
		$data['msg'] = "Not Exist";
		print_r(json_encode($data));
	}
}
public function mail_code()
{
	$characters = array(
	"A","B","C","D","E","F","G","H","J","K","L","M",
	"N","P","Q","R","S","T","U","V","W","X","Y","Z",
	"1","2","3","4","5","6","7","8","9");
	$keys = array();
	while(count($keys) < 7) {
	$x = mt_rand(0, count($characters)-1);
	if(!in_array($x, $keys)) {
    $keys[] = $x;
	}
	}
	$random_chars="";
	foreach($keys as $key){
	$random_chars .= $characters[$key];
	}
	
	$mmail = $this->input->post('user');
	$data = array(
	'verify_code'=>$random_chars
	);
	$this->load->Model('Password_mod');
	$res = $this->Password_mod->insert_code($data,$mmail);
	if($res)
	{
		
	$this->load->view("PHPMailerAutoload");
	 try
		{
		    $mail = new PHPMailer;
		    $mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'enquiry@mavericksoftware.in';                   // SMTP username
			$mail->Password = 'enquiry@1234';  
			$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
			$mail->Port = 465;                                    //Set the SMTP port number - 587 for authenticated TLS
			$mail->setFrom('msipl@mavericksoftware.in', 'SMSSH');     //Set who the message is to be sent from
			$mail->addAddress($mmail, 'SMSSH');  // Add a recipient
			$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			$mail->isHTML(true);                                  // Set email format to HTML
			//$mail->AddAttachment();
			 
			$mail->Subject = "Verification Code";
			$mail->Body    = "Verification Code :".$random_chars;
            
            if(!$mail->send()) {
			    //delfile($fname);
			   echo 'Message could not be sent.';
			   echo 'Mailer Error: ' . $mail->ErrorInfo;
			   exit;
			}
			else
			{
				 $data['message']="You successfully send Code.";
				 print_r(json_encode($data));
			}
		}	
		catch(Exception $e)
		{
		}
	}
	else
	{
		redirect('Login');
	}
}
public function verify()
{
	$id = $this->input->post('user_id1');
	$code = $this->input->post('code');
	$this->load->Model('Password_mod');
	$res = $this->Password_mod->verify_code($id,$code);
	if($res)
	{
		$data['msg'] = "Exist";
		print_r(json_encode($data));
	}
	else{
		$data['msg'] = "Not Exist";
		print_r(json_encode($data));
	}
}
public function change_pass()
{
	$id = $this->input->post('user_id2');
	$password=$this->input->post('pass');
	$this->load->Model('Password_mod');
	$res = $this->Password_mod->pass_change($password,$id);
	if($res)
	{
		$data['message']="Password Changed Successfully! Please Login To Continue!..";
		print_r(json_encode($data));
	}
	else{
		$data['message']="Error Please Try Again!";
		print_r(json_encode($data));
	}
}
}