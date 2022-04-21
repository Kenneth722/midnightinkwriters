<?php
    class Books extends CI_Controller {
        public function index() {
            $data['title'] = 'Latest Books';
            
            $data['books'] = $this->book_model->getBooks();

            $this->load->view('templates/header');
            $this->load->view('books/index', $data);
            $this->load->view('templates/footer');
        }
    }