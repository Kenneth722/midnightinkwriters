<?php
    class Author_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function insertAuthor($data) {
        	$this->db->insert('authors', $data);
        }

        public function updateAuthor($id, $data) {
        	$this->db->where('id', $id);
        	$this->db->update('authors', $data);
        }

        public function getAuthors() {
        	$this->db->order_by('id', 'desc');
        	$query = $this->db->get('authors');
        	return $query->result();
        }

        public function getAuthorbyIonId($ion) {
            $this->db->where('ion_user_id', $ion);
            $query = $this->db->get('authors');
            return $query->row();
        }

        public function getUserbyIonId($ion) {
            $this->db->where('id', $ion);
            $query = $this->db->get('users');
            return $query->row();
        }

    }