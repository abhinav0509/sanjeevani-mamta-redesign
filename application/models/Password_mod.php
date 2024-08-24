<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_mod extends CI_Model {

public function password_reset($data,$id)
{
	$this->db->where('id',$id);
	$query = $this->db->update('tbl_login',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function userid($title)
{
	$this->db->where('username',$title);
	$query=$this->db->get('tbl_login');
    if($query->num_rows()>0)
	{
		$this->db->where('username',$title);
	    $query=$this->db->get('tbl_login');
		$res = $query->result_array();
		$result = $res[0]['id'];
		return $result;
	}
	else
	{
		return false;
	}
}
public function insert_code($data,$mmail)
{
	$this->db->where('username',$mmail);
	$query = $this->db->update('tbl_login',$data);
	if($query)
	{
		return true;
	}
	else{
		return false;
	}
}
public function verify_code($id,$code)
{
	$this->db->where('id',$id);
	$query = $this->db->get('tbl_login');
	$res = $query->result_array();
	$cod = $res[0]['verify_code'];
	if($cod==$code)
	{
		return true;
	}
	else{
		return false;
	}
}
public function pass_change($data,$id)
{
	$this->db->where('id',$id);
	$this->db->set('password',$data);
	$query = $this->db->update('tbl_login');
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