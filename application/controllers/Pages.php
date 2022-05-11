<?php
    class Pages extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->library(['ion_auth', 'form_validation']);
            $this->load->model('service_model');
            $this->load->model('author_model');
            $user = $this->ion_auth->get_user_id();
            $author_details = $this->author_model->getAuthorbyIonId($user);
            $now = gmdate('Y-m-d H:i:s');
            if ($now >= $author_details->expired_at) {
                redirect('subscription/expired');
            }
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