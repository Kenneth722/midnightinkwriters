<?php
    class Services extends CI_Controller {
        public function __construct() {
        	parent::__construct();
        	$this->load->library(['ion_auth', 'form_validation']);
        }

        public function index() {
        	// $this->load->view('templates/header');
        	// $this->load->view('services/index');
        	// $this->load->view('templates/footer');
        	$this->load->view('services/index');
        }

        public function addNewView() {
        	$this->load->view('templates/header');
        	$this->load->view('services/add_new');
        	$this->load->view('templates/footer');
        }

        public function addNew() {
        	if (!$this->ion_auth->in_group(array('admin'))) {
        		show_404();
        	}

        	$name = $this->input->post('name');
        	$price = $this->input->post('price');
        	$category = $this->input->post('category');
        	$description = $this->input->post('description');


        }
    }