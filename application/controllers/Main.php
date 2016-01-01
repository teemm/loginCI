<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
        parent::__construct();
        // $this->check_isvalidated();
        $this->load->model('Model');
    }
	public function index(){
		$this->load->view('Login');
	}
	public function home(){
		$this->load->view('Home');
	}
	public function login(){
    ($result=$this->Model->login());    
    if($result){
      redirect('Main/home');
      }else{
      redirect(base_url(''));
      }
  }
}
