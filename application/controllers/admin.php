<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin_model');
        if($this->session->user_id == false){
            redirect('login');
        }
    }
    public function index(){
        $data['sidebar']="admin/sidebar";
        $this->load->view('admin/layout',$data);
    }
    public function view_post(){
        $data['sidebar']="admin/sidebar";
        $this->load->view('admin/view_post',$data);
    }
    public function add_post(){}
    
    public function new_file(){}
    public function view_file(){}
    public function add_category(){}
    public function new_category(){}
    
}