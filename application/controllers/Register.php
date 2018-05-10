<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	private $table = "consumers";


function index()
	{
		$accounts = $this->db->get($this->table);
		site_template('register_number', compact('accounts'));	
	}

function validate_number()
	{
		$number = $this->input->post('number');

		$query = $this->db->where('account_number', $number)->get($this->table);

		$m1 = '<div class="alert alert-danger">Oops! This '. $number . ' is Activated, Please check your Account Number correctly. </div>';
		$m2 = '<div class="alert alert-danger">Oops! This '. $number . " doesn't exist! </div>";
		$m3 = '<div class="alert alert-success"><b>'. $number . '</b> is Ready, Please fill up the following to Activate your Account. </div>';

		if($query->num_rows() > 0)
		{
			$result = $query->row();
			if($result->used == 1)
			{ 
				$this->session->set_flashdata('message1', $m1);
				redirect('register');
			}else{

				$this->session->set_flashdata('message1', $m3);
				$SESSION['temp_number'] = $this->input->post('number');
				

				redirect("register/create_account/" . $result->id );
			}
		}else{
			 
			 $this->session->set_flashdata('message1', $m2);
			redirect('register');
		}

	}

	function create_account($id)
	{
		//$data = $this->db->get($this->table);
		$data['id'] = $id;
		site_template('register', $data);
	
	}

	function validate_account($id)
	{
		$data = array(
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'used' => '1'
		);

		$this->db->where('id', $id)->update('consumers', $data);
		redirect('login');

	}


}