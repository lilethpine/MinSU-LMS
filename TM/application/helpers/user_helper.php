<?php 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');



/**
 * Check if user is logged in
 */
if ( ! function_exists('is_logged_in'))
{
	//check if user is logged in
	function is_logged_in() {
		$LAVA =& lava_instance();
		if($LAVA->session->userdata('logged_in') == 1)
			return true;
	}
}

/**
 * 
 */
if ( ! function_exists('check_logged_in_user_type'))
{
    function check_logged_in_user_type()
    {
        if($this->session->userdata('user_type') == "instructor")
            redirect('Main');
        elseif($this->session->userdata('user_type') == "student")
            redirect('Student');
        elseif($this->session->userdata('user_type') == "guest")
            redirect('Guest');
        elseif($this->session->userdata('user_type') == "RDE")
            redirect('Research');
        elseif($this->session->userdata('user_type') == "admin")
            redirect('Main');
        else
            redirect('Access');
    }
}


/**
 * 
 */
if ( ! function_exists('user_type_instructor'))
{
    function user_type_instructor()
    {
        if($this->session->userdata('user_type') != "instructor")
            check_logged_in_user_type();
    }
}

/**
 * 
 */
if ( ! function_exists('user_type_student'))
{
    function user_type_student()
    {
        if($this->session->userdata('user_type') != "student")
            check_logged_in_user_type();
    }
}

/**
 * 
 */
if ( ! function_exists('user_type_guest'))
{
    function user_type_guest()
    {
        if($this->session->userdata('user_type') != "guest")
            check_logged_in_user_type();
    }
}

/**
 * 
 */
if ( ! function_exists('user_type_RDE'))
{
    function user_type_RDE()
    {
        if($this->session->userdata('user_type') != "RDE")
            check_logged_in_user_type();
    }
}

/**
 * 
 */
if ( ! function_exists('user_type_admin'))
{
    function user_type_admin()
    {
        if($this->session->userdata('user_type') != "admin")
            check_logged_in_user_type();
    }
}




?>