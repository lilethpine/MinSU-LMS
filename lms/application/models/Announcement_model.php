
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Announcement_model extends Model 
{
	public function __construct()
	{
		parent::__construct();
        	$this->call->database();
	}
 
	public function create_announcement($data) 
	{
        	return $this->db->table('course_announcement')->insert($data);
	}

	public function get_class_announce($course_id)
	{
		return $this->db->table('course_announcement as ca')
						->select('ca.cou_ann_id, ca.course_id, ca.user_id, c.course_description, c.course_code, ca.title, ca.content, ca.ann_status, ca.date_posted, u.fname, u.mname, u.lname')
						->inner_join('course as c', 'ca.course_id = c.course_id')
						->inner_join('user as u', 'ca.user_id = u.user_id')
						->where('c.course_id', $course_id)
						->order_by('ca.cou_ann_id', 'DESC')
						->get_all();
	}

}
?>
