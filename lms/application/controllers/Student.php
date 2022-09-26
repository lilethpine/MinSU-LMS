<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Student Controller
 * Home Page for Students
 * 1. View Courses
 * 2. Joining of Students
 * 3. Announcement Comments
 * 4. Activity Add Comment
 * 5. Activity Student Response / Submit
 * 6. Group Joining
 * 7. View Materials
 * 8. View Topics
 * 9.
 */
class Student extends Controller {

    public function __construct() {
      parent:: __construct();
      
      if(!is_logged_in())
      {
        redirect('Access');
      }
        
      user_type_student();

    }

    public function index() 
    {
      $user_id = $_SESSION['user_id'];
      $this->call->model('Student_model');
        
      $data['courses'] = $this->Student_model->get_course($user_id);
      $this->call->view('main_view' , $data);
      
    }
    public function all_courses() 
    {
      $user_id = $_SESSION['user_id'];
      $this->call->model('Student_model');

      $data['courses'] = $this->Student_model->get_course($user_id);
      $this->call->view('course/course_list_view' , $data);
      
    }

    public function join_course() 
    {
      
      $this->call->model('Student_model');

      //save material
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('code')->required();
          
        if($this->form_validation->run())
        {
          $user_id = $this->session->userdata('user_id');
          $code = $this->io->post('code');
		      $date_join = date("Y-m-d h:i:s a");
          
          if($this->Student_model->join_course($user_id, $code, $date_join))
          {
            set_flash_alert('success', 'Joining class successful!');
          }
        } 
        else 
        {
          set_flash_alert('danger', $this->form_validation->errors());
        }
        
        redirect('student/all_courses/');

      }
    }

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
    
    public function view_act($act_id=null) 
    {
      if(!empty($act_id))
      {
        $this->call->model('Activity_model');

        $data['activity'] = $this->Activity_model->get_act_info($act_id);

        $this->call->view('course/course_act_view', $data);
      }
    }

    public function submit_act()
    {
      

      //save activity submission
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('cou_act_id')->required();
          
        if($this->form_validation->run())
        {
          $user_id = $this->session->userdata('user_id');
          $cou_act_id = $this->io->post('cou_act_id');
		      $date_submitted = date("Y-m-d h:i:s a");
          
          $attachments = null;
          if ($_FILES["attachments"]['tmp_name'] != '' or $_FILES["attachments"]['name'] != '' ) {
            $this->call->library('upload', $_FILES["attachments"]);
            $this->upload->max_size(12)
                  ->set_dir('public/uploads/submitted_activity/')
                  ->allowed_extensions(array('docx','doc','pdf'))
                  ->encrypt_name(); //encrypted filename
            if($this->upload->do_upload()) { // 2 params ang do_upload, overwrite at no_extension.nakafalse parehas by default
              $attachments = $this->upload->get_filename();
            } else {
              $err = '';
              foreach($this->upload->get_errors() as $error) {
                $err = $err . ', ' . $error . '<br>';
              } 
              $this->session->set_flashdata(array('alert' => 'danger', 'message' => $err));
              redirect('student/view_act/' . $cou_act_id);
            }
          } 

          $this->call->model('Student_model');

          if($this->Student_model->submit_act($cou_act_id, $user_id, $attachments, $date_submitted))
          {
            set_flash_alert('success', 'Submitted!');
            redirect('student/view_act/' . $cou_act_id);
          }
        } 
        else 
        {
          set_flash_alert('danger', $this->form_validation->errors());
        }
        
        redirect('student/view_act/' . $cou_act_id);

      }

    }

}


?>