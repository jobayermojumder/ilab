<?php
class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Home_model');
		error_reporting(0);
		date_default_timezone_set('Asia/Dhaka');

	}

	public function index(){
		$data = '';
		$this->load->view('index', $data);
	}

	public function details($id){
		$results = $this->Home_model->get_product_by_id($id);
		if ($results) {
			$data['results'] = $results;
			$this->load->view('details', $data);
		}else{
			redirect('home');
		}
	}

	public function load_product(){
		$category = $this->input->post('category');

		$results = $this->Home_model->get_product_by_category($category);
		$html = '';
		foreach ($results as $r) {
			$html .= '<div class="col-md-3 col-sm-6">
			<div class="card">
			<img src="'.base_url($r->path.$r->product_image1).'" alt="Ambulance" style="width:100%">
			<h1 style="font-size: 1.5em;">'.$r->product_name.'</h1>
			<p class="price">'.$r->product_cost_tk.'tk ($'.$r->product_cost_doller.')</p>
			<p><a href="'.site_url("home/details/".$r->product_id).'"><button>Details</button></a></p>
			</div> 
			</div>';
		}
		echo $html;
	}



	public function order_submit(){
		$id = $postdata['product_id'] = $this->input->post('product_id');
		$postdata['form_user_name'] = $this->input->post('form_user_name');
		$postdata['form_user_email'] = $this->input->post('form_user_email');
		$postdata['form_user_phone'] = $this->input->post('form_user_phone');
		$postdata['product_quantity'] = $this->input->post('product_quantity');
		$postdata['country'] = $this->input->post('country');
		$postdata['form_comment'] = $this->input->post('form_comment');

		$result = $this->Home_model->order_insert($postdata);

		if($result){

			$message = "
			<html>
			<head>
			<title>Admin Password Recover</title>
			</head>
			<body>
			<div>
			<div>

			<p><b>Dear ".$postdata['form_user_name'].",\n \n</br>
			Your order confirmed successfully.
			<p>
			</div>
			</div>
			</body>
			</html>";

			$config = array(
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'ekshop.a2i@gmail.com',
				'smtp_pass' => 'jiisunseerat',
				'mailtype'  => 'html',
				'charset'   => 'utf-8'
			);
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");

			$htmlContent = '<h1>Sending email via SMTP server</h1>';
			$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

			$this->email->to(trim($postdata['form_user_email']));
			$this->email->from('ekshop.a2i@gmail.com','ilab');
			$this->email->subject('ilab Product order confirmation');
			$this->email->message($htmlContent);

			
			if ($this->email->send()) {
				$this->session->set_flashdata('smsg', 'Please check your email.');
				redirect('home/details/'.$id);
			} else {
				// echo $this->email->print_debugger();
				// exit();
				// $this->session->set_flashdata('emsg', 'E-mail Does Not Sent');
				$this->session->set_flashdata('smsg', 'Please check your email.');
				redirect('home/details/'.$id);
			}
		}else{
			$this->session->set_flashdata('emsg', 'Something went wrong!');
			redirect('home/details/'.$id);
		}

	}
	
}