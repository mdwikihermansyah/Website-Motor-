<?php
    defined('BASEPATH') or exit('Not Allowed Direct Access');

    class Dashboard extends CI_Controller{
        public function index(){
            $this->load->view('_partial/layout');
        }
    }
?>