<?php
    class Authors extends CI_Controller {
    	public function __construct() {
    		parent::__construct();
    		$this->load->model('author_model');
    		$this->load->database();
    		$this->load->library(['ion_auth', 'form_validation']);
    	}
    	public function addNewView() {
        	$this->load->view('authors/index');
        }

        public function addNew() {
        	$fname = $this->input->post('f_name');
        	$mname = $this->input->post('m_name');
        	$lname = $this->input->post('l_name');
        	$email = $this->input->post('email');
        	$username = $fname . ' ' . $mname . ' ' . $lname;
        	$password = $this->input->post('password');
        	$address = $this->input->post('address');
        	$additional_data = array(
                'first_name' => $fname,
                'last_name' => $lname,
                );
        	$dfg = 3;

        	$this->ion_auth->register($username, $password, $email, $dfg);
        	$ion_user_id = $this->db->get_where('users', array('email' => $email))->row()->id;
        	$data = array(
        		'firstname' => $fname,
        		'middlename' => $mname,
        		'lastname' => $lname,
        		'address' => $address,
        	);
            $this->author_model->insertAuthor($data);
            // $author_user_id = $this->db->get_where('authors', array('email' => $email))->row()->id;
            $inserted_id = $this->db->insert_id();
            $id_info = array('ion_user_id' => $ion_user_id);
            $this->author_model->updateAuthor($inserted_id, $id_info);
        }
    }