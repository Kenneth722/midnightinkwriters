<?php
    class Service_model extends CI_Model {
    	public function __construct() {
    		$this->load->database();
    	}

    	public function insertService($data) {
    		$this->db->insert('services', $data);
    	}

    	public function getServices() {
    		$query = $this->db->get('services');
    		return $query->result();
    	}
    }