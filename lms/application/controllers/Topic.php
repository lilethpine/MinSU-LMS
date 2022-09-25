<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Topic Controller
 * 1. Add/Update Topics
 */
class Topic extends Controller {

    public function __construct() {
		parent:: __construct();
        
      if(!is_logged_in())
      {
        redirect('Access');
      }
      user_type_instructor();
    }

    public function create_topic()
    {
      $this->call->model('Topic_model','topic');

      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('course_id')->required()
          ->name('topic_desc')->required();
          
        if($this->form_validation->run())
        {
          $data['course_id'] = $this->io->post('course_id');
          $data['topic_desc'] = $this->io->post('topic_desc');

          if($this->topic->create_topic($data))
          {
            set_flash_alert('success', 'Topic created successfully!');
          }
        } 
        else 
        {
          set_flash_alert('danger', $this->form_validation->errors());
        }
        
        redirect('course/view/'.$this->io->post('course_id'));

      }
    }
    
}

?>