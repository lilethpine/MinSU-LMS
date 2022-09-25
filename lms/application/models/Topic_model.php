
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Topic_model extends Model 
{
	public function __construct()
	{
		parent::__construct();
        	$this->call->database();
	}
 
	public function create_topic($data) 
	{
        return $this->db->table('course_topic')->insert($data);
	}

    public function get_class_topic($course_id)
	{
		return $this->db->table('course_topic')
						->select('*')
						->where('course_id', $course_id)
						->get_all();
	}


}
?>
