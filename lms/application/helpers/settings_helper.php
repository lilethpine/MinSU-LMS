<?php 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


/**
 * Get all programs
 */
if ( ! function_exists('programs'))
{
	function programs() {
		$LAVA =& lava_instance();
		return $LAVA->db->table('program')->get_all();
	}
}

/**
 * Get SEM
 */
if ( ! function_exists('sem'))
{
	function sem() {
		$LAVA =& lava_instance();
		return $LAVA->db->table('settings')->select('semester')->get()['semester'];
	}
}

/**
 * Get AY
 */
if ( ! function_exists('ay'))
{
	function ay() {
		$LAVA =& lava_instance();
		return $LAVA->db->table('settings')->select('academic_year')->get()['academic_year'];
	}
}

?>