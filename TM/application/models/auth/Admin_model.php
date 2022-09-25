<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Admin_model extends Model {

	public function auth($email, $password)
	{				
    	$row = $this->db->table('admin') 					
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


}

?>