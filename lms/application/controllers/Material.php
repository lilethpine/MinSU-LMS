<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Material Controller
 * 1. Create Material
 * 2. Edit/Update Material
 */
class Material extends Controller {

    public function __construct() {
		parent:: __construct();
    
      if(!is_logged_in())
      {
        redirect('Access');
      }
      user_type_instructor();
      }
    public function create_material()
    {
      
      $this->call->model('Materials_model','course_material');

      //save material
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('course_id')->required()
          ->name('mat_title')->required()
          ->name('mat_desc')->required();
          
        if($this->form_validation->run())
        {
          $user_id = $this->session->userdata('user_id');
          $course_id = $this->io->post('course_id');
          $cou_topic_id = $this->io->post('cou_topic_id');
          $mat_title = $this->io->post('mat_title');
          $mat_desc = $this->io->post('mat_desc');
		      $date_posted = date("Y-m-d h:i:s a");
          
          $mat_attachments = null;
          if ($_FILES["mat_attachments"]['tmp_name'] != '' or $_FILES["mat_attachments"]['name'] != '' ) {
            $this->call->library('upload', $_FILES["mat_attachments"]);
            $this->upload->max_size(12)
                  ->set_dir('public/materials/')
                  ->allowed_extensions(array('docx','doc','pdf'))
                  ->encrypt_name(); //encrypted filename
            if($this->upload->do_upload()) { // 2 params ang do_upload, overwrite at no_extension.nakafalse parehas by default
              $mat_attachments = $this->upload->get_filename();
            } else {
              $err = '';
              foreach($this->upload->get_errors() as $error) {
                $err = $err . ', ' . $error . '<br>';
              } 
              $this->session->set_flashdata(array('alert' => 'danger', 'message' => $err));
              redirect('course/view/'.$this->io->post('course_id'));
            }
          } 

          if($this->course_material->create_material($user_id,$course_id,$cou_topic_id,$mat_title,$mat_desc,$date_posted,$mat_attachments))
          {
            set_flash_alert('success', 'Material created successfully!');
          }
        } 
        else 
        {
          set_flash_alert('danger', $this->form_validation->errors());
        }
        
        redirect('course/view/'.$this->io->post('course_id'));

      }
    }
    public function edit_material()
    {
      
      $this->call->model('Materials_model','course_material');

      //edit material
      if($this->form_validation->submitted())
      {
        $this->form_validation
          ->name('course_id')->required()
          ->name('mat_title')->required()
          ->name('mat_desc')->required();
          
        if($this->form_validation->run())
        {
          $user_id = $this->session->userdata('user_id');
          $course_id = $this->io->post('course_id');
          $cou_topic_id = $this->io->post('cou_topic_id');
          $mat_title = $this->io->post('mat_title');
          $mat_desc = $this->io->post('mat_desc');
		      $date_posted = date("Y-m-d h:i:s a");
          
          $mat_attachments = null;
          if ($_FILES["mat_attachments"]['tmp_name'] != '' or $_FILES["mat_attachments"]['name'] != '' ) {
            $this->call->library('upload', $_FILES["mat_attachments"]);
            $this->upload->max_size(12)
                  ->set_dir('public/materials/')
                  ->allowed_extensions(array('docx','doc','pdf'))
                  ->encrypt_name(); //encrypted filename
            if($this->upload->do_upload()) { // 2 params ang do_upload, overwrite at no_extension.nakafalse parehas by default
              $mat_attachments = $this->upload->get_filename();
            } else {
              $err = '';
              foreach($this->upload->get_errors() as $error) {
                $err = $err . ', ' . $error . '<br>';
              } 
              $this->session->set_flashdata(array('alert' => 'danger', 'message' => $err));
              redirect('course/view/'.$this->io->post('course_id'));
            }
          } 

          if($this->course_material->create_material($user_id,$course_id,$cou_topic_id,$mat_title,$mat_desc,$date_posted,$mat_attachments))
          {
            set_flash_alert('success', 'Material created successfully!');
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