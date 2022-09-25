<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Signup_model extends Model {

    
	public function passwordhash($password)
	{
		$options = array(
		'cost' => 4,
		);
		return password_hash($password, PASSWORD_BCRYPT, $options);
	}

	public function register($username, $password, $email, $token, $fname, $mname, $lname, $user_type)
	{
		$data = array(
			'username' => $username,
			'password' => $this->passwordhash($password),
			'email' => $email,
			'token' => $token,
			'fname' => $fname, 
			'mname' => $mname, 
			'lname' => $lname,
			'user_role' => $user_type
		);
		return $this->db->table('user')->insert($data);
	}


}

?>