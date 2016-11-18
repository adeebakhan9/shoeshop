<?php
class Admin_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    function adminLogin($loginDetails){
    
  $query=$this->db->query("select * from admin where username='".$loginDetails['username']."' and password='".$loginDetails['password']."'"); 
   
  
   $row=$query->num_rows();
   $row1=$query->result();
   foreach($row1 as $val)
		{
		$id=$val->id; 
		}
   
   if($row>0){
   $_SESSION['admin_id']=$id; 
   redirect('Admin/Dashboard');
   
   }
   else{
   
   echo('Username Password Incorrect');
   }
  
    }
    
    
    //insert into user table
    function userList()
    {
      $query=$this->db->query("select * from user") ;
      return $query->result_array();
    }
	
	function carList()
    {
      $query=$this->db->query("select car.*, user.first_name,user.last_name from car LEFT JOIN user on car.userID=user.id") ;
      return $query->result_array();
    }
	
	function rideList()
    {
      $query=$this->db->query("select ride.*, user.first_name,user.last_name from ride LEFT JOIN user on ride.user_id=user.id") ;
      return $query->result_array();
    }
	function riderList()
    {
      $query=$this->db->query("select booking.*, user.first_name,user.last_name from booking LEFT JOIN user on booking.user_id=user.id") ;
	  // echo $this->db->last_query(); exit;
	  $result=$query->result_array();
	  
	    return $result ; 
		
	 
	
    }
	function ownerList(){
	
	 $query=$this->db->query("select booking.*, user.first_name,user.last_name from booking LEFT JOIN user on booking.user_id=user.id") ;
//	  echo $this->db->last_query(); exit;
	  $result=$query->result_array();
	  
		
	//  print_r($result); exit;
	
	  foreach($result as $val){
	  
	  $rideID=$val['ride_id'];
	
  
	// print_r($rideID); exit;
	  }
	  
      $query2=$this->db->query("select ride.user_id, user.first_name,user.last_name from ride Left JOIN user on ride.user_id=user.id where ride.id='".$rideID."'");
	  
	//  echo $this->db->last_query(); exit;
	  
	  return $result=$query2->result_array();
	
	}
	function blockUser($userID){
	
	$query=$this->db->query("update user set status='1' where id='".$userID."'"); 
	
	if($query){
	
	redirect('Admin/userList');
	
	}
	
	}
    
}
?>
