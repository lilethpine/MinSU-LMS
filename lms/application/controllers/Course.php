<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Course Controller
 * 1. Add Course
 * 2. Course Settings
 * 3. Grading System (Criteria)
 * 4. Batch Grading (Midterm, Final, etc..)
 * 5. 
 */
class Course extends Controller {

    public function __construct() {
      parent:: __construct();

      if(!is_logged_in())
      {
        redirect('Access');
      }
      user_type_instructor();
    }

    public function all_courses()
    {
      
      $this->call->model('Course_model','course');

      //save course
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('code')->required()
          ->name('course_code')->required()
          ->name('course_description')->required()
          ->name('units')->required()
          ->name('room')->required()
          ->name('section')->required()
          ->name('schedule')->required()
          ->name('semester')->required()
          ->name('academic_year')->required();
          
        if($this->form_validation->run())
        {

          $data['user_id'] = $this->session->userdata('user_id');

          $data['code'] = $this->io->post('code');
          $data['prog_id'] = $this->io->post('prog_id');
          $data['course_code'] = $this->io->post('course_code');
          $data['course_description'] = $this->io->post('course_description');
          $data['units'] = $this->io->post('units');
          $data['room'] = $this->io->post('room');
          $data['section'] = $this->io->post('section');
          $data['schedule'] = $this->io->post('schedule');
          $data['semester'] =  $this->io->post('semester');
          $data['academic_year'] = $this->io->post('academic_year');

          if($this->course->create_course($data))
          {
            set_flash_alert('success', 'Course created successfully!');
          }
        } 
        else 
        {
          set_flash_alert('danger', $this->form_validation->errors());
        } 
      }

      //load courses
      $data['courses'] = $this->course->get_course();

      $this->call->view('course/course_list_view', $data);
    }

    public function edit_course()
    {
      
      $this->call->model('Course_model','course');

      //edit course
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('code')->required()
          ->name('course_code')->required()
          ->name('course_description')->required()
          ->name('units')->required()
          ->name('room')->required()
          ->name('section')->required()
          ->name('schedule')->required()
          ->name('semester')->required()
          ->name('academic_year')->required();
          
        if($this->form_validation->run())
        {

          $data['user_id'] = $this->session->userdata('user_id');

          $data['code'] = $this->io->post('code');
          $data['prog_id'] = $this->io->post('prog_id');
          $data['course_code'] = $this->io->post('course_code');
          $data['course_description'] = $this->io->post('course_description');
          $data['units'] = $this->io->post('units');
          $data['room'] = $this->io->post('room');
          $data['section'] = $this->io->post('section');
          $data['schedule'] = $this->io->post('schedule');
          $data['semester'] =  $this->io->post('semester');
          $data['academic_year'] = $this->io->post('academic_year');

          if($this->course->create_course($data))
          {
            set_flash_alert('success', 'Course created successfully!');
          }
        } 
        else 
        {
          set_flash_alert('danger', $this->form_validation->errors());
        } 
      }

      //load courses
      $data['courses'] = $this->course->get_course();

      $this->call->view('course/course_list_view', $data);
    }

    //view course
    public function view($course_id)
    {
      if(!empty($course_id)){

        $this->call->model('Course_model','course');
        $this->call->model('Announcement_model', 'announcement');
        $this->call->model('Activity_model', 'course_act');
        $this->call->model('Topic_model', 'topic');
        $this->call->model('Materials_model', 'material');
        $this->call->model('Student_model', 'course_students');

        //load the course
        $data['course'] = $this->course->get_the_course_info($course_id);
        //load announcement
        $data['announce'] = $this->announcement->get_class_announce($course_id);
        //load activity
        $data['activities'] = $this->course_act->get_class_activity($course_id);
        //load topic
        $data['topics'] = $this->topic->get_class_topic($course_id);
        //load material
        $data['materials'] = $this->material->get_class_material($course_id);
        //view students
        $data['students'] =$this->course_students->get_students($course_id);
        //view instructor
        $data['instructor'] =$this->course->get_instructor($course_id);

        $this->call->view('course/course_view', $data);

      }
    }
    //delete course
    public function delete_course()
    {
      
    }
}
?>