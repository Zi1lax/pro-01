<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Device_model extends CI_Model {
 

    public function list_all_device()
        {              
                $query = $this->db->get('tbl_device');
                return $query->result();
        }

 

	public function insert_device()
	{
		$data = array(
                'd_name' => $this->input->post('d_name')
                );
                $query=$this->db->insert('tbl_device',$data);
	}

//show form edit
	 public function read($id){
                $this->db->where('d_id',$id);
                $query = $this->db->get('tbl_device');
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

    public function update_device()
        {
                $data = array(
                    'd_name' => $this->input->post('d_name')
                );
                $this->db->where('d_id', $this->input->post('d_id'));
                $query=$this->db->update('tbl_device',$data);
        }

     
        public function del_device($id)
        {
               $this->db->delete('tbl_device',array('d_id'=>$id));

        }


}