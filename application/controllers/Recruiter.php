<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recruiter extends CI_Controller {
	public function index()
	{
		if(isset($this->session->userdata['recruiter_session']))
    	{
    		$this->load->view('recruiter/dashboard');
		}
		else
	    { 
		    $this->session->set_flashdata('error',"Please login first");
	    }
	}
	public function newcandidate(){
		if(isset($this->session->userdata['recruiter_session']))
    	{
    		$recruiter_id = $this->session->userdata['recruiter_session']['id'];
    		$data['position'] = $this->RecruiterModel->getposition($recruiter_id);
    		print_r($data);
    		$data['clientName'] = $this->AdminModel->clientName();
    		$data['success'] = $this->session->flashdata('success');
    		$data['error'] = $this->session->flashdata('error');
    		$this->load->view('recruiter/addcandidate',$data);
		}
		else
	    { 
		    $this->session->set_flashdata('error',"Please login first");
	    }
	}
	public function editprofile(){
		if(isset($this->session->userdata['recruiter_session']))
    	{
    		$id = $this->session->userdata['recruiter_session']['id'];
    		$data['recruiterprofile'] = $this->RecruiterModel->getrecruiterprofile($id);
    		$data['success'] = $this->session->flashdata('success');
    		$data['error'] = $this->session->flashdata('error');
    		$this->load->view('recruiter/recruiterprofile',$data);
		}
		else
	    { 
		    $this->session->set_flashdata('error',"Please login first");
	    }
	}
	public function updateRecruiterProfile(){
		$id = $this->input->post('id');
		$data['recruiter_name'] = $this->input->post('recruiter_name');
		$data['designation'] = $this->input->post('designation');
		$data['mobile'] = $this->input->post('mobile');
		$data['mailid'] = $this->input->post('mailid');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$position = $this->RecruiterModel->updaterecruiter($id,$data);
		if($position == 1){
			$this->session->set_flashdata('success','Updated Sucessfully');
		}
		redirect('recruiter/editprofile');
	}
	public function addcandidate(){
		// print_r('1');die;
		$recruiterid = $this->session->userdata['recruiter_session']['id'];
		$config['allowed_types'] = 'jpg|png|pdf|docx|doc';
		$config['upload_path'] = './cv/';
		$config['encrypt_name'] = true;
		$this->load->library('upload',$config);
		if($this->upload->do_upload('image')){
			$file = $this->upload->data('file_name');
			$data = array('company_name' => $this->input->post('company_name'),
	                   'position' => $this->input->post('position'),
	                   'candidate_name' => $this->input->post('candidate_name'),
	                   'contact_no' => $this->input->post('contact_no'),
	                   'emailid' => $this->input->post('emailid'),
	                   'current_salary' => $this->input->post('current_salary'),
	                   'expected_salary' => $this->input->post('expected_salary'),
	                   'noticed_period' => $this->input->post('noticed_period'),
	                   'cv' => $file,
	                   'date' => date('Y-m-d H:i:s'),
	                   'recruiterid' => $recruiterid
	                );
			$position = $this->RecruiterModel->addcandidate($data);
			if($position == 1){
				$this->session->set_flashdata('success','Inserted Sucessfully');
			}
		}else{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('error',$data);
		}
		redirect('recruiter/newcandidate');
	}
	public function candidate_table(){
		$data['success'] = $this->session->flashdata('success');
    	$data['error'] = $this->session->flashdata('error');
    	$recruiterid = $this->session->userdata['recruiter_session']['id'];
		$data['candidate'] = $this->RecruiterModel->getcandidate($recruiterid);
		// print_r($data['candidate']);
		$this->load->view('recruiter/candidate_table',$data);
	}
	public function interviewschedule($id){
		$data['id'] = $id;
		$data['time'] = $this->RecruiterModel->getTime();
		$data['status'] = $this->RecruiterModel->getstatus();
		$this->load->view('recruiter/interviewdetails',$data);
	}
	public function interviewscheduledate(){
		$id = $this->input->post('id');
		// $data['f-status'] = $this->input->post('f-status');
		$date = $this->input->post('f-date');
		$time = $this->input->post('f-time');
		if((!empty($date)) && (!empty($time))){
			$data['f-date'] = $this->input->post('f-date');
			$data['f-time'] = $this->input->post('f-time');
			$data['f-status'] = $this->input->post('f-status');
			$data['f-datetime'] = $this->input->post('f-datetime');
			$position = $this->RecruiterModel->addinterviewschedule($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Interview Schedule Successfully');
			}
		}
		$date1 = $this->input->post('s-date');
		$time1 = $this->input->post('s-time');
		if((!empty($date1)) && (!empty($time1))){
			$data['s-date'] = $this->input->post('s-date');
			$data['s-time'] = $this->input->post('s-time');
			$data['s-status'] = $this->input->post('s-status');
			$data['s-datetime'] = $this->input->post('s-datetime');
			$position = $this->RecruiterModel->addinterviewschedule($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Interview Schedule Successfully');
			}
		}
		$date2 = $this->input->post('t-date');
		$time2 = $this->input->post('t-time');
		if((!empty($date2)) && (!empty($time2))){
			$data['t-date'] = $this->input->post('t-date');
			$data['t-time'] = $this->input->post('t-time');
			$data['t-status'] = $this->input->post('t-status');
			$data['t-datetime'] = $this->input->post('t-datetime');
			$position = $this->RecruiterModel->addinterviewschedule($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Interview Schedule Successfully');
			}
		}
		$status = $this->input->post('f-status');
		if($status != ""){
			// print_r('1');die;
			$data['f-status'] = $this->input->post('f-status');
			$position = $this->RecruiterModel->addinterviewschedule($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Interview Schedule Successfully');
			}
		}
		$status1 = $this->input->post('s-status');
		if($status1 != ""){
			$data['s-status'] = $this->input->post('s-status');
			$position = $this->RecruiterModel->addinterviewschedule($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Interview Schedule Successfully');
			}
		}
		$status2 = $this->input->post('t-status');
		if($status2 != ""){
			$data['t-status'] = $this->input->post('t-status');
			$position = $this->RecruiterModel->addinterviewschedule($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Interview Schedule Successfully');
			}
		}
		redirect('recruiter/candidate_table');
	}
	public function candidateprofile($id){
		$data['recruiterprofile'] = $this->RecruiterModel->getcandidateprofile($id);
		$this->load->view('recruiter/candidate_profile',$data);
	}
	public function interviewschedulelist(){
		$recruiterid = $this->session->userdata['recruiter_session']['id'];
		$data1 = date('d-m-Y');
		$data['interviewschedule'] = $this->RecruiterModel->getinterviewschedulelist($data1,$recruiterid);
		// print_r($data);die;
		$this->load->view('recruiter/interviewschedulelist',$data);
	}
	public function interviewscheduleprofile($id){
		$data['recruiterprofile'] = $this->RecruiterModel->getcandidateprofile($id);
		$this->load->view('recruiter/interviewscheduleprofile',$data);
	}
	public function position(){
		$recruiterid = $this->session->userdata['recruiter_session']['id'];
		$data['position'] = $this->RecruiterModel->getpositionlist($recruiterid);
		// print_r($data);die;
		$this->load->view('recruiter/position_list',$data);
	}
	public function gettime(){
		$time = $this->RecruiterModel->gettime();
		// print_r($time);
		print_r(json_encode($time));
	}
	public function getpositionstatus(){
		$positionstatus = $this->RecruiterModel->getcandidatestatus1();
		// print_r($time);
		print_r(json_encode($positionstatus));
	}
}