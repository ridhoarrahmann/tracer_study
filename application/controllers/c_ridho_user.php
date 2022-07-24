<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_ridho_user extends CI_Controller{

    public function index(){
        $this->load->view('user/v_ridho_header');
        $this->load->view('user/v_ridho_sidebar');
        $this->load->view('user/v_ridho_topbar');
        $this->load->view('user/v_ridho_user');
        $this->load->view('user/v_ridho_footer');
    }
}