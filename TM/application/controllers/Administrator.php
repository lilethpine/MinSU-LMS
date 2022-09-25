<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Administrator Controller
 * 1. Super Admin Profile
 * 2. Super Admin Home Page
 * 3. Super Admin .....
 */
class Administrator extends Controller {

  public function __construct() {
    parent:: __construct();

    if(!is_logged_in())
		{
			redirect('Access');
    }
    
    user_type_admin();
      
  }


    
}


?>