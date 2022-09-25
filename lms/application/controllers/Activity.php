<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Activity Controller
 * 1. Create Activity
 * 2. View Activities
 * 3. Edit/Update Activity
 */
class Activity extends Controller {

    public function __construct() {
		parent:: __construct();
        
    if(!is_logged_in())
    {
      redirect('Access');
    }
    user_type_instructor();
    }
    public function create_activity()
    {
      
      $this->call->model('Activity_model','course_activtiy');

      //save activity
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('course_id')->required()
          ->name('act_title')->required()
          ->name('act_desc')->required();
          
        if($this->form_validation->run())
        {
          $user_id = $this->session->userdata('user_id');
          $course_id = $this->io->post('course_id');
          $cou_topic_id = $this->io->post('cou_topic_id');
          $act_title = $this->io->post('act_title');
          $act_desc = $this->io->post('act_desc');
          $due_date = $this->io->post('due_date');
		      $date_posted = date("Y-m-d h:i:s a");
          
          $act_attachments = null;
          if ($_FILES["act_attachments"]['tmp_name'] != '' or $_FILES["act_attachments"]['name'] != '' ) {
            $this->call->library('upload', $_FILES["act_attachments"]);
            $this->upload->max_size(12)
                  ->set_dir('public/uploads/activity/')
                  ->allowed_extensions(array('docx','doc','pdf'))
                  ->encrypt_name(); //encrypted filename
            if($this->upload->do_upload()) { // 2 params ang do_upload, overwrite at no_extension.nakafalse parehas by default
              $act_attachments = $this->upload->get_filename();
            } else {
              $err = '';
              foreach($this->upload->get_errors() as $error) {
                $err = $err . ', ' . $error . '<br>';
              } 
              $this->session->set_flashdata(array('alert' => 'danger', 'message' => $err));
              redirect('course/view/'.$this->io->post('course_id'));
            }
          } 

          if($this->course_activtiy->create_activity($user_id,$course_id,$cou_topic_id,$act_title,$act_desc,$due_date,$date_posted,$act_attachments))
          {
            set_flash_alert('success', 'Activity created successfully!');
          }
        } 
        else 
        {
          set_flash_alert('danger', $this->form_validation->errors());
        }
        
        redirect('course/view/'.$this->io->post('course_id'));

      }
    }
    public function view_act($act_id) 
    {
      if(!empty($act_id))
      {
        $this->call->model('Activity_model');

        $data['activity'] = $this->Activity_model->get_act_info($act_id);

        $this->call->view('course/course_act_view', $data);
      }
    }

}
?>