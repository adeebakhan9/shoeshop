<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_template extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
	
		$this->load->view('template/header');
		$this->load->view('template/index'); 
		$this->load->view('template/footer');
			
	}
	
	
			public function registration(){
			
			$data=array();
			$data['first_name']=$this->input->post('first_name');
			$data['last_name']=$this->input->post('last_name');
		
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['ph_number']=$this->input->post('ph_number');
			
			
			$this->load->model('User_model');
			$this->User_model->insertUser($data);
			
			$_SESSION['new_user']=$this->input->post('email');
			$this->session->set_flashdata('register_success','<div class="notification-error"><div class="box-container">Congratulations ! Login to Shop!</div></div>');
			redirect('main_template/loginPage');
		
		
						}
						
		public function loginPage(){
		
		$this->load->view('template/header');
		$this->load->view('template/login');
		$this->load->view('template/footer');
		
		}

		public function login(){
	
				$data=array();
				$email=$data['username']=$this->input->post('username');
				$password=$data['password']=$this->input->post('password');
				$query=$this->db->query("select * from user where email='".$email."' and password='".$password."'");
			     $row=$query->num_rows();
				$row1=$query->result();
			
		foreach($row1 as $val)
		{
		$id=$val->id; 
		}
				
		if($row > 0){
				$_SESSION['user_id']=$id; 
				redirect('main_template/my_account');
				}
				else {
				$this->session->set_flashdata('incorrect_login_msg','<div class="notification-error"><div class="box-container">Sorry! User ID Password Incorrect!</div></div>');
				redirect('main_template/loginPage');
				}
				
				}
					
		public function my_account(){
			$this->load->model('user_model');
			$data['details']=$this->user_model->personalDetails();
			
			$this->load->view('template/header');
			$this->load->view('template/my_account',$data);
			$this->load->view('template/footer');
			
			}

     	public function update_user_table(){
								
		$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'ph_number' => $this->input->post('ph_number'), 
				'home_add' => $this->input->post('home_add'),
				'office_add' => $this->input->post('office_add'),
				'country' => $this->input->post('country'),
				'state' => $this->input->post('state'),
				'city' => $this->input->post('city'),
				'zip' => $this->input->post('zip'),
            );
	
		$this->load->model('user_model');
		$this->user_model->updateUserDetails($data);
	
		$query=$this->db->query("select * from address where user_id='".$_SESSION['user_id']."'");
		$data['adrressCheck']=$row=$query->num_rows();
				
		if($row>0){ 
		$query=$this->db->query("update address set home_add='".$data['home_add']."',office_add='".$data['office_add']."',country='".$data['country']."',city='".$data['city']."',zip='".$data['zip']."' where user_id='".$_SESSION['user_id']."'");
		
		redirect('main_template/my_account');
		}
		else{
		
		$this->db->query("insert into address (user_id,home_add,office_add,country,city,zip) values('".$_SESSION['user_id']."','".$data['home_add']."','".$data['office_add']."',country='".$data['country']."',city='".$data['city']."',zip='".$data['zip']."')");
		
		redirect('main_template/my_account');	
		}
	
		
		}
		
	public function add_shipping_address(){
								
		$data = array(
            'shipping_add' => $this->input->post('shipping_add'),
			'shipp_country' => $this->input->post('shipp_country'),     
			'shipp_city' => $this->input->post('shipp_city'),
			'shipp_zip' => $this->input->post('shipp_zip')
            );
	
		$query=$this->db->query("select shipping_add from address where user_id='".$_SESSION['user_id']."'");
		$row=$query->result_array();
     
			if($row!=NULL){ 
		

		$query=$this->db->query("update address set shipping_add='".$data['shipping_add']."',shipp_city='".$data['shipp_city']."',shipp_country='".$data['shipp_country']."',shipp_zip='".$data['shipp_zip']."' where user_id='".$_SESSION['user_id']."'");
		
		redirect('main_template/my_account');
		}
		else{
		
		$this->db->query("insert into address (shipping_add,shipp_city,shipp_country) values('".$data['shipping_add']."','".$data['shipp_city']."','".$data['shipp_country']."','".$data['shipp_zip']."' where user_id='".$_SESSION['user_id']."')");
	
		redirect('main_template/my_account');	
		
		}
}

public function single_product(){
	
			$this->load->view('template/header');
			$this->load->view('template/single_product');
			$this->load->view('template/footer');

}

public function add_to_cart($param=NULL){

$data = array(
            'quantity' => $this->input->post('quantity')
            );
			
	$this->db->query("insert into cart (user_id,product_id,quantity) values('".$_SESSION['user_id']."','".$param."','".$data['quantity']."')");
redirect('main_template');	
}
	
	public function add_to_wishlist($param=NULL){


			
	$this->db->query("insert into wishlist (user_id,product_id,quantity) values('".$_SESSION['user_id']."','".$param."')");
redirect('main_template');	
}
	
		public function logout(){
			
			unset($_SESSION);
			$this->session->sess_destroy();
			
         	redirect('main_template/loginPage');
			
			}	

	

	
			

}