<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Admin Controller
 * 1. Super Admin Login
 * 2. Super Admin Logout
 */
class Admin extends Controller {

  public function __construct() {
    parent:: __construct();
  }

  public function index() {
    // --using is_logged_in function from app/helpers/user_helper.php
    if(is_logged_in()){
        check_logged_in_user_type();
    }else{
        $this->call->view('admin/admin_signin_view');
    }
  }

  public function signin() {

    if($this->form_validation->submitted()) {

        $this->form_validation
            ->name('email')->required()
            ->name('password')->required();

        if($this->form_validation->run())
        {

            $email = $this->io->post('email');
            $password = $this->io->post('password');

            $this->call->model('auth/Admin_model', 'admin');
            $data = $this->admin->login($email, $password);
            if(empty($data)) 
            {
                set_flash_alert('danger', 'Wrong email or password.');
                redirect('admin');
            }
            else
            {
                // set sessions when logged in using session library
                $this->session->set_userdata(
                    array(
                        'logged_in' => 1,
                        'admin_id' => $data['admin_id'],
                        'email' => $data['email'],
                        'user_type' => 'admin',
                    )
                );
                // then redirect in Home page depends on user type , check the check_logged_in_user_type() function
                check_logged_in_user_type();
            }

        }
        else
        {
            set_flash_alert('danger', $this->form_validation->get_errors());
            redirect('admin');
        }
    }
  }

  public function logout() {

      // clear sessions when logged out using session library
      $this->session->unset_userdata(
              array(
                  'logged_in',
                  'admin_id',
                  'email',
                  'user_type'
              )
          );
      $this->session->sess_destroy();
      redirect('admin');
  } 
}


?>