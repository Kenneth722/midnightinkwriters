<?php
    class Authors extends CI_Controller {
    	public function __construct() {
    		parent::__construct();
    		$this->load->model('author_model');
            $this->load->model('ion_auth_model');
    		$this->load->database();
    		$this->load->library(['ion_auth', 'form_validation']);

            $this->config->load('ion_auth', TRUE);
            $this->load->library(['email']);
            $this->lang->load('ion_auth');
            $this->load->helper(['cookie', 'language','url']);
    	}

        public function index() {
            $data['authors'] = $this->author_model->getAuthors();
            $this->load->view('templates/header');
            $this->load->view('authors/index', $data);
            $this->load->view('templates/footer');
        }

    	public function addNewView() {
    		$data['subscription_price'] = $this->input->get('price');
    		$data['subscription_type'] = $this->input->get('type');

    		$this->load->view('templates/header');
        	$this->load->view('authors/add_new', $data);
        	// $this->load->view('templates/footer');
        }

        public function addNew() {
      //   	require_once(APPPATH.'libraries/payment/stripe-php-master/init.php');

      //   	$stripeDetails = array(
		    //     "secretKey" => "sk_test_51Ko7tbDDDYQjuAYT90m8u05TtJH3beFZB20RTOwDhfWjkOeZkZrKAuyQAyL6Cz2Wyxd2YJdmlRYnSsTTlcWzNcqg005QUnOirv",
		    //     "publishableKey" => "pk_test_51Ko7tbDDDYQjuAYT9RSleqcLG4Lm9Rdu3AkLXAc6V269sK8D5zY7m79lcythrbZQ3mWAuCRMP09fqfAhSoGAMCAD007tOgi0D4"
		    // );

		    // \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);

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

            $config = [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'kenneth.rygeltech@gmail.com',
                'smtp_pass' => 'hlpbrjrxknteebuh',
                'mailtype' => 'html'
            ];

            $this->load->library('email');
            $this->email->initialize($config);
            $this->load->helpers('url');
            $this->email->set_newline("\r\n");

            $this->email->from('MidnightInkWriters');
            $this->email->to($email);
            $this->email->subject($this->lang->line('email_activation_subject'));
            $body = $this->load->view('auth/email/activate.tpl.php',$data,TRUE);
            $this->email->message($body);
            if ($this->email->send()) {

                $this->session->set_flashdata('success','Email Send sucessfully');
                return redirect('auth/login');
            } 
            else {
                echo "Email not send .....";
                show_error($this->email->print_debugger());
            }

		    $token = $_POST["stripeToken"];
		    $sub_amount = $this->input->post('sub_price');
		    $sub_type = $this->input->post('sub_type');
		    $desc = "Author".' '.$sub_type.' '."Subscription";
		    // $charge = \Stripe\Charge::create([
		    //   "amount" => str_replace(",","",$sub_amount) * 100,
		    //   "currency" => 'usd',
		    //   "description"=>$desc,
		    //   "source"=> $token,
		    // ]);

		    // if($charge){
		    //   redirect('auth/login');
		    // }

            redirect('auth/login');

        }

        public function insertAuthorByJson() {
            $description = $this->input->get('description');
            $price = $this->input->get('price');
            $fname = $this->input->get('fname');
            $mname = $this->input->get('mname');
            $lname = $this->input->get('lname');
            $email = $this->input->get('email');
            $created_at = gmdate('Y-m-d H:i:s');
            $expired_at = gmdate('Y-m-d H:i:s', strtotime('+ 1 MONTH'));
            $username = $fname . ' ' . $mname . ' ' . $lname;
            $password = $this->input->get('password');
            $address = $this->input->get('address');
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
                'created_at' => $created_at,
                'expired_at' => $expired_at,
            );
            $this->author_model->insertAuthor($data);
            // $author_user_id = $this->db->get_where('authors', array('email' => $email))->row()->id;
            $inserted_id = $this->db->insert_id();
            $id_info = array('ion_user_id' => $ion_user_id);
            $this->author_model->updateAuthor($inserted_id, $id_info);

            $data['inputs'] = $description . ' - ' . $price . ' - ' . $fname . ' - ' . $mname . ' - ' . $lname . ' - ' . $email . ' - ' . $address;

            echo json_encode($data);
        }

        public function subscriptionRenewal() {
            $ion_auth = $this->input->get('id');
            $author_details = $this->author_model->getAuthorbyIonId($ion_auth);
            $author_id = $author_details->id;
            $expired_at = gmdate('Y-m-d H:i:s', strtotime('+ 1 MONTH'));
            $data = array(
                'expired_at' => $expired_at,
            );
            $this->author_model->updateAuthor($author_id, $data);
            $data['message'] = "Subscription Expiration has been Updated";

            echo json_encode($data);
        }
    }