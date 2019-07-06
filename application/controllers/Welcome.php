<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data['error'] = $this->session->flashdata('error');
		$data['alert'] = $this->session->flashdata('alert');
		$this->load->view('login',$data);

	}
	public function login(){
		// print_r('expression');
		$this->form_validation->set_rules('username', 'username','trim|required');
	    $this->form_validation->set_rules('password', 'password','trim|required');

	    if($this->form_validation->run() == FALSE) {

	    	if(isset($this->session->userdata['admin_session']))
			{	
				redirect('/admin');
				// print_r('1');
			}
			else
			{
				redirect(base_url());
				// print_r('2');
			}
	    }
	    else 
	    {
	    	$data = array (
	    		'username' => $this->input->post('username'),
	    		'password' => md5($this->input->post('password'))
	    		);

    		$loginData = $this->loginModel->loginadmin($data);
    		if(count($loginData) == 1){
    				$admin_session = array(
    				'username' => $loginData[0]['username'],
    		 		'name' => 'Administrator'
    		 	);
    			$this->session->set_userdata('admin_session',$admin_session);
	    		redirect('/admin');
    		}


	    	$verified = $this->loginModel->loginRecruiter($data);

	    	if($verified == 2) {
	    		$this->session->set_flashdata("error","Username or Password is Wrong");
	    		redirect(base_url());
	    	}
	    	if($verified != NULL) {

				$session_data = array(
					'recruiter_name' => $verified[0]->recruiter_name,
					'designation' => $verified[0]->designation,
					'username' => $verified[0]->username,
					'mailid' => $verified[0]->mailid,
					'id' => $verified[0]->id
				);
				
				$this->session->set_userdata('recruiter_session',$session_data);
				
	    		redirect('/recruiter');
	    	}
	    	else {
	    		
	    		$this->session->set_flashdata("error","Something wrong..!!");
	   			redirect(base_url());
	    	}
	    }
	}
	public function logout(){
		if (isset($this->session->userdata['admin_session']) || isset($this->session->userdata['recruiter_session']))  {
			// Removing session data
			$session_array = array(
				'name' => '',
				'phone' => '',
				'user_name' => '',
				'date' => ''
			);
			// print_r('expression');die;
			$this->session->set_flashdata('alert',"Successfully Logout...!");
			//resetting session data
	   		$this->session->unset_userdata('admin_session', $session_array);
	      	$this->session->unset_userdata('recruiter_session', $session_array);
	   		redirect(base_url());
	   	} 
	   	else  {
			redirect(base_url());
	   	}
	}
}
