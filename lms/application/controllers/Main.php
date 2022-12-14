<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Main Controller (for Faculty only)
 * 1. Home Page
 */
class Main extends Controller {

    public function __construct() {
		parent:: __construct();

		if(!is_logged_in())
		{
			redirect('access');
		}

		user_type_instructor();
        
    }

	public function index() {
		$this->call->model('Course_model');
		$data['courses'] = $this->Course_model->get_course();
		$this->call->view('main_view' , $data);
		
	}

	
}
?>