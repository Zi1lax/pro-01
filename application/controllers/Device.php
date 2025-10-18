<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//chk device status
		if($this->session->userdata('admin_status') !=1){
				redirect('login/logout','refresh');
		}
		$this->load->model('device_model');
	}

	public function index()
	{
		$data['query']=$this->device_model->list_all_device();
		$this->load->view('template/header');
		$this->load->view('backend/device_list',$data);
		$this->load->view('template/footer');
	}

 

	
	public function add()
	{
		$this->load->view('template/header');
		$this->load->view('backend/device_form_add' , array('error' => ' ' ));
		$this->load->view('template/footer');
	}
 

	public function adding()
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;

		$this->form_validation->set_rules('d_name', 'ชื่ออุปกรณ์', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));

		 

		               if ($this->form_validation->run() == FALSE)
		                {
						      	$this->load->view('template/header');
								$this->load->view('backend/device_form_add' , array('error' => ' ' ));
								$this->load->view('template/footer');
		                }else{

		                	//check duplicate d_name
							$d_name = $this->input->post('d_name');
					        $this->db->select('d_name');
					        $this->db->where('d_name',$d_name);
					        $query = $this->db->get('tbl_device');
					        $num = $query->num_rows();
					                if($num > 0)
					                {
					                       $this->session->set_flashdata('check_duplicate', TRUE);
							    			redirect('device','refresh');
					                }else{
							            $this->device_model->insert_device();
							            $this->session->set_flashdata('save_success', TRUE);
									    redirect('device','refresh');
									}//check duplicate
					         }//form vali
		}


 

	public function edit($id)
	{
		$data['rsedit']=$this->device_model->read($id);

		// echo '<pre>';
		// print_r($data['rsedit']);
		// echo '</pre>';
		// exit();

		$this->load->view('template/header');
		$this->load->view('backend/device_form_edit',$data);
		$this->load->view('template/footer');
	}



	public function editdata()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		//exit;
		$this->form_validation->set_rules('d_id', 'id', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('d_name', 'ชื่ออุปกรณ์', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));
		 
		if ($this->form_validation->run() == FALSE)
                {
                	$id = $this->input->post('d_id');
			        $data['rsedit']=$this->device_model->read($id);
					$this->load->view('template/header');
					$this->load->view('backend/device_form_edit',$data);
					$this->load->view('template/footer');
                }else{
                	//exit;
					$this->device_model->update_device();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('device','refresh');
                }
	}


	public function del($id)
	{
		$this->device_model->del_device($id);
		$this->session->set_flashdata('del_success', TRUE);
		redirect('device','refresh');	
	}


}
