<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	 }
	public function index()
	{

		$this->form_validation->set_rules('email','Email','required|trim',array('required'=>'email harus di isi'));
		$this->form_validation->set_rules('password','Password','required',array('required'=>'password harus di isi'));

		if($this->form_validation->run()==false){
			$this->load->view('auth/header');
			$this->load->view('auth/login');
        	$this->load->view('auth/footer');

		}else{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->load->model('m_auth');
			$datauser=$this->m_auth->login($email);
			if($datauser){
				if(password_verify($password,$datauser['password'])){
					$this->session->set_userdata('email',$email);
					redirect('c_ridho_user');
				}
				else{
					redirect('auth');
				}
			}
			else{
			$this->load->view('auth/header');
			$this->load->view('auth/register');
			$this->load->view('auth/footer');              
			}

		}

        

	}

	public function register(){
		$this->form_validation->set_rules('name','Name','required',array('required'=>'Nama harus di isi'));
		$this->form_validation->set_rules('email','Email','required|trim',array('required'=>'E-Mail wajib di isi'));
		
		$this->form_validation->set_rules('password1','Password1','required|min_length[8]',array('required'=>'password harus di isi','min_length'=>'password minimal 8 karakter'));
		$this->form_validation->set_rules('password2','Password2','required|matches[password1]',array('required'=>'password harus di isi','matches'=>'password tidak sama'));
		if($this->form_validation->run()==false){
			$this->load->view('auth/header');
			$this->load->view('auth/register');
			$this->load->view('auth/footer');
	
		}
		else{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$password=$this->input->post('password1');
			
			$data=[
				'name'=>$name,
				'email'=>$email,
				'password'=>$password
			];
			$this->load->view('auth/header');
			$this->load->view('auth/v_ridho_register2',$data);
			$this->load->view('auth/footer');
			
	



		}
		
	}
	public function registerUserdetails(){
			$this->form_validation->set_rules('nis','NIS','required|trim',array('required'=>'NIS Harus di isi'));
			$this->form_validation->set_rules('jurusan','Jurusan','required',array('required'=>'Jurusan harus di isi'));
			$this->form_validation->set_rules('phone_number','Phone_number','required',array('required'=>'Nomor Telepon harus di isi'));
			
			
			
			if($this->form_validation->run()==false){
				
				$this->load->view('auth/header');
				$this->load->view('auth/v_ridho_register2');
				$this->load->view('auth/footer');
			}
			else{
				$name=$this->input->post('name');
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				$nis=$this->input->post('nis');
				$jurusan=$this->input->post('jurusan');
				$graduate_year=$this->input->post('graduate_year');
				$phone_number=$this->input->post('phone_number');
				// var_dump($nis);
				$this->load->model('m_auth');
				$this->m_auth->register($name,$email,$nis,$graduate_year,$jurusan,$phone_number,$password);
				redirect('auth');
			}
			
	}

}
