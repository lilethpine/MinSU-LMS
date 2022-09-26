
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Activity_model extends Model 
{
	public function __construct()
	{
		parent::__construct();
        	$this->call->database();
	}
 
	public function create_activity($user_id,$course_id,$cou_topic_id,$act_title,$act_desc,$due_date,$date_posted,$act_attachments) 
	{
		$data = array(
			'user_id' => $user_id,
			'course_id' => $course_id,
			'cou_topic_id' => $cou_topic_id,
			'act_title' => $act_title,
			'act_desc' => $act_desc,
			'due_date' => $due_date,
			'date_posted' => $date_posted,
			'act_attachments' => $act_attachments
		);
        	return $this->db->table('course_activity')->insert($data);
	}

	public function get_class_activity($course_id)
	{
		return $this->db->table('course_activity as ca')
						->select('ca.cou_act_id, ca.course_id, ca.user_id, c.course_description, c.course_code, ca.act_title, ca.act_desc, ca.act_attachments, ca.act_status, ca.due_date, ca.date_posted, u.fname, u.mname, u.lname')
						->inner_join('course as c', 'ca.course_id = c.course_id')
						->inner_join('user as u', 'ca.user_id = u.user_id')
						->where('c.course_id', $course_id)
						->order_by('ca.cou_act_id', 'DESC')
						->get_all();
	}

	public function get_act_info($act_id){
		return $this->db->table('course_activity')
						->select('*')
						->where('cou_act_id', $act_id)
						->get();
	}


}
?>
