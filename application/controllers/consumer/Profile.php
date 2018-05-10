<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->session->userdata('user_id');
	}

	function index()
	{
		$data = $this->db->order_by('id')->get('consumers');
		consumer_template('profile/view', $data);	
	}
}
