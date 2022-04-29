<?php
    class Services extends CI_Controller {
        public function __construct() {
        	parent::__construct();
        	$this->load->library(['ion_auth', 'form_validation']);
        	$this->load->model('service_model');
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
        	$description = $this->input->post('description');
        	$sub_description = $this->input->post('sub_description');
        	$receive_description = $this->input->post('receive_description');
        	$use_description = $this->input->post('use_description');
        	$display_name = str_replace(' ', '_', $name);
        	$date = gmdate('Y-m-d H:i:s');

        	$data = array(
        		"name" => $name,
        		"display_name" => $display_name,
        		"description" => $description,
        		"sub_description" => $sub_description,
        		"receive_description" => $receive_description,
        		"use_description" => $use_description,
        		"price" => $price,
        		"created_at" => $date
        	);

        	$this->service_model->insertService($data);

        	redirect('/');

        }
    }