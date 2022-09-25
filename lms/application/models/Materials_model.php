
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Materials_model extends Model 
{
	public function __construct()
	{
		parent::__construct();
        	$this->call->database();
	}
 
	public function create_material($user_id,$course_id,$cou_topic_id,$mat_title,$mat_desc,$date_posted,$mat_attachments) 
	{
		$data = array(
			'user_id' => $user_id,
			'course_id' => $course_id,
			'cou_topic_id' => $cou_topic_id,
			'mat_title' => $mat_title,
			'mat_desc' => $mat_desc,
			'date_posted' => $date_posted,
			'mat_attachments' => $mat_attachments
		);
        	return $this->db->table('course_material')->insert($data);
	}

	public function get_class_material($course_id)
	{
		return $this->db->table('course_material as cm')
						->select('cm.cou_mat_id, cm.course_id, cm.user_id, c.course_description, c.course_code, cm.mat_title, cm.mat_desc, cm.mat_attachments, cm.mat_status, cm.date_posted, u.fname, u.mname, u.lname')
						->inner_join('course as c', 'cm.course_id = c.course_id')
						->inner_join('user as u', 'cm.user_id = u.user_id')
						->where('c.course_id', $course_id)
						->order_by('cm.cou_mat_id', 'DESC')
						->get_all();
	}

}
?>
