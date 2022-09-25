<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Access Controller
 * 1. Login
 * 2. Logout
 * 3. Create Account
 */

class Access extends Controller {

    public function __construct() {
		parent:: __construct();
	}

	public function index() {
        // --using is_logged_in function from app/helpers/user_helper.php
        if(is_logged_in()){
            check_logged_in_user_type();
        }else{
            $this->call->view('login_view');
        }
    }
    
    public function logging_in() {

        if($this->form_validation->submitted()) {

            $this->form_validation
                ->name('email')->required()
                ->name('password')->required();

            if($this->form_validation->run())
            {

                $email = $this->io->post('email');
                $password = $this->io->post('password');

                $this->call->model('auth/Login_model');
                $data = $this->Login_model->login($email, $password);
                if(empty($data)) 
                {
                    set_flash_alert('danger', 'Wrong email or password.');
                    redirect('access');
                }
                else
                {
                    // set sessions when logged in using session library
                    $this->session->set_userdata(
                        array(
                            'logged_in' => 1,
                            'user_id' => $data['user_id'],
                            'email' => $data['email'],
                            'user_type' => $data['user_type'],
                        )
                    );
                    // then redirect in Home page depends on user type , check the check_logged_in_user_type() function
                    check_logged_in_user_type();
                }

            }
            else
            {
                set_flash_alert('danger', $this->form_validation->get_errors());
                redirect('access');
            }
        }
    }
    
    public function creating_account() {

        if($this->form_validation->submitted()) {

            $this->form_validation
                ->name('password')
                    ->required('Password must not be empty.')
                    ->min_length(8, 'Password must be atleast 8 charaters in length.')
                ->name('email')
                    ->valid_email()
                    ->is_unique('user', 'email', $email, 'Email was already taken.')
                ->name('fname')
                    ->required('First Name must not be empty.')
                    ->max_length(100, 'First Name must not more than 100 charaters in length.')
                    ->min_length(1)
                ->name('mname')
                    ->max_length(100, 'Middle Name must not more than 100 charaters in length.')
                ->name('lname')
                    ->required('Last Name must not be empty.')
                    ->max_length(100, 'Last Name must not more than 100 charaters in length.')
                    ->min_length(1)
                ->name('name_ex')
                    ->max_length(10, 'Name extension must not more than 100 charaters in length.')
                ->name('sex')
                    ->required('Sex must not be empty.')
                    ->max_length(6, 'Sex must not more than 6 charaters in length.')
                    ->min_length(1)
                ->name('phone')
                    ->required('Phone must not be empty.')
                    ->max_length(13, 'Phone must not more than 13 charaters in length.')
                    ->min_length(1);
                
            if($this->form_validation->run()) 
            {
                $username = $this->io->post('username');
                $password = $this->io->post('password');
                $email = $this->io->post('email');
                $fname = $this->io->post('fname');
                $mname = $this->io->post('mname');
                $lname = $this->io->post('lname');
                $token = bin2hex(random_bytes(50));

                $this->call->model('auth/Signup_model');

                if($this->signup_model->register($username, $password, $email, $token, $fname, $mname, $lname, $user_type))
                {
                    set_flash_alert('success', 'You were successfully registered! Please check you email for verification.');

                    redirect('access');
                }
            } 
            else 
            {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('access');
            } 
            
        }

	}

    public function logout() {

        // clear sessions when logged out using session library
		$this->session->unset_userdata(
            array(
                'logged_in',
                'user_id',
                'email',
                'user_type'
            )
        );
		$this->session->sess_destroy();
		redirect('access');
	}


}
?>