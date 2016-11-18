<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	
	$query=$this->db->query("select ride.* ,user.first_name,user.last_name,user.images,user.age from ride LEFT JOIN user on ride.user_id=user.id");
	//$query=$this->db->query("select * from ride");
	//echo $this->db->last_query(); exit;
	$data['val']=$query->result_array();
	
	$this->load->view('home/header');
		$this->load->view('home/list',$data); 
			$this->load->view('home/footer');
			
	}
	
	
	public function rideList(){
	
	$query=$this->db->query("select ride.* ,user.first_name,user.last_name,user.images,user.age from ride LEFT JOIN user on ride.user_id=user.id") ;
	//$query=$this->db->query("select * from ride");
	//echo $this->db->last_query(); exit;
	$data['val']=$query->result_array();
	
	$this->load->view('home/header');
		$this->load->view('home/list',$data); 
			$this->load->view('home/footer');
			
	}
	
	public function search_ride(){

		 $to=$this->input->post('to');
		 	 $from=$this->input->post('from');
			 	
	$depDate=$this->input->post('depDate');
	if(!empty($depDate)){
	$expDepdate=explode("/",$depDate);
	$impDepDate=$expDepdate[2].'-'.$expDepdate[0].'-'.$expDepdate[1];
			 }
	$query=$this->db->query("select ride.*,user.first_name,user.last_name,user.images,user.age from ride LEFT JOIN user on ride.user_id=user.id where departure like '%".$from."%' and arrival like '%".$to."%' and departureDate like '%".@$impDepDate."%' ");
	
	$data['val']=$query->result_array();
//echo $this->db->last_query(); exit; 
     // echo $this->db->last_query(); exit;


		$this->load->view('home/searchRide',$data); 
	
	}
	
	 public function bookRide($param=NULL){
 
 

		$query=$this->db->query("select ride.* ,user.first_name,user.last_name,user.images,user.age,user.govID_status,user.ph_status,user.status from ride LEFT JOIN user on ride.user_id=user.id where ride.id='".$param."'");
	    $query1=$this->db->query("select SUM(seats) AS bookedSeats from booking where ride_id='".$param."'  ");
		
	$details=$data['val']=$query->result_array();
	
	
	$bookedseats=$query1->result();
	
	foreach( $details as $val1){
	
	$result2=$val1['seatOffered']; 
	//echo $result2=$val1->seatOffered ; exit;

}
	//echo $result2 ; 
	foreach($bookedseats as $val){
	
	$result=$val->bookedSeats;
	
	}
//echo $result ; exit;

$data['leftseats']=$result2-$result;


//echo $data['leftseats'] ; exit;

	$data['msg_to']=$param;

	$this->load->view('home/header.php');
	$this->load->view('home/bookRide.php',$data);
	$this->load->view('home/footer.php');
 
 }
 public function book($param=NULL){
  
  if(!empty($_SESSION['user_id'])){
  
  $ride_id= $this->uri->segment(3); 
  $seats= $this->input->post('seats');
  
  $query=$this->db->query("INSERT INTO `booking`(`user_id`, `ride_id`, `seats`, `date`) VALUES ('".$_SESSION['user_id']."','".$ride_id."','".$seats."','".date('Y-m-d')."') ");

  $this->session->set_flashdata('booking_successfull','<div class="notification-error"><div class="box-container">Booking Sucessfull Owner will contact you  within 3 hours!</div></div>');
  
  // redirect('Home/bookRide', 'refresh');
	header('Location:Home/search_ride');
  }
  else{
  
   redirect('main_template/loginPage');
   
  }
 

 
 }
 
 public function message($param=NULL){
 
 if(!empty($_SESSION['user_id'])){
 
		$ride_id= $this->uri->segment(3);
		$query=$this->db->query("select user_id from ride where id='".$ride_id."'");
		//echo $this->db->last_query(); exit;
		$result=$query->result_array();
  
  foreach($result as $val){
  $msg_to=$val['user_id'];
  }
  
// echo $msg_to ; exit;
		$header= $this->input->post('header');
		$msg= $this->input->post('msg');
		$date=date('Y-m-d');
		$query=$this->db->query("INSERT INTO `messaging`(`msg_from`, `msg_to`, `header`, `date`, `msg` ) VALUES ('".$_SESSION['user_id']."','".$msg_to."','".$header."','".$date."','".$msg."') ");
		
    $insert_id = $this->db->insert_id();
	
	   $query=$this->db->query("INSERT INTO `conversation`(`msg_from`, `msg_to`,`msg_id`, `date`, `msg` ) VALUES ('".$_SESSION['user_id']."','".$msg_to."','".$insert_id."','".$date."','".$msg."') ");
 //  echo $insert_id ; exit;
     $this->session->set_flashdata('msg_sent','<div class="notification-error"><div class="box-container">Your Message has been sent Sucessfull!</div></div>');
 }
 else{
 
 redirect('main_template/loginPage');
 
 }
 
 
 }
 
public function about_us(){

 $query=$this->db->query("select * from about_us");
 $data['content']=$query->result_array();
 
 
 	$this->load->view('home/header.php');
	$this->load->view('home/about_us.php',$data);
	$this->load->view('home/footer.php');
 
 }
 public function contact_us_page(){
 
 
 	$this->load->view('home/header.php');
	$this->load->view('home/contact_us.php');
	$this->load->view('home/footer.php');
 
 }
  public function contact_us(){
 
 $data=array();
 
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['comment']=$this->input->post('comment');
			
			
			$result=$this->db->insert('contact_us',$data);
		//echo	$this->db->last_query(); exit;
			if($result){
			 $this->session->set_flashdata('msg_sent','<div class="notification-success"><div class="box-container">Your Message has been sent Sucessfull!</div></div>');
			redirect('Home/contact_us_page');
			}
		
 
 }
 
}