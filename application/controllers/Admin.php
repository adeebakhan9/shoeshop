<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
	{
		$this->load->view('admin/login.php');
		
	}
	
	
	public function loginAdmin(){
	
	$data=array(
	
	'username' => $this->input->post('username'),
	'password' => $this->input->post('password'),
	
	);
	
	$this->load->model('admin_model');
	$this->admin_model->adminLogin($data);
	
	}
	
	
	public function Dashboard(){
	
	$this->load->view('admin/header.php');
	$this->load->view('admin/footer.php');
	
	}
	
	public function userList(){
	

	
	
	
	$this->load->model('admin_model');
	$data['users']=$this->admin_model->userList();
	

	
	$this->load->view('admin/header.php');
	$this->load->view('admin/userList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
		public function carList(){
	

	
	
	
	$this->load->model('admin_model');
	$data['cars']=$this->admin_model->carList();
	

	
	$this->load->view('admin/header.php');
	$this->load->view('admin/carList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
	
		public function rideList(){
	

	
	
	
	$this->load->model('admin_model');
	$data['ride']=$this->admin_model->rideList();
	

	
	$this->load->view('admin/header.php');
	$this->load->view('admin/rideList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
		public function bookingList(){
	
	
	$this->load->model('admin_model');
	
	$data['rider']=$this->admin_model->riderList();
	
	//$data['ownerList']=$this->admin_model->ownerList();
	
//print_r($data); exit;
	
	$this->load->view('admin/header.php');
	$this->load->view('admin/bookingList.php',$data);
	$this->load->view('admin/footer.php');
	
	}
	
		 public function update_user_status_page($param=NULL){
	   
	   
	        	$query=$this->db->query("select * from user where id='".$param."'");
				
	         	$data['satya1']=$query->result_array();
				
				if(isset($_POST['update_status'])){
				
				$query1=$this->db->query("update user set status='".$_POST['status']."' where id='".$param."' ");
				
				if($query1){
					
					redirect(base_url().'index.php/admin/userList/');
					
					}
				
				}
				
			$data['t_id']=$param;
		   
		    $this->load->view('admin/header');
		    $this->load->view('admin/update_user_status',$data);
			$this->load->view('admin/footer');
				
		   } 
				
				
			//	echo $this->db->last_query(); exit;
		public function deleteCar($param){
		
		$this->db->query("delete from car where id='".$param."'");
		
		redirect(base_url().'index.php/admin/carList/');
		}
				
		 

	public function deleteUser(){
	
	
	$userID=$this->uri->segment(3);
	$this->load->model('Admin_model');    
	$this->Admin_model->blockUser($userID);
	
	
	
	}
	
	 public function viewRide($param=NULL){
 
 
// $this->load->model('User_model');
	
	$query=$this->db->query("select * from ride where id ='".$param."' ");
		//echo $this->db->last_query(); exit;
	$data['val']=$query->result_array();
	//print_r($data); exit;

	$this->load->view('admin/header.php');
	$this->load->view('admin/viewRide.php',$data);
	$this->load->view('admin/footer.php');
 
 }
 	 public function viewBooking($param=NULL){
 
 
// $this->load->model('User_model');
	
	$query=$this->db->query("select * from ride where id ='".$param."' ");
		//echo $this->db->last_query(); exit;
	$data['val']=$query->result_array();
	//print_r($data); exit;

	$this->load->view('admin/header.php');
	$this->load->view('admin/viewRide.php',$data);
	$this->load->view('admin/footer.php');
 
 }
 
 
 public function search_ride(){

		 $to=$this->input->post('to');
		 	 $from=$this->input->post('from');
			 	
	$depDate=$this->input->post('depDate');
	if(!empty($depDate)){
	$expDepdate=explode("/",$depDate);
	$impDepDate=$expDepdate[2].'-'.$expDepdate[0].'-'.$expDepdate[1];
			 }
	$query=$this->db->query("select ride.*,user.first_name,user.last_name,user.images,user.age from ride LEFT JOIN user on ride.user_id=user.id where departure like '%".$from."%' and arrival like '%".$to."%' and departureDate like '%".@$impDepDate."%' order by id desc limit 10 ");
	
	$data['ride']=$query->result_array();
//echo $this->db->last_query(); exit; 
     // echo $this->db->last_query(); exit;


		$this->load->view('admin/searchRide',$data); 
	
	}
	
	public function about_us_page(){
	
	$query=$this->db->query("select * from about_us");
	$data['about_us']=$query->result_array();
	
	$this->load->view('admin/header.php');
	$this->load->view('admin/about_us.php',$data);
	$this->load->view('admin/footer.php');
 
	
	
	}
	public function about_us_update(){
	
	
	
				$query1=$this->db->query("update about_us set heading='".$_POST['heading']."',content='".$_POST['content']."' ");
				if($query1){
				
				redirect('admin/about_us_page');
				
				}
 
	}
	public function query_list(){
	
	$query=$this->db->query("select * from contact_us");
	$data['rider']=$query->result_array();
	
	$this->load->view('admin/header.php');
	$this->load->view('admin/list_query.php',$data);
	$this->load->view('admin/footer.php');
 
	
	
	}
	
		public function send_mail_page(){
		
    $query=$this->db->query("select * from user");
	
	$data['user']=$query->result_array();
	
	$this->load->view('admin/header.php');
	$this->load->view('admin/send_mail.php',$data);
	$this->load->view('admin/footer.php');
	
	
    }
	
	public function send_mail(){
			
			//$data['first_name']=$this->input->post('first_name');
			
			$subject==$this->input->post('subject');
			
			echo $subject ; exit;
			
			$email==$this->input->post('email');
			
			$msg==$this->input->post('msg');
			
			//data['password']=$this->input->post('password');
			
			//$data['ph_number']=$this->input->post('ph_number');
				
		    //$this->load->model('User_model');
			
			//$this->User_model->insertUser($data);
			
			//$_SESSION['new_user']=$this->input->post('email');
			
			$config = Array( 
			'protocol' => 'smtp', 
			'smtp_host' => 'ssl://smtp.googlemail.com', 
			'smtp_port' => 465, 
			'smtp_user' => 'adeeba.firemoon@gmail.com', 
			'smtp_pass' => 'ossmossm@999', ); 
			
			$this->load->library('email', $config); 
			$this->email->set_newline("\r\n");
			$this->email->from('adeeba.firemoon@gmail.com', 'adeeba');
			$this->email->to("$email");
			$this->email->subject("$subject"); 
			$this->email->message("$msg");
			
			if (!$this->email->send())
						{
						show_error($this->email->print_debugger());
						}
						
						else {
						 $this->session->set_flashdata('msg','<div class="notification-error"><div class="box-container">Your message has been sent to all Users!!!</div></div>');
									redirect('Admin/send_mail');
						}
						
						}
						public function logout(){
			
			unset($_SESSION);
			$this->session->sess_destroy();
			
         	redirect('admin');
			
			}	

}