<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Model
{
	
        public function auth($post) 
        {
            $query = $this->db->where(['user_email' => $post['user_email']])->get('tb_user');
        
            // Debugging step - Check if the query returns any rows
            // echo "SQL Query: " . $this->db->last_query();
            // print_r($query->row()); // Print fetched row
            // exit();
        
            if ($query->num_rows() > 0) {
                $arr = $query->row();
                $db_pass = $arr->user_password; // Hashed password from DB
                $user_id = $arr->user_id;
                $username = $arr->user_name;
        
                // Correct password verification
                if (password_verify($post['user_password'], $db_pass)) { // Compare raw password with hashed password
                    $this->session->set_userdata('login_id', $user_id);
                    $this->session->set_userdata('user_name', $username);
                    return $query->result_array();
                } else {
                    echo "Password does not match!";
                    return false;
                }
            } else {
                echo "User not found!";
                return false;
            }
        }
        
        
        
        
}