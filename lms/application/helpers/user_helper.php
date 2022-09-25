<?php 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Check if user is logged in
 */
if ( ! function_exists('show'))
{
	//check if user is logged in
	function show($data) {
		echo "<pre>";
        print_r($data);
        echo "</pre>";
	}
}

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
        $LAVA =& lava_instance();
        if($LAVA->session->userdata('user_type') == "instructor")
            redirect('main');
        elseif($LAVA->session->userdata('user_type') == "student")
            redirect('student');
        elseif($LAVA->session->userdata('user_type') == "guest")
            redirect('guest');
        elseif($LAVA->session->userdata('user_type') == "RDE")
            redirect('research');
        elseif($LAVA->session->userdata('user_type') == "admin")
            redirect('administrator');
        else
            redirect('access');
    }
}


/**
 * 
 */
if ( ! function_exists('user_type_instructor'))
{
    function user_type_instructor()
    {
        $LAVA =& lava_instance();
        if($LAVA->session->userdata('user_type') != "instructor")
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
        $LAVA =& lava_instance();
        if($LAVA->session->userdata('user_type') != "student")
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
        $LAVA =& lava_instance();
        if($LAVA->session->userdata('user_type') != "guest")
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
        $LAVA =& lava_instance();
        if($LAVA->session->userdata('user_type') != "RDE")
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
        $LAVA =& lava_instance();
        if($LAVA->session->userdata('user_type') != "admin")
            check_logged_in_user_type();
    }
}




?>