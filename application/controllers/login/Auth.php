<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    //pemanggilan file login
    public function index()
    {
            $this->load->view('login/login');
    
    }

    //pemanggilan file regist
    public function regist()
    {
            $this->load->view('login/regist');
    
    }
}
