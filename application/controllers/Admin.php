<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function index()
	{
		if(isset($this->session->userdata['admin_session']))
    	{
    		$this->load->view('admin/admin');
		}
		else
	    { 
		    $this->session->set_flashdata('error',"Please login first");
	    }	
	}
	public function client(){
		if(isset($this->session->userdata['admin_session']))
    	{
			$data['success'] = $this->session->flashdata('success');
			$data['error'] = $this->session->flashdata('error');
			$data['state'] = $this->AdminModel->getState();
			$this->load->view('admin/client',$data);
		}else{
		    $this->session->set_flashdata('error',"Please login first");
		}
	}
	public function recruiter(){
		if(isset($this->session->userdata['admin_session']))
    	{
			$data['success'] = $this->session->flashdata('success');
			$data['error'] = $this->session->flashdata('error');
			$this->load->view('admin/recruiter',$data);
		}else{
		    $this->session->set_flashdata('error',"Please login first");
		}
	}
	public function position(){
		$data['recruiter'] = $this->AdminModel->getRecruiter();
		$data['success'] = $this->session->flashdata('success');
		$data['error'] = $this->session->flashdata('error');
		$data['industry'] = $this->AdminModel->getIndustry();
		$data['position_status'] = $this->AdminModel->getPositionStatus();
		$data['clientName'] = $this->AdminModel->clientName();
		$this->load->view('admin/position',$data);
	}
	public function addRecruiter(){
		$data = array('recruiter_name' => $this->input->post('recruiter_name'),
		                   'designation' => $this->input->post('designation'),
		                   'mobile' => $this->input->post('mobile'),
		                   'mailid' => $this->input->post('mailid'),
		                   'username' => $this->input->post('username'),
		                   'password' => md5($this->input->post('password')) );
		$recruiter = $this->AdminModel->recruiterAdd($data);
		if($recruiter == 0){
			$this->session->set_flashdata('success','Inserted Sucessfully');
		}
		else if($recruiter == 1){
			$this->session->set_flashdata('error','Mail ID and Username Already exist');
		}
		else if($recruiter == 3){
			$this->session->set_flashdata('error','Mail ID Already exist');
		}
		else if($recruiter == 2){
			$this->session->set_flashdata('error','Username Already exist');
		}
		redirect('admin/recruiter');
	}
	public function addPosition(){
		$recruiter = $this->input->post('assign_to_recruiter');
		$assign_to_recruiter = implode(',', $recruiter);
		$jd = $this->input->post('jd');
		if($jd == 'Yes'){
			$config['allowed_types'] = 'jpg|png|pdf|docx|doc';
			$config['upload_path'] = './JD/';
			$config['encrypt_name'] = true;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('image')){
				$file = $this->upload->data('file_name');
				$data = array('compant_id' => $this->input->post('compant_id'),
	                   'position_title' => $this->input->post('position_title'),
	                   'experience' => $this->input->post('experience'),
	                   'salary_range' => $this->input->post('salary_range'),
	                   'client_requirement' => $this->input->post('client_requirement'),
	                   'no_of_position' => $this->input->post('no_of_position'),
	                   'jd' => $file,
	                   'status_of_position' => $this->input->post('status_of_position'),
	                   'assign_to_recruiter' => $assign_to_recruiter,
	                   'remark_client' => $this->input->post('remark_client'),
	                   'remark_recruiter' => $this->input->post('remark_recruiter'),
	                   'industry' => $this->input->post('industry'),
	                   'date_opened' => $this->input->post('date_opened'),
	               		'date' => date('Y-m-d'));
				// print_r($data);die;
				$position = $this->AdminModel->positionAdd($data);
				if($position == 1){
					$this->session->set_flashdata('success','Inserted Sucessfully');
				}
				
			}else{

				$data = $this->upload->display_errors();
				$this->session->set_flashdata('error',$data);
			}
		}else{
			$data = array('compant_id' => $this->input->post('compant_id'),
	                   'position_title' => $this->input->post('position_title'),
	                   'experience' => $this->input->post('experience'),
	                   'salary_range' => $this->input->post('salary_range'),
	                   'client_requirement' => $this->input->post('client_requirement'),
	                   'no_of_position' => $this->input->post('no_of_position'),
	                   'jd' => $jd,
	                   'status_of_position' => $this->input->post('status_of_position'),
	                   'assign_to_recruiter' => $assign_to_recruiter,
	                   'remark_client' => $this->input->post('remark_client'),
	                   'remark_recruiter' => $this->input->post('remark_recruiter'),
	                   'industry' => $this->input->post('industry'),
	                   'date_opened' => $this->input->post('date_opened'),
	               		'date' => date('Y-m-d') );
			$position = $this->AdminModel->positionAdd($data);
			if($position == 1){
				$this->session->set_flashdata('success','Inserted Sucessfully');
			}
		}
		redirect('admin/position');
	}
	public function addCompanyBoarding(){
		$total = $this->input->post('total');
		// print_r($total);
		$a = array();
		for ($i=1; $i <= $total ; $i++) { 
			$a[] = $this->input->post('other_payment_terms'.$i);
		}
		$b = json_encode($a);
		$data['other_payment_terms'] = $b;
		$data1['agreement_copy'] = $this->input->post('agreement_copy');
		$data['company_name'] = $this->input->post('company_name');
		$data['company_website'] = $this->input->post('company_website');
		$data['address1'] = $this->input->post('address1');
		$data['city1'] = $this->input->post('city1');
		$data['pin1'] = $this->input->post('pin1');
		$data['state1'] = $this->input->post('state1');
		$data['landline1'] = $this->input->post('landline1');
		$data['address2'] = $this->input->post('address2');
		$data['pri_contact_person'] = $this->input->post('pri_contact_person');
		$data['pri_designation'] = $this->input->post('pri_designation');
		$data['pri_contact_no'] = $this->input->post('pri_contact_no');
		$data['pri_emailId'] = $this->input->post('pri_emailId');
		$data['sec_contact_person'] = $this->input->post('sec_contact_person');
		$data['sec_contact_no'] = $this->input->post('sec_contact_no');
		$data['sec_designation'] = $this->input->post('sec_designation');
		$data['sec_emailId'] = $this->input->post('sec_emailId');
		$data['payment_terms'] = $this->input->post('payment_terms');
		$data['fixed_per'] = $this->input->post('fixed_per');
		$data['variable_range1'] = json_encode($this->input->post('variable_range1'));
		$data['variable_range2'] = json_encode($this->input->post('variable_range2'));
		$data['variable_range3'] = json_encode($this->input->post('variable_range3'));
		// $data['industry'] = $this->input->post('industry');
		$data['date'] = date('Y-m-d');
		// print_r($data['date']);die;
		$data['credit_period'] = $this->input->post('credit_period');
		$data['free_replace_period'] = $this->input->post('free_replace_period');
		// print_r($data['variable_range1']);die;
		
		if(!empty($data['fixed_per'])){
			// print_r('1');
			if($data1['agreement_copy'] == 'Yes'){
				// print_r('2');
				$config['allowed_types'] = 'jpg|png|pdf|docx|doc';
				$config['upload_path'] = './agreement/';
				$config['encrypt_name'] = true;
				$this->load->library('upload',$config);
				if($this->upload->do_upload('image')){
					// print_r('5');
					$file = $this->upload->data('file_name');
					$data['agreement_copy'] = $file;
					$position = $this->AdminModel->companyOnboardingAdd($data);
					if($position == 1){
						$this->session->set_flashdata('success','Inserted Sucessfully');
					}

				}else{
					// print_r('4');die;
					$data = $this->upload->display_errors();
					$this->session->set_flashdata('error',$data);
				}
			}else{
				$data['agreement_copy'] = $this->input->post('agreement_copy');
				$position = $this->AdminModel->companyOnboardingAdd($data);
				if($position == 1){
					$this->session->set_flashdata('success','Inserted Sucessfully');
				}
			}
		}else if($data['variable_range1'] != null){
			// $variable = json_decode($data['variable_range1']);
			// foreach ($variable as $key => $value) {
				// if(!empty($value)){
					if($data1['agreement_copy'] == 'Yes'){
						$config['allowed_types'] = 'jpg|png|pdf|docx|doc';
						$config['upload_path'] = './agreement/';
						$config['encrypt_name'] = true;
						$this->load->library('upload',$config);
						if($this->upload->do_upload('image')){
							$file = $this->upload->data('file_name');
							$data['agreement_copy'] = $file;
							$position = $this->AdminModel->companyOnboardingAdd($data);
							if($position == 1){
								$this->session->set_flashdata('success','Inserted Sucessfully');
							}

						}else{
							$data = $this->upload->display_errors();
							$this->session->set_flashdata('error',$data);
						}
					}else{
						// $file = $this->upload->data('file_name');
						$data['agreement_copy'] = $this->input->post('agreement_copy');
						$position = $this->AdminModel->companyOnboardingAdd($data);
						if($position == 1){
							$this->session->set_flashdata('success','Inserted Sucessfully');
						}
					}
				// }else{
				// 	$this->session->set_flashdata('error','Please fillup the payment terms data');
				// }
			// }
		}else{
			$this->session->set_flashdata('error','Please fillup the payment terms data');
		}
		redirect('admin/client');
	}
	public function client_list(){
		$data['success'] = $this->session->flashdata('success');
		$data['companyOnboardingData'] = $this->AdminModel->companyOnboardingData();
		$this->load->view('admin/client_list',$data);
	}
	public function recruiter_list(){
		$data['success'] = $this->session->flashdata('success');
		$data['recruiterData'] = $this->AdminModel->getRecruiter();
		$this->load->view('admin/recruiter_list',$data);
	}
	public function position_list(){
		$data['success'] = $this->session->flashdata('success');
		$data['positionTableData'] = $this->AdminModel->recruiterManagementData();
		$this->load->view('admin/position_table',$data);
	}
	public function client_profile($id){
		$data['companyOnboardingprofile'] = $this->AdminModel->companyOnboardingprofile($id);
		$data['state'] = $this->AdminModel->getState();
		$this->load->view('admin/client_profile',$data);
	}
	public function position_profile($id){
		$data['positionprofile'] = $this->AdminModel->positionprofile($id);
		$this->load->view('admin/position_profile',$data);

	}
	public function client_edit_profile($id){
		$data['companyOnboardingprofile'] = $this->AdminModel->companyOnboardingprofile($id);
		// print_r($data);die;
		$data['state'] = $this->AdminModel->getState();
		$this->load->view('admin/client_edit_profile',$data);
	}
	public function client_delete_profile($id){
		$position = $this->AdminModel->deleteClient($id);
		if($position == 1){
			$this->session->set_flashdata('success',"Record Deleted Successfully..!");
		}
		redirect('admin/client_list');
	}
	public function editCompanyBoarding(){
		$state1 = $this->input->post('state1');
		if(empty($state1)){
			// print_r($this->input->post('state'));
			$data['state1'] = $this->input->post('state');
			// print_r($data['state1']);
		}else{
			// print_r('2');die;
			$data['state1'] = $state1;	
		}
		$other_payment = $this->input->post('other_payment');
		print_r($other_payment);
		$total = $this->input->post('total');
		print_r($total);
		$user = json_decode($other_payment);
		$a = array();
		if($total >= 1 ){
			for ($i=1; $i <= $total ; $i++) { 
				$a[] = $this->input->post('other_payment_terms'.$i);
			}
			$b = json_encode($a);
			$user1 = json_decode($b);
			$c = array_merge($user,$user1);
			$other_payment_terms = json_encode($c);
			$data['other_payment_terms'] = $other_payment_terms;
			print_r('2');
		}else{
			$data['other_payment_terms'] = $other_payment;
			print_r('1');
		}
		$data['variable_range1'] = json_encode($this->input->post('variablerange1'));
		$data['variable_range2'] = json_encode($this->input->post('variablerange2'));
		$data['variable_range3'] = json_encode($this->input->post('variablerange3'));
		$id = $this->input->post('id');
		$data['company_name'] = $this->input->post('company_name');
		$data['company_website'] = $this->input->post('company_website');
		$data['address1'] = $this->input->post('address1');
		$data['city1'] = $this->input->post('city1');
		$data['pin1'] = $this->input->post('pin1');
		// $data['state1'] = $this->input->post('state1');
		$data['landline1'] = $this->input->post('landline1');
		$data['address2'] = $this->input->post('address2');
		$data['pri_contact_person'] = $this->input->post('pri_contact_person');
		$data['pri_designation'] = $this->input->post('pri_designation');
		$data['pri_contact_no'] = $this->input->post('pri_contact_no');
		$data['pri_emailId'] = $this->input->post('pri_emailId');
		$data['sec_contact_person'] = $this->input->post('sec_contact_person');
		$data['sec_designation'] = $this->input->post('sec_designation');
		$data['sec_contact_no'] = $this->input->post('sec_contact_no');
		$data['sec_emailId'] = $this->input->post('sec_emailId');
		$data['credit_period'] = $this->input->post('credit_period');
		$data['free_replace_period'] = $this->input->post('free_replace_period');
		$agreement_copy1 = $this->input->post('agreement_copy1');
		// print_r($data);die;
		if(empty($agreement_copy1)){
			print_r('1');
			$data['agreement_copy'] = $this->input->post('agreement_copy');
			print_r($data);
			$position = $this->AdminModel->editClient($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Inserted Sucessfully');
			}
		}else{
			$config['allowed_types'] = 'jpg|png|pdf|docx|doc';
			$config['upload_path'] = './agreement/';
			$config['encrypt_name'] = true;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('image')){
				$file = $this->upload->data('file_name');
				$data['agreement_copy'] = $file;
				$position = $this->AdminModel->editClient($data,$id);
				if($position == 1){
					$this->session->set_flashdata('success','Inserted Sucessfully');
				}
			}else{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('error',$data);
			}
		}
		// if($total >= 1){
		// 	$a = array();
		// 	for ($i=1; $i <= $total ; $i++) { 
		// 		$a[] = $this->input->post('other_payment_terms'.$i);
		// 	}
		// 	$b = json_encode($a);
		// 	$data['other_payment_terms'] = $b;
		// 	$position = $this->AdminModel->editClient($data,$id);
		// 	if($position == 1){
		// 		$this->session->set_flashdata('success','Inserted Sucessfully');
		// 	}
		// }else{
		// 	$data['other_payment_terms'] = $this->input->post('other_payment_terms1');
		// 	$position = $this->AdminModel->editClient($data,$id);
		// 	if($position == 1){
		// 		$this->session->set_flashdata('success','Inserted Sucessfully');
		// 	}
		// }
		redirect('admin/client_list');
	}
	public function position_edit_profile($id){
		$data['positionprofile'] = $this->AdminModel->positionprofile($id);
		$data['industry'] = $this->AdminModel->getIndustry();
		$data['position_status'] = $this->AdminModel->getPositionStatus();
		$data['recruiter'] = $this->AdminModel->getRecruiter();
		$data['clientName'] = $this->AdminModel->clientName();
		$this->load->view('admin/position_edit_profile',$data);
	}
	public function position_delete($id){
		$position = $this->AdminModel->deletePosition($id);
		if($position == 1){
			$this->session->set_flashdata('success',"Record Deleted Successfully..!");
		}
		redirect('admin/position_list');
	}
	public function position_inactive($id){
		$data['active'] = 1;
		$position = $this->AdminModel->activePosition($id,$data);
		redirect('admin/position_list');
	}
	public function position_active($id){
		$data['active'] = 2;
		$position = $this->AdminModel->activePosition($id,$data);
		redirect('admin/position_list');
	}
	public function client_inactive($id){
		$data['active'] = 1;
		$position = $this->AdminModel->activeclient($id,$data);
		redirect('admin/client_list');
	}
	public function client_active($id){
		$data['active'] = 2;
		$position = $this->AdminModel->activeclient($id,$data);
		redirect('admin/client_list');
	}
	public function getcompanyname(){
		$data = $this->AdminModel->clientName();
		print_r(json_encode($data));

	}
	public function recruiter_edit_profile($id){
		$data['recruiterData'] = $this->AdminModel->recruiterEditProfile($id);
		// print_r($data);die;
		$this->load->view('admin/recruiter_edit_profile',$data);
	}
	public function recruiter_edit(){
		$id = $this->input->post('id');
		$data['mailid'] = $this->input->post('mailid');
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$position = $this->AdminModel->resetPassword($data,$id);
		if($position == 1){
			$this->session->set_flashdata('success','Password has been changed..!');
		}
		redirect('admin/recruiter_list');
	}
	public function addeditposition(){
		$recruiter = $this->input->post('assign_to_recruiter1');
		$assign_to_recruiter1 = implode(',', $recruiter);
		$id = $this->input->post('id');
		$status_of_position1 = $this->input->post('status_of_position1');
		$industry1 = $this->input->post('industry1');
		$date_opened1 = $this->input->post('date_opened1');
		if(empty($status_of_position1)){
			$data['status_of_position'] = $this->input->post('status_of_position');
		}else{
			$data['status_of_position'] = $status_of_position1;
		}
		if(empty($industry1)){
			$data['industry'] = $this->input->post('industry');
		}else{
			$data['industry'] = $industry1;
		}
		if(empty($date_opened1)){
			$data['date_opened'] = $this->input->post('date_opened');
		}else{
			$data['date_opened'] = $date_opened1;;
		}
		$data['position_title'] = $this->input->post('position_title');
		$data['experience'] = $this->input->post('experience');
		$data['salary_range'] = $this->input->post('salary_range');
		$data['no_of_position'] = $this->input->post('no_of_position');
		$data['client_requirement'] = $this->input->post('client_requirement');
		$data['remark_client'] = $this->input->post('remark_client');
		$data['remark_recruiter'] = $this->input->post('remark_recruiter');
		$company_id1 = $this->input->post('company_id1');
		$jd1 = $this->input->post('jd1');
		// $assign_to_recruiter1 = $this->input->post('assign_to_recruiter1');
		$status_of_position1 = $this->input->post('status_of_position1');
		if (empty($company_id1) && empty($status_of_position1) && empty($jd1) && empty($assign_to_recruiter1) ) {
			// print_r('1');
			$data['compant_id'] = $this->input->post('company_id');
			// print_r($data['compant_id']);die;
			$data['status_of_position'] = $this->input->post('status_of_position');
			$data['jd'] = $this->input->post('jd');
			$data['assign_to_recruiter'] = $this->input->post('assign_to_recruiter');
			$position = $this->AdminModel->addeditposition($data,$id);
			if($position == 1){
				$this->session->set_flashdata('success','Successfully Updated');
			}
		}else{
			if(!empty($company_id1)){
				// print_r('3');die;
				$data['compant_id'] = $this->input->post('company_id1');
				$position = $this->AdminModel->addeditposition($data,$id);
				if($position == 1){
					$this->session->set_flashdata('success','Successfully Updated');
				}
			}else{
				$data['compant_id'] = $this->input->post('company_id');
				$position = $this->AdminModel->addeditposition($data,$id);
				if($position == 1){
					$this->session->set_flashdata('success','Successfully Updated');
				}
			}
			if(!empty($status_of_position1)){
				$data['status_of_position'] = $this->input->post('status_of_position1');
				$position = $this->AdminModel->addeditposition($data,$id);
				if($position == 1){
					$this->session->set_flashdata('success','Successfully Updated');
				}
			}else{
				$data['status_of_position'] = $this->input->post('status_of_position');
				$position = $this->AdminModel->addeditposition($data,$id);
				if($position == 1){
					$this->session->set_flashdata('success','Successfully Updated');
				}
			}
			if(!empty($jd1)){
				if($this->input->post('jd1') == 'Yes'){
					$config['allowed_types'] = 'jpg|png|pdf|docx|doc';
					$config['upload_path'] = './JD/';
					$config['encrypt_name'] = true;
					$this->load->library('upload',$config);
					if($this->upload->do_upload('image')){
						$file = $this->upload->data('file_name');
						// $data['jd'] = $file;
					}
					else{
						$data = $this->upload->display_errors();
						$this->session->set_flashdata('error',$data);
					}
					$data['jd'] = $file;
					$position = $this->AdminModel->addeditposition($data,$id);
					if($position == 1){
						$this->session->set_flashdata('success','Successfully Updated');
					}
				}else{
					$data['jd'] = $this->input->post('jd1');
					$position = $this->AdminModel->addeditposition($data,$id);
					if($position == 1){
						$this->session->set_flashdata('success','Successfully Updated');
					}
				}
			}else{
				$data['jd'] = $this->input->post('jd');
				if($position == 1){
					$this->session->set_flashdata('success','Successfully Updated');
				}
			}
			if(!empty($assign_to_recruiter1)){
				$data['assign_to_recruiter'] = $assign_to_recruiter1;
				$position = $this->AdminModel->addeditposition($data,$id);
				if($position == 1){
					$this->session->set_flashdata('success','Successfully Updated');
				}
			}else{
				// print_r('2');die;
				$data['assign_to_recruiter'] = $this->input->post('assign_to_recruiter');
				$position = $this->AdminModel->addeditposition($data,$id);
				if($position == 1){
					$this->session->set_flashdata('success','Successfully Updated');
				}
			}
		}
		redirect('admin/position_list');
	}
	public function interview_schedule(){
		$data['recruiter'] = $this->AdminModel->getRecruiter();
		$id = $this->input->post('recruiterid');
		$data['position'] = $this->AdminModel->getinterviewscheduledata($id);
		$this->load->view('admin/interview_schedule',$data);
	}
	public function interschedule($id){
		// print_r($id);die;
		$data['interschedule'] = $this->AdminModel->interviewscheduledata($id);
		// print_r($data);
		$this->load->view('admin/interview_schedule_profile',$data);
	}
	public function eg(){
		$data['getinterview_schedule'] = $this->RecruiterModel->getinterview_schedule();
		$this->load->view('eg/eg2',$data);
	}
	public function addeg(){
		$data = $this->input->post();
		print_r(json_encode($data));
		$a = json_encode($data);
		print_r(json_decode($a));
	}
	public function addinterview(){
		// $total = $this->input->post('total');
		// $a = array();
		// for ($i=1; $i <= $total ; $i++) { 
		// 	$a[] = $this->input->post('interviewschedule'.$i);
		// 	print_r($a);
		// }die;
		
		$interviewschedule1 = $this->input->post('interview');
		print_r($interviewschedule1);
		$total = $this->input->post('total');
		// print_r($total);
		$user = json_decode($interviewschedule1);
		print_r($user);
		$a = array();
		if($total >= 1 ){
			for ($i=1; $i <= $total ; $i++) { 
				$a[] = $this->input->post('interviewschedule'.$i);
			}
			$b = json_encode($a);
			$user1 = json_decode($b);
			print_r($user1);
			if(!empty($user)){
				$c = array_merge($user,$user1);
				$interviewschedule = json_encode($c);
			}else{
				$interviewschedule = json_encode($user1);
			}
			$data['interview_schedule'] = $interviewschedule;
			print_r($data);
			print_r('2');
		}else{
			$data['interview_schedule'] = $interviewschedule1;
			print_r('1');
			print_r($data);
		}
		// $this->db->insert('eg',$data);
		// redirect('admin/eg');


		// $a = array();
		// for ($i=1; $i <= $total ; $i++) { 
		// 	$a[] = $this->input->post('interviewschedule'.$i);
		// }
		// $b = json_encode($a);
		// print_r($b);
		// $data['interview_schedule'] = $b;
		// $this->db->insert('eg',$data);
		// redirect('admin/eg');
	}
	public function hii(){
		
	}
}
