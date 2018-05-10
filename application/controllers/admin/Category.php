<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	private $table = "component_category";

	function index()
	{
		$categorys = $this->db->get($this->table);
		admin_template('category/index', compact('categorys'));	
	}

	function create()
	{
		admin_template('category/create', "");	
	}

	function store()
	{

		$this->db->insert($this->table, $this->input->post());
		redirect(base_url('admin/category'));
	}

	function edit($id)
	{
		$category = $this->db->where('id', $id)->get($this->table)->row();
		admin_template('category/edit', compact('category'));		
	}



	function update($id)
	{
		$this->db->where('id', $id)->update($this->table, $this->input->post());
		redirect(base_url('admin/category'));
	}



	function delete($id)
	{
		$this->db->where('id', $id)->delete($this->table);
		redirect(base_url('admin/category'));
	}

	function show($id)
	{

	}
}
