<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student_model extends Model 
{
	public function __construct()
	{
		parent::__construct();
        $this->call->database();
	}

	public function get_students($course_id)
	{
		return $this->db->table('student_course as sc')
						->select('sc.course_id, sc.user_id, u.user_id, u.lname, u.mname, u.fname')
						->inner_join('user as u', 'u.user_id = sc.user_id')
						->where('sc.course_id',$course_id)
						->get_all();
	}

	public function get_course($user_id)
	{
		return $this->db->table('student_course as sc')
						->select('sc.course_id, c.course_id, c.course_code, c.course_description, sc.user_id, u.user_id, u.lname, u.mname, u.fname')
						->inner_join('user as u', 'u.user_id = sc.user_id')
						->inner_join('course as c', 'c.course_id = sc.course_id')
						->where('sc.user_id',$user_id)
						->get_all();
	}

	public function join_course($user_id, $code, $date_join) {
		$course = $this->db->table('course')->select('course_id')->where('code', $code)->get();

		if($course){
			$data = [
				'user_id' => $user_id,
				'join_status' => 1,
				'course_id' => $course['course_id'],
				'date_join' => $date_join
			];

			$is_joined = $this->db->table('student_course')
							->select('user_id')
							->where('user_id = ? and course_id = ? and join_status = ?', [$user_id, $course['course_id'], 1])
							->get();
			if(!$is_joined){
				$joined = $this->db->table('student_course')->insert($data);

				if($joined) return true;
				else return false;
			}		
		}
	}

	public function submit_act($cou_act_id, $user_id, $attachments, $date_submitted){
		
		$data = [
			'cou_act_id' => $cou_act_id,
			'user_id' => $user_id,
			'attachments' => $attachments,
			'date_submitted' => $date_submitted,
			'submission_status' => 1,
		];

		$result = $this->db->table('course_activity_stud_response')->insert($data);
	}



}
?>
