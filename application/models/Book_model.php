<?php
    class Book_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function getBooks($author = False) {
            if ($author === FALSE) {
                $query = $this->db->get('books');
                return $query->result_array();
            }

            $query = $this->db->get_where('books', array('author' => $author));
            return $query->row();
        }
    }