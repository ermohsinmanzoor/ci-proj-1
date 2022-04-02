<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function getAllUsers()
    {
        return [
            [
                'name' => "Mohsin",
                'age'  => "23"
            ],
            [
                'name' => "Shahid",
                'age'  => "26"
            ]
        ];
    }
}
