<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Login_model extends Model {

	public function login($email, $password)
	{				
    	$row = $this->db->table('user') 					
    					->where('email', $email)
    					->get();
		if($row)
		{
			if(password_verify($password, $row['password'])) {
				return $row;
			} else {
				return false;
			}
		}
	}

	public function is_user_verified($email) {
		$this->db->table('user')
				->where('email', $email)
				->where('status', 1)
				->get();
		return $this->db->row_count();
	}

}

?>