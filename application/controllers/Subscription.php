<?php
    class Subscription extends CI_Controller {
    	public function index() {
    		$this->load->view('templates/header');
    		$this->load->view('subscription/index');
    		$this->load->view('templates/footer');
    	}
    }