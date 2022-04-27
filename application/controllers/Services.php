<?php
    class Services extends CI_Controller {
        public function __construct() {
        	parent::__construct();
        	$this->load->library(['ion_auth', 'form_validation']);
        }

        public function index() {
        	$this->load->view('templates/header');
        	$this->load->view('services/index');
        	$this->load->view('templates/footer');
        }

        public function addNewView() {
        	$this->load->view('templates/header');
        	$this->load->view('services/add_new');
        	$this->load->view('templates/footer');
        }
    }