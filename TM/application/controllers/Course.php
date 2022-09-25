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
        
    }

    public function all_courses()
    {
      $this->call->view('course/course_list_view');
    }

    public function add_course() 
    {
      $this->call->model('');
    }


    
}


?>