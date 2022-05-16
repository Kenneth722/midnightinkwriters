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

        public function getServiceById($id) {
            $this->db->where('id', $id);
            $query = $this->db->get('services');
            return $query->row();
        }

        public function insertAuthorService($data) {
            $this->db->insert('authorservice', $data);
        }

        public function getAuthorServiceById($author_id) {
            $this->db->where('author_id', $author_id);
            $query = $this->db->get('authorservice');

            return $query->result();
        }
    }