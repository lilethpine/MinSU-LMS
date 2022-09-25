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


    
}


?>