<?php
    class Pages extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->library(['ion_auth', 'form_validation']);
            $this->load->model('service_model');
        }

        public function view($page = 'home'){
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $data['services'] = $this->service_model->getServices();
            $data['title'] = ucfirst($page);

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }