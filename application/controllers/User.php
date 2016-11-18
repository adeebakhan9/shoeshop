<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	
	$this->load->model('user_model');
	$data['val']=$this->user_model->userDetails();
	
	
	
		$this->load->view('user/header.php');
		$this->load->view('user/edit_user.php',$data);
		$this->load->view('user/footer.php');
	}
	
	
	
	public function update_user_table(){
					$this->load->library('upload');
						
					$directory="upload/profilePic/"; 
					$filename=$_FILES["images"]["name"]; 
					$tempath=$_FILES["images"]["tmp_name"]; 
					$upload_path=$directory.$filename;
			
		$data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'ph_number' => $this->input->post('ph_number'),
                'images' => $filename,
                'location' => $this->input->post('address'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'pincode' => $this->input->post('pincode'),
            );
	
       move_uploaded_file($tempath,$upload_path);

	$this->load->model('user_model');
	$this->user_model->updateUserDetails($data);
	
	
}

public function uploadePhotoPage(){

$this->load->model('user_model');
$data['val']=$this->user_model->userDetails();

	        $this->load->view('user/header.php');
		$this->load->view('user/photo.php',$data);
		$this->load->view('user/footer.php');


}

public function updatePhoto(){

  $this->load->library('upload');
    			
$directory="upload/profilePic/"; 
$filename=$_FILES["images"]["name"]; 
$tempath=$_FILES["images"]["tmp_name"]; 
$upload_path=$directory.$filename;

$data = array(
               
               'images' => $filename,
                
            );
	
	  
 move_uploaded_file($tempath,$upload_path);

	$this->load->model('user_model');
	$this->user_model->updatePhoto($data);

}


public function postalAddressPage(){

		$this->load->model('user_model');
		$data['val']=$this->user_model->userDetails();
	
                $this->load->view('user/header.php');
		$this->load->view('user/postalAddress.php',$data);
		$this->load->view('user/footer.php');

}


public function updatePostalAaddress(){

$data = array(
              
              
                'location' => $this->input->post('address'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'pincode' => $this->input->post('pincode'),
            );
	
	  


	$this->load->model('user_model');
	$this->user_model->updatePostalAddress($data);
	



}


public function carPage(){
 $query=$this->db->query("select * from car where userID='".$_SESSION['user_id']."'");
 
 $data['carCheck']=$row=$query->num_rows();
 
		$this->load->view('user/header.php');
		$this->load->view('user/car.php',$data);
		$this->load->view('user/footer.php');



}

public function verificationPage(){

	$this->load->model('user_model');
	$data['val']=$this->user_model->userDetails();
	
		$this->load->view('user/header.php');
		$this->load->view('user/verification.php',$data);
		$this->load->view('user/footer.php');



}

public function addCar(){

  $this->load->library('upload');
    			
$directory2="upload/car/"; 

$filename2=$_FILES["image"]["name"]; 
$tempath2=$_FILES["image"]["tmp_name"]; 
$upload_path2=$directory2.$filename2;


			$data=array();
			$data['carName']=$this->input->post('carName');
			$data['model']=$this->input->post('model');
			$data['comfort']=$this->input->post('comfort');
			$data['seats']=$this->input->post('seats');
			$data['color']=$this->input->post('color');
			$data['type']=$this->input->post('type');
			$data['userID']=$_SESSION['user_id'];
			$data['images']=$filename2;
			
 move_uploaded_file($tempath2,$upload_path2);
 $query=$this->db->query("select * from car where userID='".$_SESSION['user_id']."'");
 $data['carCheck']=$row=$query->num_rows();
				
if($row>0){ 
 $query=$this->db->query("update car set carName='".$data['carName']."',model='".$data['model']."',comfort='".$data['comfort']."',seats='".$data['seats']."',color='".$data['color']."',type='".$data['type']."',images='".$filename2."' where userID='".$_SESSION['user_id']."'");
 }
else{
$this->load->model('User_model');
			$this->User_model->addCar($data);
}
			
			

}
public function carDetailsPage(){


$this->load->model('user_model');
	$data['val']=$this->user_model->carDetails();


			$this->load->view('user/header.php');
			$this->load->view('user/carDetails.php',$data);
			$this->load->view('user/footer.php');


}

public function deleteCar($param=NULL){


$result=$this->db->query("delete from car where id='".$param."' ");

if($result){

redirect('User/carDetailsPage');

}

}

public function offerRidePage(){


			$this->load->view('user/header.php');
			$this->load->view('user/offerRide.php');
			$this->load->view('user/footer.php');


}



public function addRide(){

$data=array();
 $array=$this->input->post('city');
  $city=implode(",",$array);
 
	$arrDate=$this->input->post('arrivalDate');
	$expArrdate=explode("/",$arrDate);
	$impArrDate=$expArrdate[2].'-'.$expArrdate[0].'-'.$expArrdate[1];
	
	$depDate=$this->input->post('departureDate');
	$expDepdate=explode("/",$depDate);
	$impDepDate=$expDepdate[2].'-'.$expDepdate[0].'-'.$expDepdate[1];
	 //echo $impArrDate; exit;
			$data['departure']=$this->input->post('departure');
			$data['arrival']=$this->input->post('arrival');
			$data['stops']=$city;
	        $data['departureDate']=$impDepDate;
			
	        $data['departureTime']=$this->input->post('departureTime');
	        $data['arrivalDate']=$impArrDate;
		    $data['arrivalTime']=$this->input->post('arrivalTime');
		    $data['tripType']=$this->input->post('tripType');
			  $data['rideDetails']=$this->input->post('rideDetails');  
			  $data['luggageSize']=$this->input->post('luggageSize');  
			  $data['seatOffered']=$this->input->post('quant[1]');  
			  $data['pricePerCoTraveller']=$this->input->post('quanttwo[1]');
			 $data['backSeat']=$this->input->post('backSeat');
			 	 $data['leavingAt']=$this->input->post('leavingAt');
				 	 $data['detour']=$this->input->post('detour');
			$data['user_id']=$_SESSION['user_id'];

			$this->load->model('User_model');
			$result=$this->User_model->addRide($data);
			
		//echo $this->db->last_query(); exit;
			
        if($result)	{
		
		redirect('User/offerRidePage');
		
		
		}
}

public function rideOffered(){

	$this->load->model('User_model');
	$data['val']=$this->User_model->rideOfferedDetails();

	$this->load->view('user/header.php');
	$this->load->view('user/rideOffered.php',$data);
	$this->load->view('user/footer.php');



}
 public function viewRide($param=NULL){
 
 	$query=$this->db->query("select * from ride where id ='".$param."' ");
 //$this->load->model('User_model');
	$data['val']=$query->result_array();
	//print_r($data); exit;

	$this->load->view('user/header.php');
	$this->load->view('user/viewRide.php',$data);
	$this->load->view('user/footer.php');
 
 }
  public function inbox(){
 
 $query=$this->db->query("select * from messaging where msg_to='".$_SESSION['user_id']."' or msg_from='".$_SESSION['user_id']."'");
 
// foreach($query as $val){
 //$msgId=echo $val['id'];
 
// }
 //$query2=$this->db->query("select * from conversation where msg_id='".$msgId."' ");
// $rows=$query2->num_rows();
 //$this->load->model('User_model');
	$data['msg']=$query->result_array();
	//print_r($data); exit;

	$this->load->view('user/header.php');
	$this->load->view('user/inbox.php',$data);
	$this->load->view('user/footer.php');
 
 }
 public function conversation($param1=NULL,$param2=NULL){
 
  $query=$this->db->query("select * from conversation where msg_id='".$param1."'");
 // echo $this->db->last_query(); exit;
    $data['msg']=$result=$query->result_array();
	
	$this->load->view('user/header.php');
	$this->load->view('user/conversation.php',$data);
	$this->load->view('user/footer.php');
	
 
 }
 
 public function reply(){
 
$msg_to=$this->input->post('msg_to');
$msg=$this->input->post('msg');
$msg_id=$this->input->post('msg_id');
//$date=date('Y-m-d');
//echo $msg_to; exit;
  $query=$this->db->query("INSERT INTO `conversation`(`msg_from`, `msg_to`,`msg_id`, `msg` ) VALUES ('".$_SESSION['user_id']."','".$msg_to."','".$msg_id."','".$msg."') ");
  
   $query1=$this->db->query("select * from conversation where msg_id='".$msg_id."' ");
   
  $data['msg']=$query1->result_array();
 // echo $this->db->last_query();
 $this->load->view('user/mssg_result.php',$data);
 }
}

