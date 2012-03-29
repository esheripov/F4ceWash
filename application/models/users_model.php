<?php
class users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function addToKitchen($userId, $foodName, $weight, $protein, $carbs, $fat, $cholesterol, $sugar, $calories, $bkf, $lunch, $dinner, $snack)
	{
		$data = array('user_id' => $userId, 'food_id' => 0, 'weight' => $weight, 'exp_date' => 0.0, 'breakfast' => $bkf, 'lunch' => $lunch, 'dinner' => $dinner, 'snack' => $snack,
		'cheater_meal' => 0, 'food_name' => $foodName, 'calories' => $calories, 'carbohydrates' => $carbs, 'proteins' => $protein, 'fats' => $fat, 'sugars' => $sugar, 'cholesterol' => $cholesterol);
		if($this -> db -> insert('user_private_inventories', $data)) return true; 
		else return false; 
	}
	public function loadUserKitchen($userId)
	{
		$query = $this->db->get_where('user_private_inventories', array('user_id' => $userId));
		return $query; 
	}
	public function addUser($user, $email, $pwd, $weight, $height, $bodyType)
	{
		$query = $this->db->get_where('user_profiles', array('username' => $user, 'email' => $email));
		
		/* user already exits return false */
		foreach ($query -> result() as $row)
		{
			return false; 	
		} 	
			
		$data = array('email' => $email, 'username' => $user, 'password' => $pwd, 'height' => $height, 'weight' => $weight, 'sex' => 0, 'body_type' => 'na'); 
		if($this -> db -> insert('user_profiles', $data)) return true; 
		else return false; 
	}
	public function loadMealHistory($userId)
	{
		$query = $this->db->get_where('meal_histories', array('user_id' => $userId));
		return $query; 
	}	
	public function checkLoginCredentials($user, $pwd)
	{
		$query = $this->db->get_where('user_profiles', array('username' => $user, 'password' => $pwd));
		foreach ($query -> result() as $row)
		{
			return true; 	
		} 
		return false; 
	}
	public function sendUserRegConfirmation($user, $email, $pwd)
	{
		// notify team 
		$to = "fat_diet@hotmail.com";
		$subject = 'F.A.T User Registration Notification';
		$headers = "From:  fat_diet@hotmail.com \r\n";
		$headers .= "Reply-To: fat_diet@hotmail.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message = '<html><body>';
		$message .= '<h1></h1>';
		$message .= '</body></html>';
		$message .= '<html><body>';
		$message .= '<div>'.$user.' has registered as a user with F.A.T .</div><br><br>';
		$message .= '<div><b>
					 F.A.T by D.I.E.T, LLC. <br>
		             "Food Administration Tool" <br>
		             W: fat_diet@hotmail.com <br><br>
		
		
		             CONFIDENTIALITY NOTICE: This E-Mail transmission (and/or the documents accompanying it) is for the sole use of the intended recipient(s) of Fresh Connection Brand 
		             and may contain information protected by the attorney-client privilege, the attorney-work-product doctrine or other applicable privileges or confidentiality laws or 
		             regulations. If you are not an intended recipient, you may not review, use, copy, disclose or distribute this message or any of the information contained in this 
		             message to anyone. If you are not the intended recipient, please contact the sender by reply e-mail and destroy all copies of this message and any attachments. <br>
		             - Thank You.<b></div><br><br><br>
					 
					 
					 <center>F.A.T by D.I.E.T, LLC. All rights reserved</center>'; 
		$message .= "</body></html>";
		
		mail($to,$subject,$message,$headers);
		
		// notify user
		$to = $email;
		$subject = 'F.A.T User Registration Confirmation';
		$headers = "From:  fat_diet@hotmail.com \r\n";
		$headers .= "Reply-To: fat_diet@hotmail.com \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message = '<html><body>';
		$message .= '<h1></h1>';
		$message .= '</body></html>';
		$message .= '<html><body>';
		$message .= '<div>Hi '.$user.', <br><br>
		
					 Thank you for registering with the F.A.T tool.
					 </div><br>
					 
					 <bold>Login Credentials:</bold><br>
					 username: '.$user.'<br>
					 password: '.$pwd.'<br><br>';
					 
		$message .= '<div><b>
					 F.A.T by D.I.E.T, LLC. <br>
		             "Food Administration Tool" <br>
		             W: fat_diet@hotmail.com <br><br>
		
		
		             CONFIDENTIALITY NOTICE: This E-Mail transmission (and/or the documents accompanying it) is for the sole use of the intended recipient(s) of Fresh Connection Brand 
		             and may contain information protected by the attorney-client privilege, the attorney-work-product doctrine or other applicable privileges or confidentiality laws or 
		             regulations. If you are not an intended recipient, you may not review, use, copy, disclose or distribute this message or any of the information contained in this 
		             message to anyone. If you are not the intended recipient, please contact the sender by reply e-mail and destroy all copies of this message and any attachments. <br>
		             - Thank You.<b></div><br><br><br>
					 
					 
					 <center>F.A.T by D.I.E.T, LLC. All rights reserved</center>'; 
		$message .= "</body></html>";
		
		mail($to,$subject,$message,$headers);
	}
	public function loadUserInventory()
	{
		
	}
	
	public function loadUserInfo($user)
	{
		$query = $this->db->get_where('user_profiles', array('username' => $user));
		return $query->row_array(); 
	}
	
	public function loadLargeInventory()
	{
		$query = $this->db->get('public_inventory');
		return $query; 
	}
	
	public function addToUserInventory()
	{
		
		
	}
	
	public function deleteFromUserInventory()
	{
		
		
	}
	
	/*public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
		public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
	}

	public function view($slug)
	{
		$data['news'] = $this->news_model->get_news($slug);
	}*/

}