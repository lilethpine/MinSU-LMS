<?php 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


/**
 * Get activities of this topic
 */
if ( ! function_exists('topic_activities'))
{
	function topic_activities($topic_id) {
		$LAVA =& lava_instance();
		return $LAVA->db->table('course_activity')
        ->where('cou_topic_id', $topic_id)
        ->get_all();
	}
}

/**
 * Get all topics
 */
if ( ! function_exists('topics'))
{
	function topics() {
		$LAVA =& lava_instance();
		return $LAVA->db->table('course_topic')->get_all();
	}
}

?>