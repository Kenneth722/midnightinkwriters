<?php
    class Subscription extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library(['ion_auth', 'form_validation']);
        }
        
    	public function index() {
    		$this->load->view('templates/header');
    		$this->load->view('subscription/index');
    		$this->load->view('templates/footer');
    	}
    }