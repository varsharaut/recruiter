<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	public function loginadmin($data){
		return $this->db->where('username',$data['username'])->where('password',$data['password'])->get('login')->result_array();
	} 
	public function loginRecruiter($data){
		$con = "username ="."'".$data['username']."' AND password ="."'".$data['password']."'";
	    $query = $this->db->get_where('recruiter',$con,1);
	    if($query->num_rows() != 0) {
	        return $query->result();
	    }
	    return 2;
	}
}