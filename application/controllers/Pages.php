<?php
    class Pages extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->library(['ion_auth', 'form_validation']);
            $this->load->model('service_model');
            $this->load->model('author_model');
            if ($this->ion_auth->in_group(array('author'))) {
                $user = $this->ion_auth->get_user_id();
                $author_details = $this->author_model->getAuthorbyIonId($user);
                $now = gmdate('Y-m-d H:i:s');
                if ($this->ion_auth->logged_in()) {
                    if ($now >= $author_details->expired_at) {
                        redirect('subscription/expired');
                    }
                }
            }
        }

        public function view($page = 'home'){
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            if ($this->ion_auth->in_group(array('author'))) {
                $user = $this->ion_auth->get_user_id();
                if (!empty($user)) {
                    $author_details = $this->author_model->getAuthorbyIonId($user);
                    $data['my_services'] = $this->service_model->getAuthorServiceById($author_details->id);
                    $data['service_count'] = count($data['my_services']);
                    $data['paid_service_count'] = count($this->service_model->getPaidServices($author_details->id));
                }
            }

            if ($this->ion_auth->in_group(array('admin'))) {
                $services = $this->service_model->getAuthorServices();
                $data['service_count'] = count($services);
            }
            

            $data['services'] = $this->service_model->getServices();
            $data['title'] = ucfirst($page);

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }