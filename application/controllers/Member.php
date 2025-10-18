<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//chk admin status
		if($this->session->userdata('admin_status') !=2){
				redirect('login/logout','refresh');
		}
		$this->load->model('data_model');
		$this->load->model('admin_model');
		$this->load->model('device_model');
	}

	public function index()
	{
		//print_r($_SESSION);
		$data['query']=$this->data_model->list_all_jobM($_SESSION['id']);
		$this->load->view('template/headerM');
		$this->load->view('backend/jobs_list_m',$data);
		$this->load->view('template/footer');
	}

	public function form()
	{
		$data = array('error' => '');
		$data['rs']=$this->device_model->list_all_device();
		$this->load->view('template/headerM');
		$this->load->view('backend/member_form', $data);
		$this->load->view('template/footer');
	}


	public function adding()
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';

		$this->form_validation->set_rules('case_type', 'ประเภทปัญหา', 'trim|required|min_length[1]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 1 ตัว'));
		$this->form_validation->set_rules('case_detail', 'รายละเอียดปัญหา', 'trim|required|min_length[5]',
                array('required' => 'กรุณากรอกข้อมูล %s.','min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 5 ตัว'));
		$this->form_validation->set_rules('case_loc', 'สถานที่', 'trim|required|min_length[5]',
                array('required' => 'กรุณากรอกข้อมูล %s.','min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 5 ตัว'));
		$this->form_validation->set_rules('p_name', 'ชื่อผู้แจ้ง', 'trim|required|min_length[3]',
				array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 3 ตัว'));
		$this->form_validation->set_rules('p_email', 'อีเมล', 'trim|required|valid_email',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'valid_email' => 'รูปแบบอีเมลไม่ถูกต้อง'));


		               if ($this->form_validation->run() == FALSE)
		                {
						      	$this->load->view('template/headerM');
								$this->load->view('backend/member_form', array('error' => ' ' ));
								$this->load->view('template/footer');
		                }else{
		                		//img
							 		$config['upload_path']= 'asset/uploads/';
					                $config['allowed_types']= 'gif|jpg|png|jpeg';
					                $config['encrypt_name']= TRUE;

					                $this->load->library('upload', $config);
					                if ( ! $this->upload->do_upload('p_img'))
					                {
					                        $data = array('error' => $this->upload->display_errors());
					                        $data['rs']=$this->device_model->list_all_device();
					                        $this->load->view('template/headerM');
											$this->load->view('backend/member_form',$data);
											$this->load->view('template/footer');
					                }else{
					                	$this->data_model->insert_case();
					                	//last id by user case
					                	$data['qlastid']=$this->data_model->lastid($_POST['p_email']);
					                	//echo $_POST['p_email'];
					                	//print_r($data);
					                	//echo $data['qlastid']->id;

					                	 $this->session->set_flashdata('save_success', TRUE);
					                	
					                	redirect('member/detail/'.$data['qlastid']->id,'refresh');
					                }

			                	
		                }  //}else{
		     	
		}


		public function detail($id)
		{
		$data['rs_detail']=$this->data_model->get_detail($id);

		if($data['rs_detail']==''){
			redirect('member/','refresh');
			exit();
		}

		$this->load->view('template/headerM');
		$this->load->view('backend/member_form_detail',$data);
		$this->load->view('template/footer');
		}


		public function profile()
		{
			$data['rsedit']=$this->admin_model->read($_SESSION['id']);
			$this->load->view('template/headerM');
			$this->load->view('backend/member_form_edit_profile',$data);
			$this->load->view('template/footer');
		}


	public function editdataM()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$this->form_validation->set_rules('id', 'id', 'trim|required|min_length[1]');

		$this->form_validation->set_rules('admin_name', 'ชื่อ', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));

		$this->form_validation->set_rules('admin_phone', 'เบอร์โทร', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));

		$this->form_validation->set_rules('admin_status', 'สถานะช่าง', 'trim|required|min_length[1]',
                array('required' => 'กรุณาเลือกสถานะ %s.', 'min_length' => 'กรุณาเลือกสถานะ'));

		if ($this->form_validation->run() == FALSE)
                {
 
			        $data['rsedit']=$this->admin_model->read($_SESSION['id']);
					$this->load->view('template/headerM');
					$this->load->view('backend/member_form_edit_profile',$data);
					$this->load->view('template/footer');
                }else{
                	//exit;
					$this->admin_model->update_member();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('member/profile/','refresh');
                }
	}

	public function pwd()
	{
		$data['rsedit']=$this->admin_model->read($_SESSION['id']);
		$this->load->view('template/headerM');
		$this->load->view('backend/member_form_edit_pwd_profile',$data);
		$this->load->view('template/footer');
	}


	public function editpwd()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$this->form_validation->set_rules('id', 'id', 'trim|required|min_length[1]');
	    $this->form_validation->set_rules('admin_pwd1', 'Password', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('admin_pwd2', 'Password Confirmation', 'trim|required|matches[admin_pwd1]');

                if ($this->form_validation->run() == FALSE)
                {
                	$data['rsedit']=$this->admin_model->read($_SESSION['id']);
					$this->load->view('template/headerM');
					$this->load->view('backend/member_form_edit_pwd_profile',$data);
					$this->load->view('template/footer');
                        
                }
                else
                {
                	$this->admin_model->update_pwd_admin();
                	$this->session->set_flashdata('save_success', TRUE);
					redirect('member','refresh');       
                }
	}
	
	 
}
