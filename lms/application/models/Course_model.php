
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Course_model extends Model 
{
	public function __construct()
	{
		parent::__construct();
        $this->call->database();
	}
 
	public function create_course($data) 
	{
        return $this->db->table('course')->insert($data);
	}

	public function get_course()
	{
		return $this->db->table('course')
						->select('*')
						->get_all();
	}

	public function get_the_course_info($course_id)
	{
		return $this->db->table('course')
						->select('*')
						->where('course_id',$course_id)
						->get();
	}

	public function get_instructor($course_id)
	{
		return $this->db->table('course as c')
						->select('c.course_id, c.user_id, u.user_id, u.fname, u.mname, u.lname')
						->inner_join('user as u', 'u.user_id = c.user_id')
						->where('c.course_id', $course_id)
						->get_all();
	}
}
?>
