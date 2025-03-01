<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends MY_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserLogin');
        $this->load->model('AddModel');
         
        // if(!empty($this->session->userdata('login_id'))) {
        //     redirect(front_base_url('signin-page')); 
        // }else{
           
        // }
    }

    // public function index()
    // {
    //     $this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email');
    //     $this->form_validation->set_rules('user_password', 'Password', 'required|trim|min_length[6]');

    //     if ($this->form_validation->run()){
    //         $post = $this->input->post();
    //         $check = $this->UserLogin->auth($post);
    //         // print_r($check);
    //         if($check){
    //             redirect('Page');
    //             }else{
    //                 $this->session->set_flashdata('errMsg', 'Invalid email or password');
    //                 redirect('Authenticate');
    //             }
    //         } else {
    //             $this->load->view('modules/template/signin_page_template');
    //         }
    // }



    public function index() 
	{
        $this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required|trim|min_length[6]');
		//Run Validation to Check form validation
		if ( $this->form_validation->run() ) {
			//Set Data into array
			$insertData = array(
				'user_email' => $this->input->post( 'user_email' ),
                'user_password' => $this->input->post( 'user_password' )
			);
            $check = $this->UserLogin->auth($insertData);
			// $RET_VALUE = $this->AddModel->InsetDB( 'tb_newsletter', $insertData );
			if ( $check == TRUE ) {				
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata( 'successContactMSG', 'User Successfully Login' );
				return redirect(front_base_url('owner-listing-page'));
                // redirect('Page');
				echo 1;
			} else {
				$this->session->set_flashdata( 'errorContactMSG', 'Invalid email or password.....' );
				return redirect( $_SERVER[ 'HTTP_REFERER' ] );
                // redirect('Authenticate');
				echo 0;
			}
		} else {
			//If validation error
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
            // $this->load->view('modules/template/signin_page_template');
			echo 0;
		}
	}

    
    public function register() 
	{
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email|is_unique[tb_user.user_email]',[
            'is_unique' => 'This email is already registered'
        ]);
        $this->form_validation->set_rules('user_password', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run()){
            $hashed_password = password_hash($this->input->post('user_password'), PASSWORD_DEFAULT);
              $user_types = implode(',', $this->input->post('user_type'));
            $insertData = array(
                'user_name' => $this->input->post('user_name'),
                // 'user_contact_number' => $this->input->post('user_contact_number'),
                'user_email' => $this->input->post('user_email'),
                'user_password' => $hashed_password,
                'user_type' => $user_types,
                // 'user_dob' => $this->input->post('user_dob'),
                // 'user_state' => $this->input->post('user_state'),
                // 'user_country' => $this->input->post('user_country'),
                // 'user_city' => $this->input->post('user_city'),
                // 'user_address' => $this->input->post('user_address'),
                // 'user_pin' => $this->input->post('user_pin'),
                // 'user_gender' => $this->input->post('user_gender'),
                // 'user_profile_picture' => $this->input->post('user_profile_picture'),
                'IsDel' => '0'
            );

            // echo "<pre>";
            // print_r($insertData);
            // die ;
			//Run InsertDB Function which insert data into database
			$insert_status = $this->AddModel->InsetDB('tb_user', $insertData);
            if ($insert_status) { // If insert was successful
                $user_id = $this->db->insert_id(); // Get the last inserted user ID
            
                // Fetch the newly inserted user's data
                $this->db->where('user_id', $user_id);
                $user = $this->db->get('tb_user')->result_array();
            
                // print_r($user);
                // die;
                if (!empty($user)) {
                    $user_data = $user[0]; // Fetch the first row (since result_array() returns an array of arrays)
                    
                    $this->session->set_userdata('login_id', $user_data['user_id']);
                    $this->session->set_userdata('user_name', $user_data['user_name']);
                    $this->session->set_userdata('user_type', $user_data['user_type']);
                
                    // if ($this->session->userdata('login_id')) {
                    //     print_r($this->session->userdata());
                    //     exit;
                    //     }
                        $this->session->set_flashdata( 'successContactMSG', 'User registered successfully....' );
                        return redirect(front_base_url('owner-listing-page'));
                        echo 1;
                    }
                } else {
                    $this->session->set_flashdata( 'errorContactMSG', 'Failed to registered.....' );
                    return redirect( $_SERVER[ 'HTTP_REFERER' ] );
                    // redirect('Authenticate/register');
                    echo 0;
                }
            } else {
                //If validation error
                //Set Flash Data and Redirect to List/Index Page
                $this->session->set_flashdata( 'errorContactMSG', validation_errors() );
                return redirect( $_SERVER[ 'HTTP_REFERER' ] );
                echo 0;
            }
	}


    public function check_email()
    {
        $email = $this->input->post('user_email');
        $this->db->where('user_email', $email);
        $query = $this->db->get('tb_user');
    
        if ($query->num_rows() > 0) {
            echo "false"; // Email exists
        } else {
            echo "true"; // Email is available
        }
    }
    


    // Logout Submission
    public function logout()
    {
        // If logged in, clear session data
        $this->session->unset_userdata('login_id');  
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_type');

        redirect(base_url());
   
    }
}
