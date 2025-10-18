<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}



	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/navbar');
		$this->load->view('home/form_register' , array('error' => ' ' ));
		$this->load->view('home/footer');
	}


	public function save()
 {
 			// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;

		$this->form_validation->set_rules('admin_name', 'ชื่อสมาชิก', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));

		$this->form_validation->set_rules('admin_phone', 'เบอร์โทร.', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));

		$this->form_validation->set_rules('admin_pwd', 'password', 'trim|required|min_length[2]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 2 ตัว'));

		$this->form_validation->set_rules('admin_email', 'อีเมล', 'trim|required|valid_email',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'valid_email' => 'รูปแบบอีเมลไม่ถูกต้อง'));


		               if ($this->form_validation->run() == FALSE)
		                {
						      	$this->load->view('home/header');
								$this->load->view('home/navbar');
								$this->load->view('home/form_register' , array('error' => ' ' ));
								$this->load->view('home/footer');
		                }else{

		                	//check duplicate admin_email
							$admin_email = $this->input->post('admin_email');
					        $this->db->select('admin_email');
					        $this->db->where('admin_email',$admin_email);
					        $query = $this->db->get('tbl_admin');
					        $num = $query->num_rows();
					                if($num > 0)
					                {
					                       $this->session->set_flashdata('check_duplicate', TRUE);
							    			redirect('register','refresh');
					                }else{
							            $this->admin_model->insert_member();
							            $this->session->set_flashdata('regis_success', TRUE);
									    redirect('login/','refresh');
									}//check duplicate
					         }//form vali
 }

		
}
