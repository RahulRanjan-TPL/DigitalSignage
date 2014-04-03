<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Profile extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->check_session();
    }

	public function index() {

		$data['userdata'] = $this->session->all_userdata();

		$this->load->view('template/dashboard/header');
		$this->load->view('profile_view', $data);
		$this->load->view('template/dashboard/footer');
	}

	public function manage() {

		// validate stuff here
	}

    private function check_session(){

        if(! $this->session->userdata('logged_in')){
            redirect('login');
        }
    }
}