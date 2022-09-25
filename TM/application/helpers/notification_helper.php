<?php 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Set an alert message on your controller using set_flash_alert() function.
 */
if ( ! function_exists('set_flash_alert'))
{
	function set_flash_alert($alert, $message) {
		$LAVA =& lava_instance();
		$LAVA->session->set_flashdata(array('alert' => $alert, 'message' => $message));
	}
}

/**
 * Display the alert message in your view using flash_alert() function.
 */
if ( ! function_exists('flash_alert'))
{
	function flash_alert()
	{
		$LAVA =& lava_instance();
		if($LAVA->session->flashdata('alert') !== NULL) {
			echo '
	        <div class="alert alert-' . $LAVA->session->flashdata('alert') . ' alert-dismissible fade show" role="alert">
	            <button type="button" class="close" data-dismiss="alert">&times;</button>
	            ' . $LAVA->session->flashdata('message') . '
	        </div>';
		}
	}
}


?>