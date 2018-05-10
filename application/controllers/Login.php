<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->session->userdata('user_id');
	}
	
	public function index()
	{
		$data = "";
		site_template('login_view', $data);
	}

	public function validate()
	{
		$Username = $this->input->post('username');
		$password = sha1($this->input->post('password'));

		
			$query = $this->db->where('username', $Username)->where('password', $password)->get('consumers');
			$type = 'consumers';
			$redirect = "consumer/view";

		if($query->num_rows() > 0){
			$user = $query->row();
			$data = [
				'user_id' => $user->id,
				'type' => $type
			];

			$this->session->set_userdata($data);
			redirect($redirect);

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger">Oops!! No Account Found. Please Sign-in Again</div>');
			redirect('/login');
		}
	}



	function admin()
	{	
		$data = "";
		site_template('login_admin_view', $data);
	}

	function admin_validate()
	{
			$username = $this->input->post('username');
		    $password = sha1($this->input->post('password'));

		
			$query = $this->db->where('username', $username)->where('password', $password)->get('users');
			$type = 'user';
			$redirect = "admin/dashboard";

			if($query->num_rows() > 0){
				$user = $query->row();
				$data = [
					'user_id' => $user->consumer_id,
					'type' => $type
				];

				$this->session->set_userdata($data);
				redirect($redirect);

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger">Oops!! No Account Found. Please Sign-in Again</div>');
				redirect('/login/admin');
			}
	}
}
