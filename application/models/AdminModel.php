<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
	public function recruiterAdd($data){
		$recruiter = count($this->db->where('username',$data['username'])->where('mailid',$data['mailid'])->get('recruiter')->result_array());
		$mailid = count($this->db->where('mailid',$data['mailid'])->get('recruiter')->result_array());
		$username = count($this->db->where('username',$data['username'])->get('recruiter')->result_array());
		if($recruiter == 1){
			return 1;
		}
		else if($username == 1){
			return 2;
		}
		else if($mailid == 1){
			return 3;
		}
		else{
			$this->db->insert('recruiter',$data);
			return 0;
		}
	}
	public function getIndustry(){
		return $this->db->get('industry')->result_array();
	}
	public function getState(){
		return $this->db->get('state')->result_array();
	}
	public function positionAdd($data){
		$this->db->insert('position',$data);
		return 1;
	}
	public function getRecruiter(){
		return $this->db->get('recruiter')->result_array();
	}
	public function companyOnboardingAdd($data){
		$this->db->insert('company_onboarding',$data);
		return 1;
	}
	public function companyOnboardingData(){
		return $this->db->get('company_onboarding')->result_array();
	}
	public function companyOnboardingprofile($id){
		$result =  $this->db->where('id',$id)->get('company_onboarding')->result_array();
		// print_r(count($result));
		for ($i=0; $i < count($result); $i++) {
			$result[$i]['state'] = $this->getstatename($result[$i]['state1']);
		}
		return $result;
	}
	function getstatename($id){
		return $this->db->where('id',$id)->get('state')->result_array();
	}
	public function recruiterManagementData(){
		$result =  $this->db->get('position')->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['compant_id']);
         $result[$i]['recruiter_name'] = $this->getRecruiterName($result[$i]['assign_to_recruiter']);
         $result[$i]['recruiter_id'] = $result[$i]['assign_to_recruiter'];
	    }
	    return $result;
	}
	public function getCompanyName($id){
		return $this->db->where('id',$id)->get('company_onboarding')->result_array();
	}
	public function getRecruiterName($id){
		$data = explode(',', $id);
		if(count($data) > 1){
			for ($i=0; $i < count($data); $i++) { 
				$data1[$i] = $this->db->where('id',$data[$i])->get('recruiter')->result_array()[0]['recruiter_name'];
			}
			$result = implode (", ", $data1);
		}else{
			for ($i=0; $i < count($data); $i++) { 
				$data1 = $this->db->where('id',$data[$i])->get('recruiter')->result_array()[0]['recruiter_name'];
			}
			$result = $data1;
		}
		return $result;
	}
	public function positionprofile($id){
		$result =  $this->db->where('id',$id)->get('position')->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['compant_id']);
         $result[$i]['recruiter_name'] = $this->getRecruiterName($result[$i]['assign_to_recruiter']);
         $result[$i]['recruiter_id'] = $result[$i]['assign_to_recruiter'];
         $result[$i]['industry'] = $this->getIndustryName($result[$i]['industry']);
         $result[$i]['status_of_position'] = $this->getstatusPosition($result[$i]['status_of_position']);
	    }
	    return $result;
	}
	public function getIndustryName($id){
		return $this->db->where('id',$id)->get('industry')->result_array();
	}
	public function getstatusPosition($id){
		return $this->db->where('id',$id)->get('position_status')->result_array();
	}
	public function clientName(){
		return $this->db->get('company_onboarding')->result_array();
	}
	public function editClient($data,$id){
		$this->db->where('id',$id)->update('company_onboarding',$data);
		return 1;
	}
	public function deleteClient($id){
		$this->db->where('id',$id)->delete('company_onboarding');
		return 1;
	}
	public function recruiterEditProfile($id){
		return $this->db->where('id',$id)->get('recruiter')->result_array();
	}
	public function resetPassword($data,$id){
		$this->db->where('id',$id)->update('recruiter',$data);
		return 1;
	}
	public function addeditposition($data,$id){
		$this->db->where('id',$id)->update('position',$data);
		return 1;
	}
	public function deletePosition($id){
		$this->db->where('id',$id)->delete('position');
		return 1;
	}
	public function activePosition($id,$data){
		$this->db->where('id',$id)->update('position',$data);
	}
	public function activeclient($id,$data){
		$this->db->where('id',$id)->update('company_onboarding',$data);
		$this->db->where('compant_id',$id)->update('position',$data);
	}
	public function getinterviewscheduledata($id){
		$data = date('d-m-Y');
		$data1 = "SELECT * FROM candidate WHERE (`f-date` = '".$data."' AND `recruiterid` = '".$id."') OR (`s-date` = '".$data."' AND `recruiterid` = '".$id."') OR (`t-date` = '".$data."' AND `recruiterid` = '".$id."')";
		$result = $this->db->query($data1)->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['company_name']);
         $result[$i]['f-status'] = $this->getcandidatestatus($result[$i]['f-status']);
         $result[$i]['s-status'] = $this->getcandidatestatus($result[$i]['s-status']);
         $result[$i]['t-status'] = $this->getcandidatestatus($result[$i]['t-status']);
	    }
	    return $result;
	}
	public function getcandidatestatus($id){
		return $this->db->where('id',$id)->get('status')->result_array();
	}
	public function interviewscheduledata($id){
		$result = $this->db->where('id',$id)->get('candidate')->result_array();
		for ($i=0; $i < count($result); $i++) { 
         $result[$i]['company_name'] = $this->getCompanyName($result[$i]['company_name']);
         $result[$i]['f-status'] = $this->getcandidatestatus($result[$i]['f-status']);
         $result[$i]['s-status'] = $this->getcandidatestatus($result[$i]['s-status']);
         $result[$i]['t-status'] = $this->getcandidatestatus($result[$i]['t-status']);
	    }
	    return $result;
	}
	public function getPositionStatus(){
		return $this->db->get('position_status')->result_array();
	}
}
