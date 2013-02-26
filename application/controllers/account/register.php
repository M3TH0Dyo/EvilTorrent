<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));  // Form & URL helpers.
        $this->load->library('form_validation');    // Form validation library.        
    }
    
    public function Index()
    {
        
        /* Form requirements 
         * These requirements have to be met else the form reloads with validation_errors() included.
         */
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[16]|is_unique[users.username]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[confirm]');
        $this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('emailad', 'E-Mail', 'trim|required|valid_email|is_unique[users.email]');
        
        if($this->form_validation->run() == FALSE)
        {
                    $this->load->view('account/regstart'); // Load the registration form.
        } else {
            

            $widesalt = "ItZdVmFTbNx1wf31xt57QbnycyXrxh6FVxd9cFoOyIAVHDoyoAiZuA==";
            $timesalt = hash('sha256', time(). ":" . date('d m y'));
            
            // Just store all the data in a simple array.
            $userdata = array
                (
                   "username"     => $this->input->post('username' ),
                   "password"     => hash('sha512', $this->input->post('password') . ":" . $widesalt . ":" . $timesalt),
                   "email"        => $this->input->post('emailad'),
                   "UploadedTors" => 0,
                   "FirstName"    => $this->input->post('firstname'),
                   "LastName"     => $this->input->post('lastname'),
                   "lastlogin"    => $timesalt
                );         
            $this->db->insert('users', $userdata);
            
                    $this->load->view('account/regdone', $userdata); // Load the registration completed form.   
        }
        
    }

}

?>