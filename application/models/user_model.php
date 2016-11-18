<?php
class User_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    //insert into user table
    function insertUser($data)
    {
        return $this->db->insert('user', $data);
		
			
			
    }
	
	 function verifyEmailID($email)
    {
      return $this->db->query("update user set confirmation='1' where email='".$email."'");
    }
    
    
    function userDetails(){
   
	$query=$this->db->query("select * from user where id ='".$_SESSION['user_id']."' ");
	return  $query->result_array();
    }
    
    function updateUserDetails($userDetails){
    
    	
    	
		$result=$this->db->query("update user set first_name='".$userDetails['first_name']."',last_name='".$userDetails['last_name']."',email='".$userDetails['email']."',ph_number='".$userDetails['ph_number']."' where id='".$_SESSION['user_id']."'");      
		//echo $this->db->last_query(); exit;
		
		
		}
		
	function updatePhoto($profilePhoto){
	
	$result=$this->db->query("update user set images='".$profilePhoto['images']."' where id='".$_SESSION['user_id']."'");
	
	
	if($result)	{
		
		redirect('User');
		
		
		}
	
	}
	
	function updatePostalAddress($userDetails){
	
	
		$result=$this->db->query("update user set location='".$userDetails['location']."',country='".$userDetails['country']."',state='".$userDetails['state']."',city='".$userDetails['city']."',pincode='".$userDetails['pincode']."' where id='".$_SESSION['user_id']."'");
		
		if($result)	{
		
		redirect('User');
		
		
		}
	
	
	
	}
	
    
    function personalDetails(){
  // $query2=$this->db->query("select ride.user_id, user.first_name,user.last_name from ride Left JOIN user on ride.user_id=user.id where ride.id='".$rideID."'");
	$query=$this->db->query("select user.*,address.shipping_add,address.shipp_country,address.shipp_city, address.shipp_zip,address.home_add,address.office_add,address.country,address.city,address.zip from user left join address on user.id=address.user_id where user.id='".$_SESSION['user_id']."' ");
//	echo $this->db->last_query(); exit; 
	return  $query->result_array();
    }
	
	function addRide($data)
    {
        return $result=$this->db->insert('ride', $data);
		
    }	
	
	function rideOfferedDetails(){
	
		$query=$this->db->query("select * from ride where user_id ='".$_SESSION['user_id']."' ");
	return  $query->result_array();
	}
	function viewRideDetails($rideId){
	
		$query=$this->db->query("select * from ride where id ='".$rideId."' ");
		//echo $this->db->last_query(); exit;
	return  $query->result_array();
	}
    	
}
?>
