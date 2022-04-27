<?php
    class Authors extends CI_Controller {
    	public function __construct() {
    		parent::__construct();
    		$this->load->model('author_model');
    		$this->load->database();
    		$this->load->library(['ion_auth', 'form_validation']);
    	}
    	public function addNewView() {
    		$data['subscription_price'] = $this->input->get('price');
    		$data['subscription_type'] = $this->input->get('type');

    		$this->load->view('templates/header');
        	$this->load->view('authors/index', $data);
        	$this->load->view('templates/footer');
        }

        public function addNew() {
        	require_once(APPPATH.'libraries/payment/stripe-php-master/init.php');

        	$stripeDetails = array(
		        "secretKey" => "sk_test_51Ko7tbDDDYQjuAYT90m8u05TtJH3beFZB20RTOwDhfWjkOeZkZrKAuyQAyL6Cz2Wyxd2YJdmlRYnSsTTlcWzNcqg005QUnOirv",
		        "publishableKey" => "pk_test_51Ko7tbDDDYQjuAYT9RSleqcLG4Lm9Rdu3AkLXAc6V269sK8D5zY7m79lcythrbZQ3mWAuCRMP09fqfAhSoGAMCAD007tOgi0D4"
		    );

		    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);

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

		    $token = $_POST["stripeToken"];
		    $sub_amount = $this->input->post('sub_price');
		    $sub_type = $this->input->post('sub_type');
		    $desc = "Author".' '.$sub_type.' '."Subscription";
		    $charge = \Stripe\Charge::create([
		      "amount" => str_replace(",","",$sub_amount) * 100,
		      "currency" => 'usd',
		      "description"=>$desc,
		      "source"=> $token,
		    ]);

		    if($charge){
		      redirect('auth/login');
		    }

        }
    }