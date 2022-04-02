<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index()
    {
        $this->load->helper('url');
        // How to load model
        $this->load->model(['Login_model' => 'm_login']);

        $data['title'] = "Login Page";
        
        // Use Model
        $data['users'] = $this->m_login->getAllUsers();
        
        //  Get User submitted data
        $data['input'] =(object) [
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password', true)
        ];
        
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // echo base_url();
        // echo site_url('/login/register');
        //  Load View
        $this->load->view('login/login_view.php', $data);
    }

    public function register()
    {
        echo "Hi";
    }
}
