<?php
    class Services extends CI_Controller {
        public function __construct() {
        	parent::__construct();
        	$this->load->library(['ion_auth', 'form_validation']);
        	$this->load->model('service_model');
            $this->load->model('author_model');
            if ($this->ion_auth->in_group(array('author'))) {
                $user = $this->ion_auth->get_user_id();
                $author_details = $this->author_model->getAuthorbyIonId($user);
                $now = gmdate('Y-m-d H:i:s');
                if (!$this->ion_auth->logged_in()) {
                    if ($now >= $author_details->expired_at) {
                        redirect('subscription/expired');
                    }
                }
            }
        }

        public function index() {
        	$data['services'] = $this->service_model->getServices();
        	$this->load->view('templates/header', $data);
        	$this->load->view('services/index', $data);
        	$this->load->view('templates/footer');
        }

        public function addNewView() {
            $data['services'] = $this->service_model->getServices();
        	$this->load->view('templates/header', $data);
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

        public function serviceItem() {
            $id = $this->input->get('id');

            $data['service'] = $this->service_model->getServiceById($id);
            $data['services'] = $this->service_model->getServices();
            $this->load->view('templates/header',$data);
            $this->load->view('services/service',$data);
            // $this->load->view('templates/footer');
        }

        public function addAuthorServiceByJson() {
            $service_id = $this->input->get('id');
            $user = $this->ion_auth->get_user_id();
            $author_details = $this->author_model->getAuthorbyIonId($user);
            $now = gmdate('Y-m-d H:i:s');
            $status = 'Paid';
            // $data['details'] = $service_id.' '.$author_details->firstname.' '.$author_details->lastname.' '.$now.' '.$status;

            $insertdata = array(
                "service_id" => $service_id,
                "author_id" => $author_details->id,
                "status" => $status,
                "created_at" => $now,
            );

            $this->service_model->insertAuthorService($insertdata);

            echo json_encode($data);
        }

        public function myServices() {
            $user = $this->ion_auth->get_user_id();
            $author_details = $this->author_model->getAuthorbyIonId($user);
            $data['my_services'] = $this->service_model->getAuthorServiceById($author_details->id);
            $data['services'] = $this->service_model->getServices();
            $this->load->view('templates/header', $data);
            $this->load->view('services/author_services', $data);
            $this->load->view('templates/footer');
        }

        public function pay() {
            $data['services'] = $this->service_model->getServices();
            $this->load->view('templates/header', $data);
            $this->load->view('services/pay');
            // $this->load->view('templates/footer');
        }
    }