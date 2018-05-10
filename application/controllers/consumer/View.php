<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->session->userdata('user_id');
	}

	function index()
	{
		$data = $this->db->order_by('id')->get('consumers');
		consumer_template('view', $data);	
	}

	function facilities()
	{
		$data = $this->db->order_by('id')->get('consumers');
		consumer_template('service/facilities', " ");	
	}
}
