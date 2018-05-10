<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

	private $table = "components";

	function index()
	{
		$components = $this->db->select('*, components.name as component_name,components.id as component_id ')->from($this->table)->join('component_category', 'component_category.id = components.component_category_id','LEFT')->get();
		admin_template('component/index', compact('components'));	
	}

	function create()
	{
		$category = $this->db->get('component_category');
		admin_template('component/create', compact('category'));	
	}

	function store()
	{

		$this->db->insert($this->table, $this->input->post());
		redirect(base_url('admin/component'));
	}

	function edit($id)
	{
		$component = $this->db->where('id', $id)->get($this->table)->row();
		$category = $this->db->get('component_category');
		admin_template('component/edit', compact('component', 'category'));		
	}



	function update($id)
	{
		$this->db->where('id', $id)->update($this->table, $this->input->post());
		redirect(base_url('admin/component'));
	}



	function delete($id)
	{
		$this->db->where('id', $id)->delete($this->table);
		redirect(base_url('admin/component'));
	}

	function show($id)
	{

	}
}
