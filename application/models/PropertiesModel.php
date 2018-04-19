<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PropertiesModel extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function getProperties()
    {
        $query = $this->db->get('properties');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
    public function getPropertyById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('properties');       
        if($query->num_rows() > 0){
            $result = $query->row();
            return $result;
        }else{
            return false;
        }
    }
    public function changeShortListFlag($id) {
        $flag = $this->input->post('shortlist_flag');
        if($flag == "0")
        {
            $flag = "1";
        }
        else{
            $flag = "0";            
        }
        $data = array(
            "shortlist_flag" => $flag
        );

        $this->db->where('id', $id);
        $this->db->update('properties', $data);
    }

    public function getShortList(){
        $this->db->where('shortlist_flag','0');
        $query = $this->db->get('properties'); 
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
}