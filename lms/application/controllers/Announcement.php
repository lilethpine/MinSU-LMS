<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Announcement Controller
 * 1. Create Announcement
 * 2. View Announcements
 * 3. Edit/Update Announcements
 * 4. 
 */
class Announcement extends Controller {

    public function __construct() {
    parent:: __construct();
    
    if(!is_logged_in())
    {
      redirect('Access');
    }
    user_type_instructor();
    }

    public function create_announcement()
    {
      
      $this->call->model('Announcement_model','course_announcement');

      //save announcement
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('course_id')->required()
          ->name('title')->required()
          ->name('content')->required();
          
        if($this->form_validation->run())
        {
          $data['user_id'] = $this->session->userdata('user_id');

          $data['course_id'] = $this->io->post('course_id');
          $data['title'] = $this->io->post('title');
          $data['content'] = $this->io->post('content');
		      $data['date_posted'] = date("Y-m-d h:i:s a"); 

          if($this->course_announcement->create_announcement($data))
          {
            set_flash_alert('success', 'Announcement created successfully!');
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