<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertiesController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('PropertiesModel');
        $this->load->helper('url');
    }
    /*
    *Call Method from Model
    *return object
    */    
    public function index()
    {
        $data['properties'] = $this->PropertiesModel->getProperties();        
        $this->load->view('properties/property-view',$data);
    }
    /*
    *Call Method from Model
    *parameter $id
    *return object to view
    */  
    public function viewDetail($id)
    {
        $data['property'] = $this->PropertiesModel->getPropertyById($id);
        $this->load->view('properties/property-detail-view',$data);
    }
    /*
    *Call Method from Model
    *parameter $id
    *return object to view
    */     
    public function getPropertyById($id)
    {       
        $data = $this->PropertiesModel->getPropertyById($id);
        echo json_encode($data);
    }
    /*
    *Call Method from Model
    *parameter $id
    *return object to view 
    */  
    public function changeShortList($id)
    {           
        $this->PropertiesModel->changeShortListFlag($id);
    }
    /*
    *Call Method from Model
    *return object to view
    */ 
    public function showShortList(){
        $data['properties'] = $this->PropertiesModel->getShortList();
        $this->load->view('properties/property-short-list',$data);
    }
}
