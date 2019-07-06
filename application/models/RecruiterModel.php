<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RecruiterModel extends CI_Model {
	function getstatus(){
		return $this->db->get('status')->result_array();
	}
	function addcandidate($data){
		$this->db->insert('candidate',$data);
		return 1;
	}
	function getcandidate($recruiterid){
		$result = $this->db->where('recruiterid',$recruiterid)->get('candidate')->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['company_name']);
	    }
	    return $result;
	}
	function getCompanyName($id){
		return $this->db->where('id',$id)->get('company_onboarding')->result_array();
	}
	function addinterviewschedule($data,$id){
		$this->db->where('id',$id)->update('candidate',$data);
		return 1;
	}
	function getrecruiterprofile($id){
		return $this->db->where('id',$id)->get('recruiter')->result_array();
	}
	function updaterecruiter($id,$data){
		$this->db->where('id',$id)->update('recruiter',$data);
		return 1;
	}
	function getTime(){
		return $this->db->get('time')->result_array();
	}
	function getcandidateprofile($id){
		$result = $this->db->where('id',$id)->get('candidate')->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['company_name']);
         $result[$i]['f-status'] = $this->getcandidatestatus($result[$i]['f-status']);
         $result[$i]['s-status'] = $this->getcandidatestatus($result[$i]['s-status']);
         $result[$i]['t-status'] = $this->getcandidatestatus($result[$i]['t-status']);
	    }
	    return $result;
	}
	function getcandidatestatus($id){
		return $this->db->where('id',$id)->get('status')->result_array();
	}
	function getinterviewschedulelist($data1,$recruiterid){
		$data = "SELECT * FROM candidate WHERE (`f-date` = '".$data1."' AND `recruiterid` = '".$recruiterid."') OR (`s-date` = '".$data1."' AND `recruiterid` = '".$recruiterid."') OR (`t-date` = '".$data1."' AND `recruiterid` = '".$recruiterid."')";
		$result = $this->db->query($data)->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['company_name']);
         $result[$i]['f-status'] = $this->getcandidatestatus($result[$i]['f-status']);
         $result[$i]['s-status'] = $this->getcandidatestatus($result[$i]['s-status']);
         $result[$i]['t-status'] = $this->getcandidatestatus($result[$i]['t-status']);
	    }
	    return $result;
	}
	function getpositionlist($recruiterid){
		$result =  $this->db->where('assign_to_recruiter',$recruiterid)->get('position')->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['compant_id']);
	    }
	    return $result;
	}
	public function getposition($recruiter_id){
		$result = "SELECT `id`, `assign_to_recruiter`FROM `position`";
		$a = $this->db->query($result)->result_array();
		$position1 = array();
		foreach ($a as $key =>$value) {
			$var = $value;
			// print_r($var);
			$arr = $var['assign_to_recruiter'];
			// print_r($arr);
			$id = $var['id'];
			$var1= explode(',', $arr);

			foreach ($var1 as $v) {
				if($recruiter_id == $v){
					$position = $this->db->where('id',$id)->get('position')->result_array();
					// print_r($position);
				 	for ($i=0; $i < count($position); $i++) { 
			         $position[$i]['company_name'] = $this->getCompanyName($position[$i]['compant_id']);
				    }
				  	array_push($position1, $position);
				}
			}
		}
		return $position1;
	}
	public function getinterview_schedule(){
		return $this->db->get('eg')->result_array();
	}
	function getcandidatestatus1(){
		return $this->db->get('status')->result_array();
	}
}