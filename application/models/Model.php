<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	public function login(){
	$this->db->where('user',$this->input->post('user',TRUE));
                $this->db->where('password',($this->input->post('password',TRUE)));
                $countuser=$this->db->count_all_results('users');
                if($countuser>0){
                        $rows=$this->db->get('users')->row_array();
                        $this->session->set_userdata('userId', $rows['id']);
                        return TRUE;
                }
                return FALSE;
	}
}