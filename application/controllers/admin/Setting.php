<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller {

	private $table = "users";

	function index()
	{
		$users = $this->db->get($this->table);
		admin_template('setting/setting_view', compact('users'));	
	}

	function create()
	{
		$category = $this->db->get('setting_category');
		admin_template('setting/create', compact('category'));	
	}

	function store()
	{

		$this->db->insert($this->table, $this->input->post());
		redirect(base_url('admin/setting'));
	}

	function edit($id)
	{

		$any = $this->db->where('id', $id)->get($this->table)->row();
		admin_template('setting/edit', compact('any'));		
	}



	function update($id)
	{
		
		$this->db->where('id', $id)->update($this->table, $this->input->post());
		redirect(base_url('admin/setting'));
	}



	function delete($id)
	{
		$this->db->where('id', $id)->delete($this->table);
		redirect(base_url('admin/setting'));
	}

	function show($id)
	{

	}

	function change_password()
	{
		admin_template('setting/change_password','');
	}

	function validatepass()
	{
		$old = $this->input->post('old_password');
		$new = $this->input->post('new_password');
		$repeat = $this->input->post('repeat_password');

		if(admin_info()->password == sha1($old)){
			if($new == $repeat)
			{
				$this->db->where('id', admin_info()->id)->update('users',array('password' => sha1($new)));
				$this->session->set_flashdata('message', "<div class='alert alert-success'> Password Changed!</div>");
				redirect('admin/setting/change_password');
			}else{
				$this->session->set_flashdata('message', "<div class='alert alert-danger'> New Password and Repeat Password not match!</div>");
				redirect('admin/setting/change_password');
			}
		}else{
				$this->session->set_flashdata('message', "<div class='alert alert-danger'>Old Password is incorrect!</div>");
				redirect('admin/setting/change_password');
		}
	}

	function users()
	{
		$accounts = $this->db->get('consumers');
		$this->session->set_flashdata('info', "<div class='alert alert-info'>Note: If the status is = 1, Account is been Acticated else Status = 0, Account not been Acitivate Yet!!<br> The Action ResetAccount is designed to Reset only the USERNAME & PASSWORD of the consumer.</div>");
		admin_template('setting/user', compact('accounts'));
	}

	function reset_consumer($id)
	{
		$data = array(
				'username' => '',
				'password' => '',
				'used' => '0'
		);

		$this->db->where('id', $id)->update('consumers', $data);
		$this->session->set_flashdata('message', "<div class='alert alert-success'> Reset Account Success!!</div>");
		redirect('admin/setting/users');		
	}

}
