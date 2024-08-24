<?php
class Login_mod extends CI_Model{

public function login_admin($str)
{
	//print_r($str);
	$query = $this->db->get_where('tbl_login',array('username'=>$str['email'],'password'=>$str['password']));
	return $query->result_array();
	
}
public function loginadmin()
{	
	$query = $this->db->get('tbl_login');
	return $query->result_array();
}
}
?>