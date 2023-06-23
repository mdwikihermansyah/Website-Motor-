<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
     //Pmanggilan file regist
    public function index(){
        $this->load->view('login/regist');
    }
}

?>